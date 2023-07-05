<?php

namespace App\Helpers\Enums\Traits;

trait EnumCaseFinderTrait
{
    public static function findByKey(string $key)
    {
        return constant("self::$key");
    }
}
