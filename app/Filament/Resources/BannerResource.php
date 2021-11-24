<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Banner;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class BannerResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\FileUpload::make('image')->required(),
                Components\TextInput::make('title')->autofocus()->required(),
                Components\TextInput::make('sub_title')->nullable(),
                Components\RichEditor::make('description')->nullable(),
                Components\Select::make('published_at')
                    ->placeholder('Page status')
                    ->options([
                            'published' => 'Published',
                            'draft' => 'Draft',
                        ])
                        ->default('published'),
                Components\TextInput::make('order')->nullable(),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('title')->primary(),
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
            ->defaultSort('order', 'asc');
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
            Pages\ListBanners::routeTo('/', 'index'),
            Pages\CreateBanner::routeTo('/create', 'create'),
            Pages\EditBanner::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
