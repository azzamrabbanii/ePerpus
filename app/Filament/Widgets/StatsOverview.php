<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Books;
use App\Models\Customer;
use App\Models\Charge;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Books', Books::count()),
            Card::make('Customers', Customer::count()),
            Card::make('Charges', Charge::count()),
        ];
    }
}
