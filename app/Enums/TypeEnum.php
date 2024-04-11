<?php

namespace App\Enums;

use App\Enums\Traits\HasValues;

enum TypeEnum: string
{
    use HasValues;
    case BACK = 'back';
    case FRONT ='front';

}
