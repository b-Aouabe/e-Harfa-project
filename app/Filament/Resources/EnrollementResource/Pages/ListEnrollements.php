<?php

namespace App\Filament\Resources\EnrollementResource\Pages;

use App\Filament\Resources\EnrollementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEnrollements extends ListRecords
{
    protected static string $resource = EnrollementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
