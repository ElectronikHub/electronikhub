<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
        Stat::make('New Orders', Order::query()->where('staus', 'new')->count()),
        Stat::make('Processing', Order::query()->where('staus', 'processing')->count()),
        Stat::make('Shipped', Order::query()->where('staus', 'shipped')->count())


        ];
    }
}
