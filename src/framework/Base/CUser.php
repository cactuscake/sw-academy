<?php

namespace Framework;

use Framework\Models\Model;

//use Framework\Base\CDatabase;

class CUser extends Model
{
    protected static string $table = "users";
    protected array $fillable = ["name", "email", "password", "role"];
}
