<?php

namespace App\Filament\Resources\SocialNetworkResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\SocialNetworkResource;

class CreateSocialNetwork extends CreateRecord
{
    protected static string $resource = SocialNetworkResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Social network Created')
            ->icon('heroicon-o-plus')
            ->iconColor('success')
            ->body('New Social network has been created Successifully');
    }
}
