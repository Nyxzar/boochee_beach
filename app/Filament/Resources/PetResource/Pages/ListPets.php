<?php

namespace App\Filament\Resources\PetResource\Pages;

use App\Filament\Resources\PetResource;
use Filament\Resources\Pages\ListRecords;

class ListPets extends ListRecords
{
    public static $resource = PetResource::class;
}
