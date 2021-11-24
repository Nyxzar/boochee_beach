<?php

namespace App\Filament\Resources\TodoResource\Pages;

use App\Filament\Resources\TodoResource;
use Filament\Resources\Pages\EditRecord;

class EditTodo extends EditRecord
{
    public static $resource = TodoResource::class;
}
