<?php

namespace App\Filament\Resources\AchievementReviewResource\Pages;

use App\Filament\Resources\AchievementReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAchievementReviews extends ListRecords
{
    protected static string $resource = AchievementReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
