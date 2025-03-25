<?php

declare(strict_types=1);

namespace Ed90\Services\NumVerify\Facades;

use Illuminate\Support\Facades\Facade;

class NumVerify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'numverify';
    }
}
