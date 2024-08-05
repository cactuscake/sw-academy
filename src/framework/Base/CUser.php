<?php

namespace Framework;

use Framework\Models\Model;

class CUser extends Model
{
    protected static string $table = "users";
    protected array $fillable = ["name", "email", "password"];
}
