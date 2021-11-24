<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Page;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class PageResource extends Resource
{    
    public static $icon = 'heroicon-o-folder-open';
    public static $navigationLabel = 'Pages';
    public static $navigationSort = 1;


    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('title')->autofocus()->required(),
                Components\TextInput::make('slug')
                    ->helpMessage("similar with title - but all lowercase and space should be replaced with '-' ")
                    ->unique(Page::class, 'title', true)
                    ->required(),
                Components\TextInput::make('sub_title')->nullable(),
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
            Pages\ListPages::routeTo('/', 'index'),
            Pages\CreatePage::routeTo('/create', 'create'),
            Pages\EditPage::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
