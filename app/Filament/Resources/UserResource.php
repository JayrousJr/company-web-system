<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Get;
use Filament\Tables\Filters\SelectFilter;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;

use function Pest\Laravel\options;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationGroup = 'System Management';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make('3')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                            ->dehydrated(fn (?string $state): bool => filled($state))
                            ->maxLength(255),
                    ]),
                Grid::make(1)
                    ->schema([
                        Forms\Components\Toggle::make('isTeamMember')
                            ->live()
                            ->required()
                            ->label('Is in Administrative Team')
                            ->hidden(!auth()->user()->isManager())
                            // fn (string $operation): bool => $operation === 'create'
                            ->required(),
                    ]),
                Grid::make(2)
                    ->schema([
                        Forms\Components\Select::make('profession')
                            ->searchable()
                            ->preload()
                            ->options([
                                'Frontend & Backend Developer' => 'Frontend & Backend Developer',
                                'Frontend Developer' => 'Frontend Developer',
                                'Backend Developer' => 'Backend Developer',
                                'Graphics Designer' => 'Graphics Designer',
                                'Cyber Security Professional' => 'Cyber Security Professional',
                                'Social Media Manager' => 'Social Media Manager',
                                'Digital Market Sepecialist' => 'Digital Market Sepecialist',
                            ]),
                        Forms\Components\Select::make('roles')
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->hidden()
                            ->searchable()
                            ->hidden(!auth()->user()->chief())
                            ->relationship('roles', 'name')
                            ->preload()
                            ->reactive(),
                    ]),
                // ->schema(fn (Get $get): array => match ($get('isTeamMember')) {
                //     // '1' => [

                //     // ],
                //     // default => [],
                // }),
                Grid::make()
                    ->schema([
                        Forms\Components\FileUpload::make('profile_photo_path')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageEditor()
                            ->imageResizeTargetWidth('500')
                            ->imageResizeTargetHeight('500')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, callable $get): string {
                                $name = $get('email');
                                // $fileName = Str::random(9);
                                // $name = explode('.', $fileName);
                                return (string) str('img/profile-photos/profile_' . $name . '.webp');
                            })->label('Profile Image'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profile_photo_path')
                    ->default('profile-photos/profile.jpg')
                    ->label('Image')
                    ->circular()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->icon('heroicon-m-user')
                    ->iconColor('primary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->copyable()
                    ->copyMessage('Email Address copied')
                    ->copyMessageDuration(1000)
                    ->icon('heroicon-m-envelope')
                    ->iconColor('primary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('profession')
                    ->color('green')
                    ->icon('heroicon-m-briefcase')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()->searchable(),
                SelectFilter::make('isTeamMember')
                    ->label('Users')
                    ->searchable()
                    ->options([
                        '0' => 'Clients',
                        '1' => 'Administrative Members',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}