<?php

namespace App\Filament\Resources\ChargeResource\Pages;

use App\Filament\Resources\ChargeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCharge extends CreateRecord
{
    protected static string $resource = ChargeResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
