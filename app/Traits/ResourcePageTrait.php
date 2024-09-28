<?php

namespace App\Traits;

trait ResourcePageTrait
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
