<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ServiceRequest;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationIcon = 'heroicon-s-flag';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Projects Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Service Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Forms\Components\Select::make('data')
                                    ->label('List of Requests by Names')
                                    ->columnSpanFull()
                                    ->options(function () {
                                        return  DB::table('service_requests')
                                            ->leftJoin('projects', 'service_requests.id', '=', 'projects.requestID')
                                            ->select('service_requests.id', DB::raw("CONCAT(service_requests.customerName, ' - ', service_requests.serviceRequested) AS display"))
                                            ->whereNull('projects.requestID')
                                            ->get()
                                            ->pluck('display', 'id');
                                    })
                                    ->searchable()
                                    ->preload()
                                    ->live()
                                    ->hidden(fn (string $operation): bool => $operation !== 'create')
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                        if (blank($state)) return;

                                        $data = ServiceRequest::find($state);

                                        $set('clientID', $data->clientId);
                                        $set('requestID', $data->id);
                                        $set('category', $data->serviceRequested);
                                        $set('clientName', $data->customerName);
                                        $split = explode(" ", $data->serviceRequested);
                                        $newName = array_shift($split);
                                        $set('projectClass', $newName);
                                        // $set('',$data->);
                                    }),
                                Forms\Components\TextInput::make('category')
                                    ->readOnly()
                                    ->label('Project Category')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('clientName')
                                    ->readOnly()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Hidden::make('requestID'),
                                Forms\Components\Hidden::make('clientID'),
                                Forms\Components\TextInput::make('projectClass')
                                    ->readOnly()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\DatePicker::make('projectDate')
                                    ->required(),
                                Forms\Components\TextInput::make('projectURL')
                                    ->required()
                                    ->default('#')
                                    ->prefix('https://')
                                    ->suffix('.com')
                                    ->url()
                                    ->suffixIcon('heroicon-m-globe-alt')
                                    ->maxLength(255),
                                Forms\Components\Select::make('projectStatus')
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->options([
                                        'Completed' => 'Completed',
                                        'On Going' => 'On Going',
                                        'Cancelled' => 'Cancelled',
                                        'Pending' => 'Pending',
                                    ]),
                                Forms\Components\Toggle::make('approved')
                                    ->required(),
                                Forms\Components\RichEditor::make('projectDetails')
                                    ->required()
                                    ->columnSpanFull()
                                    ->maxLength(65535),
                                Forms\Components\FileUpload::make('projectImage')
                                    ->columnSpanFull()
                                    ->multiple()
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        $filename = $file->hashName();
                                        $name = explode('.', $filename);
                                        return (string) str('img/projects/' . $name[0] . '.webp');
                                    })
                                    ->required()
                                    ->imageEditorEmptyFillColor('#000000')
                                    ->imageEditor()
                                    ->downloadable()
                                    ->imageResizeMode('cover')
                                    // ->imageCropAspectRatio('1:1')
                                    // ->imageResizeTargetWidth('800')
                                    // ->imageResizeTargetHeight('800')
                                    ->label('Project Image'),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clientName')
                    ->icon('heroicon-m-user')
                    ->color('primary')
                    ->iconColor('primary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->color('primary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('projectDate')
                    ->dateTime('D, M Y')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('projectImage')
                    ->circular()
                    ->stacked()
                    ->searchable(),
                Tables\Columns\TextColumn::make('projectStatus')
                    ->icon(fn (string $state): string => match ($state) {
                        'Completed' => 'heroicon-s-trophy',
                        'Pending' => 'heroicon-s-wrench-screwdriver',
                        'Canceled' => 'heroicon-s-x-circle',
                        'On Going' => 'heroicon-s-rocket-launch',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'Completed' => 'success',
                        'Pending' => 'warning',
                        'Canceled' => 'danger',
                        'On Going' => 'success',
                    }),
                Tables\Columns\IconColumn::make('approved')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
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
