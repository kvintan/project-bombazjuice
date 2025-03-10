<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Illuminate\Support\Number;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total IDR Orders', Order::query()->where('currency', 'idr')->count()),
            Stat::make('Total IDR Orders', Order::query()->where('currency', 'usd')->count()),
            Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total') ?? 0, 'IDR'))
        ];
    }
}
