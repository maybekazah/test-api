<?php

namespace App\Enums;

use App\Enums\Traits\HasValues;

enum RoleEnum: string
{
    use HasValues;
    case USER = 'user';
    case WORKER ='worker';
    case ADMIN = 'admin';

}
