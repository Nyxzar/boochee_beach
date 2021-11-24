<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Room;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class RoomResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('slug')
                ->helpMessage("similar with title - but all lowercase and space should be replaced with '-' ")
                ->unique(Room::class, 'title', true)
                ->autofocus()
                ->required(),
                Components\TextInput::make('sub_title')->nullable()->label('Intro Title'),
                Components\TextInput::make('title')->required(),
                // Components\RichEditor::make('intro_text')->nullable(),
                Components\FileUpload::make('image')->nullable()->label('Feature Image'),
                Components\TextInput::make('capacity')->nullable(),
                Components\RichEditor::make('description')->nullable(),
                Components\TextInput::make('reserve_url')->nullable(),
                Components\RichEditor::make('room_details')->nullable(),
                Components\FileUpload::make('room_image')->nullable(),
                Components\Select::make('published_at')
                    ->placeholder('Page status')
                    ->options([
                            'published' => 'Published',
                            'draft' => 'Draft',
                        ])
                        ->default('published'),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('title')->primary(),
                Columns\Text::make('slug'),
                Columns\Text::make('published_at')->label('Status'),
                Columns\Text::make('created_at')
            ])
            ->filters([
                Filter::make('title_asc', fn ($query) => $query->orderBy('title', 'ASC'))->label('Title - ASC'),
                Filter::make('title_desc', fn ($query) => $query->orderBy('title', 'DESC'))->label('Title - DESC'),
                Filter::make('created_at_asc', fn ($query) => $query->orderBy('created_at', 'ASC'))->label('Created at - ASC'),
                Filter::make('created_at_desc', fn ($query) => $query->orderBy('created_at', 'DESC'))->label('Created at - DESC'),
                Filter::make('published', fn ($query) => $query->whereNotNull('published_at')),
                Filter::make('draft', fn ($query) => $query->whereNull('published_at')),
            ])->reorderOn('order')
            ->defaultSortColumn('order');
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListRooms::routeTo('/', 'index'),
            Pages\CreateRoom::routeTo('/create', 'create'),
            Pages\EditRoom::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
