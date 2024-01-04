<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseSectionResource\Pages;
use App\Filament\Resources\CourseSectionResource\RelationManagers;
use App\Models\CourseSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseSectionResource extends Resource
{
    protected static ?string $model = CourseSection::class;
    protected static ?string $navigationGroup = "Courses";
    protected static ?string $navigationLabel = "Courses Sections";

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('course_id')->label('Course')
                    ->relationship('course', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('video_url')->label('video'),
                //Forms\Components\FileUpload::make('Support de cours')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('course.title'),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                //Tables\Columns\TextColumn::make('video_url')
                //    ->searchable(),
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
            'index' => Pages\ListCourseSections::route('/'),
            'create' => Pages\CreateCourseSection::route('/create'),
            'view' => Pages\ViewCourseSection::route('/{record}'),
            'edit' => Pages\EditCourseSection::route('/{record}/edit'),
        ];
    }
}
