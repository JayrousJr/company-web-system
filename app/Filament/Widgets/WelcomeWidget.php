<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class WelcomeWidget extends Widget
{
    // protected int | string | array $columnSpan = 'full';
    protected static bool $isLazy = false;
    protected static ?int $sort = -2;
    // protected static ?string $maxHeight = '250px';
    protected static string $view = 'filament.widgets.welcome-widget';
}