<?php

namespace App\Models;

enum UserRoles: int
{
    case GUEST = 0;
    case ADMIN = 10;
    case REDACTOR = 20;

}
