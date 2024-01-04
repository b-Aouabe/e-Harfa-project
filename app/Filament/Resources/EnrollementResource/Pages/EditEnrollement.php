<?php

namespace App\Filament\Resources\EnrollementResource\Pages;

use App\Filament\Resources\EnrollementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEnrollement extends EditRecord
{
    protected static string $resource = EnrollementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
