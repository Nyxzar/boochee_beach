<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PetResource\Pages;
use App\Filament\Resources\PetResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Pet;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class PetResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->autofocus()->required(),
                Components\TextInput::make('slug')
                    ->helpMessage("similar with title - but all lowercase and space should be replaced with '-' ")
                    ->unique(Pet::class, 'name', true)
                    ->required(),
                Components\TextInput::make('tag')->nullable(),
                Components\FileUpload::make('image')->nullable(),
                Components\RichEditor::make('description')->nullable(),
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
                Columns\Text::make('name')->primary(),
                Columns\Text::make('slug'),
                Columns\Text::make('published_at')->label('Status'),
                Columns\Text::make('created_at')
            ])
            ->filters([
                Filter::make('name_asc', fn ($query) => $query->orderBy('name', 'ASC'))->label('Name - ASC'),
                Filter::make('name_desc', fn ($query) => $query->orderBy('name', 'DESC'))->label('Name - DESC'),
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
            Pages\ListPets::routeTo('/', 'index'),
            Pages\CreatePet::routeTo('/create', 'create'),
            Pages\EditPet::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
