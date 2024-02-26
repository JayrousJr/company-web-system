<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverView extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('We now offer Computer Solutions', '9+ Services')
                ->description('Including Network Security')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Professional & qualified Developers in', '9+ Developers')
                ->description('We Design the Perfect work ')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([100, 20, 5, 50, 55, 72, 99])
                ->color('danger'),
            Stat::make('Our Happy Customers', '99k+')
                ->description('To Us, you are the king')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([10, 20, 5, 50, 55, 72, 99])
                ->color('success'),
        ];
    }
}