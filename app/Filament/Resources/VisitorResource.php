<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorResource\Pages;
use App\Filament\Resources\VisitorResource\RelationManagers;
use App\Models\Visitor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisitorResource extends Resource
{
    protected static ?string $model = Visitor::class;
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-eye';
    protected static ?string $navigationGroup = 'System Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ipAddress')
                    ->maxLength(255),
                Forms\Components\TextInput::make('visits')
                    ->required()
                    ->numeric()
                    ->default(0),
                // Forms\Components\TextInput::make('location')
                //     ->maxLength(255)
                //     ->default('NULL'),
                // Forms\Components\TextInput::make('platform')
                //     ->maxLength(255)
                //     ->default('NULL'),
                // Forms\Components\TextInput::make('browser')
                //     ->maxLength(255)
                //     ->default('NULL'),
                // Forms\Components\TextInput::make('language')
                //     ->maxLength(255)
                //     ->default('NULL'),
                // Forms\Components\TextInput::make('device')
                //     ->maxLength(255)
                //     ->default('NULL'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ip')
                    ->copyable()
                    ->copyMessage('IP address copied')
                    ->copyMessageDuration(1000)
                    ->icon('heroicon-m-globe-alt')
                    ->iconColor('primary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('request')
                    ->badge()
                    ->color('primary')
                    ->icon('heroicon-s-x-mark')
                    ->iconColor('green'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Visited')
                    ->dateTime()
                    ->since()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
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
            'index' => Pages\ListVisitors::route('/'),
            'create' => Pages\CreateVisitor::route('/create'),
            'view' => Pages\ViewVisitor::route('/{record}'),
            'edit' => Pages\EditVisitor::route('/{record}/edit'),
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
