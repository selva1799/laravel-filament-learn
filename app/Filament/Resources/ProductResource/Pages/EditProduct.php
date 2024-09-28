<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Traits\ResourcePageTrait;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    use ResourcePageTrait;

    protected static string $resource = ProductResource::class;

}
