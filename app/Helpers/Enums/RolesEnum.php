<?php

namespace App\Helpers\Enums;

use App\Helpers\Enums\Traits\EnumCaseFinderTrait;

enum RolesEnum : string
{
    use EnumCaseFinderTrait;

    case Admin = 'Admin';
    case Customer = 'Customer';
}
