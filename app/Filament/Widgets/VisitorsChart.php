<?php

namespace App\Filament\Widgets;

use App\Models\Visitor;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class VisitorsChart extends ChartWidget
{
    protected static ?string $heading = 'Visitors Within a Month';
    protected int | string | array $columnSpan = 'full';
    // protected static bool $isLazy = false;
    protected static ?int $sort = 9;
    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        // Getting Visitor
        $getVisitor = Trend::model(Visitor::class)->between(now()->startOfMonth(), now()->endOfMonth())->perDay()->count('id');

        $labels = $getVisitor->map(fn (TrendValue $trendValue) => Carbon::parse($trendValue->date)->format('d'));
        $data = $getVisitor->map(fn (TrendValue $trendValue) => $trendValue->aggregate);
        // Getting Refreshes
        $getrefresh = Trend::model(Visitor::class)->between(now()->startOfMonth(), now()->endOfMonth())->perDay()->sum('request');

        $data2 = $getrefresh->map(fn (TrendValue $trendValue) => $trendValue->aggregate);
        return [

            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Visitors',
                    'data' => $data,
                    'fill' => [
                        'target' => 'origin',
                        'below' => 'rgba(54, 162, 235, 0.2)',
                        'above' => 'rgba(54, 162, 235, 0.2)',
                    ],
                    'borderColor' => 'rgba(54, 162, 235, 0.7)',
                    'tension' => 0.5,
                ],  [
                    'label' => 'Requests',
                    'data' => $data2,
                    'fill' => [
                        'target' => 'origin',
                        'below' => 'rgba(219, 39, 119,0.3)',
                        'above' => 'rgba(219, 39, 119,0.3)',
                    ],
                    'borderColor' => 'rgba(219, 39, 119,0.7)',
                    'tension' => 0.5,
                ],

            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}