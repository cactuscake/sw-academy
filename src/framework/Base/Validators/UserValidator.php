<?php

namespace Framework\Validators;

use Framework\Validators\Validator;
use Framework\Traits\ValidationException;

class UserValidator extends Validator
{
    public static function validateName($name)
    {
        $errors = [];

        if (empty($name)) {
            self::$errors['name'] = 'Name is required.';
        } elseif (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            self::$errors['name'] = 'Name can only contain letters and spaces.';
        }
    }

    public static function validateEmail($email)
    {
        if (empty($email)) {
            self::$errors['email'] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            self::$errors['email'] = 'Invalid email format.';
        }
    }

    public static function validatePassword($password)
    {
        if (empty($password)) {
            self::$errors['password'] = 'Password is required.';
        } elseif (strlen($password) < 6) {
            self::$errors['password'] = 'Password must be at least 6 characters long.';
        }
    }
}
