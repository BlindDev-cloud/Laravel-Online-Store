<?php

namespace App\Helpers\Enums;

use App\Helpers\Enums\Traits\EnumCaseFinderTrait;

enum OrderStatusesEnum: string
{
    use EnumCaseFinderTrait;

    case InProcess = 'InProcess';
    case Paid = 'Paid';
    case Completed = 'Completed';
    case Canceled = 'Canceled';
}
