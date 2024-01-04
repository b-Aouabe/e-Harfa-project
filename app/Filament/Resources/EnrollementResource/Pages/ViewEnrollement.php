<?php

namespace App\Filament\Resources\EnrollementResource\Pages;

use App\Filament\Resources\EnrollementResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEnrollement extends ViewRecord
{
    protected static string $resource = EnrollementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
