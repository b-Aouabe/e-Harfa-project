<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementReviewResource\Pages;
use App\Filament\Resources\AchievementReviewResource\RelationManagers;
use App\Models\AchievementReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementReviewResource extends Resource
{
    protected static ?string $model = AchievementReview::class;
    protected static ?string $navigationGroup = "Achievements";
    protected static ?string $navigationLabel = "Achievements reviews";

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('achievement_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('rating')
                    ->numeric(),
                Forms\Components\Textarea::make('comment')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('achievement_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rating')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAchievementReviews::route('/'),
            'create' => Pages\CreateAchievementReview::route('/create'),
            'view' => Pages\ViewAchievementReview::route('/{record}'),
            'edit' => Pages\EditAchievementReview::route('/{record}/edit'),
        ];
    }
}
