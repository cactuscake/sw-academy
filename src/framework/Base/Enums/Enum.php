<?php

namespace Framework\Enums;

enum Role: int
{
    case UNAUTHORIZED = 0;
    case ADMIN = 1;
    case USER = 2;
}
