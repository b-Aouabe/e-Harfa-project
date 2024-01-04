<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnrollementResource\Pages;
use App\Filament\Resources\EnrollementResource\RelationManagers;
use App\Models\Enrollement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EnrollementResource extends Resource
{
    protected static ?string $model = Enrollement::class;
    protected static ?string $navigationGroup = "Courses";
    protected static ?string $navigationLabel = "Enrollments";

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-on-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('course_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('completed_sections')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Student'),
                Tables\Columns\TextColumn::make('course.title'),
                Tables\Columns\TextColumn::make('completed_sections')
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
            'index' => Pages\ListEnrollements::route('/'),
            'create' => Pages\CreateEnrollement::route('/create'),
            'view' => Pages\ViewEnrollement::route('/{record}'),
            'edit' => Pages\EditEnrollement::route('/{record}/edit'),
        ];
    }
}
