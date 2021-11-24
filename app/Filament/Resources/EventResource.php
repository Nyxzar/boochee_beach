<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Event;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class EventResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('slug')
                    ->helpMessage("similar with title - but all lowercase and space should be replaced with '-' ")
                    ->unique(Event::class, 'title', true)
                    ->autofocus()
                    ->required(),
                Components\TextInput::make('title')->autofocus()->required(),
                Components\TextInput::make('sub_title')->nullable(),
                Components\DatePicker::make('event_date')->nullable(),
                Components\TextInput::make('event_time')->nullable(),
                Components\RichEditor::make('intro_text')->nullable(),
                Components\FileUpload::make('image')->nullable(),
                Components\RichEditor::make('description')->nullable(),
                Components\RichEditor::make('sub_description')->nullable(),
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
            Pages\ListEvents::routeTo('/', 'index'),
            Pages\CreateEvent::routeTo('/create', 'create'),
            Pages\EditEvent::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
