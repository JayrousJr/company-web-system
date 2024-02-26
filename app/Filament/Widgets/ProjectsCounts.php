<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ProjectsCounts extends ChartWidget
{
    protected static ?string $heading = 'Projects ';
    // protected int | string | array $columnSpan = 'full';
    // protected static bool $isLazy = false;
    protected static ?int $sort = 4;
    protected static ?string $maxHeight = '300px';
    protected function getData(): array
    {
        $projects = Trend::model(Project::class)->between(now()->startOfYear(), now()->endOfYear())->perMonth()->count('id');

        $labels = $projects->map(fn (TrendValue $trendValue) => Carbon::parse($trendValue->date)->format('M'));
        $data = $projects->map(fn (TrendValue $trendValue) => $trendValue->aggregate);
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Projects',
                    'data' => $data,
                    'fill' => [
                        'target' => 'origin',
                        'below' => 'rgba(54, 162, 235, 0.2)',
                        'above' => 'rgba(54, 162, 235, 0.2)',
                    ],
                    'borderColor' => 'rgba(54, 162, 235, 0.7)',
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