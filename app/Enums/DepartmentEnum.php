<?php

namespace App\Enums;

use App\Enums\Traits\HasValues;

enum DepartmentEnum: string
{
    use HasValues;

    case MANAGEMENT = 'management';

    case SALES = 'sales';

    case PRODUCTION = 'production';

}
