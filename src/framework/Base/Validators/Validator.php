<?php

namespace Framework\Validators;

use Framework\Validators\UserValidator;

class Validator
{
    protected static $errors = [];

    public static function validate(array $data)
    {
        static::clearErrors();

        if ($data["name"] !== null) {
            UserValidator::validateName($data["name"]);
        }

        if ($data["email"] !== null) {
            UserValidator::validateEmail($data["email"]);
        }

        if ($data["password"] !== null) {
            UserValidator::validatePassword($data["password"]);
        }

        if (static::hasErrors()) {
            return static::getErrors();
        }

        return true;
    }

    public static function getErrors()
    {
        return self::$errors;
    }

    public static function hasErrors()
    {
        return !empty(self::$errors);
    }

    public static function clearErrors()
    {
        self::$errors = [];
    }
}
