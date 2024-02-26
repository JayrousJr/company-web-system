<?php

namespace App\Filament\Resources\SocialNetworkResource\Pages;

use App\Filament\Resources\SocialNetworkResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSocialNetwork extends ViewRecord
{
    protected static string $resource = SocialNetworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
