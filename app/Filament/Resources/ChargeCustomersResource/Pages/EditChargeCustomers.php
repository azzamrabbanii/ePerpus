<?php

namespace App\Filament\Resources\ChargeCustomersResource\Pages;

use App\Filament\Resources\ChargeCustomersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChargeCustomers extends EditRecord
{
    protected static string $resource = ChargeCustomersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
