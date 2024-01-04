<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;
    protected static ?string $navigationGroup = "Courses";
    protected static ?string $navigationLabel = "Courses";

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        $course =  $form->getModel();
        return $form
            ->schema([
                Forms\Components\Select::make('instructor', 'instructor_id')
                    ->options(User::all()->where('role','instructor')->pluck('name', 'name'))
                    //->default($course->instrutor->user->name)
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('category', 'category_id')
                    ->relationship('category', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('excerpt')
                    ->required()
                    ->maxLength(2555),
                Forms\Components\Textarea::make('body')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Select::make('difficulty')
                    ->options([
                        'easy' => 'Easy',
                        'normal' => 'Normal',
                        'advanced' => 'Advanced',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('instructor.user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('difficulty')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('popularity')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'view' => Pages\ViewCourse::route('/{record}'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
