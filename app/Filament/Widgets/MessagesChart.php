<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Message;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class MessagesChart extends ChartWidget
{
    protected static ?string $heading = 'Our Messages';
    // protected int | string | array $columnSpan = 'full';
    // protected static bool $isLazy = false;
    protected static ?int $sort = 3;
    protected static ?string $maxHeight = '300px';
    protected function getData(): array
    {
        $getMessages = Trend::model(Message::class)
            ->between(now()->startOfYear(), now()->endOfYear())
            ->perMonth()
            ->count('id');
        $labels = $getMessages->map(fn (TrendValue $value) => Carbon::parse($value->date)->format('M'));

        $data = $getMessages->map(fn (TrendValue $value) => $value->aggregate);

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Message',
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