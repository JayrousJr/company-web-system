<?php

namespace App\Filament\Widgets;

use App\Models\ServiceRequest;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ServiceRequests extends ChartWidget
{
    protected static ?string $heading = 'Service Requests';
    // protected int | string | array $columnSpan = 'full';
    // protected static bool $isLazy = false;
    protected static ?int $sort = 5;
    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $serivices = Trend::model(ServiceRequest::class)->between(now()->startOfYear(), now()->endOfYear())->perMonth()->count('id');

        $labels = $serivices->map(fn (TrendValue $trendValue) => Carbon::parse($trendValue->date)->format('M'));
        $data = $serivices->map(fn (TrendValue $trendValue) => $trendValue->aggregate);
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Requests',
                    'data' => $data,
                    'backgroundColor' =>  [
                        'rgba(37, 99, 235,0.3)', //blue
                        'rgba(202, 138, 4,0.3)', //yellow
                        'rgba(219, 39, 119,0.3)', //pink
                        'rgba(71, 85, 105,0.3)', //slate'
                        'rgba(220, 38, 38,0.3)', //red
                        'rgba(8, 145, 178,0.3)', //cyan
                        'rgba(13, 148, 136,0.3)', //teal
                        'rgba(225, 29, 72,0.3)', //rose
                        'rgba(192, 38, 211,0.3)', //fuchsia
                        'rgba(22, 163, 74,0.3)', //green
                        'rgba(71, 85, 105,0.3)', //slate'
                        'rgba(2, 132, 199,0.3)', //sky
                        'rgba(79, 70, 229,0.3)', //indigo
                        'rgba(217, 119, 6,0.3)', //amber
                        'rgba(101, 163, 13,0.3)', //lime
                        'rgba(22, 163, 74,0.3)', //green
                        'rgba(234, 88, 12,0.3)', //orange
                        'rgba(147, 51, 234,0.3)', //purple
                        'rgba(5, 150, 105,0.3)', //emerald


                    ],
                    'borderColor' =>  [
                        'rgb(37, 99, 235)', //blue
                        'rgb(202, 138, 4)', //yellow
                        'rgb(147, 51, 234)', //purple
                        'rgb(79, 70, 229)', //indigo
                        'rgb(220, 38, 38)', //red
                        'rgb(192, 38, 211)', //fuchsia
                        'rgb(71, 85, 105)', //slate'
                        'rgb(22, 163, 74)', //green
                        'rgb(219, 39, 119)', //pink
                        'rgb(225, 29, 72)', //rose
                        'rgb(71, 85, 105)', //slate'
                        'rgb(8, 145, 178)', //cyan
                        'rgb(2, 132, 199)', //sky
                        'rgb(234, 88, 12)', //orange
                        'rgb(217, 119, 6)', //amber
                        'rgb(101, 163, 13)', //lime
                        'rgb(22, 163, 74)', //green
                        'rgb(5, 150, 105)', //emerald
                        'rgb(13, 148, 136)', //teal
                    ],
                    'borderWidth' =>  1
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}