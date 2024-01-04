<?php

namespace App\Filament\Resources\AchievementReviewResource\Pages;

use App\Filament\Resources\AchievementReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAchievementReview extends EditRecord
{
    protected static string $resource = AchievementReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
