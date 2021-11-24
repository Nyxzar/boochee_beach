<?php

namespace App\Filament\Resources\TodoResource\Pages;

use App\Filament\Resources\TodoResource;
use Filament\Resources\Pages\ListRecords;

class ListTodos extends ListRecords
{
    public static $resource = TodoResource::class;
}
