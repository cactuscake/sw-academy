<?php

namespace Framework\UserValidator;

class UserValidator
{
    private static $errors = [];

    public static function validate(array $data)
    {
        UserValidator::clearErrors();

        if ($data["name"] !== null) {
            UserValidator::validateName($data["name"]);
        }

        if ($data["email"] !== null) {
            UserValidator::validateEmail($data["email"]);
        }

        if ($data["password"] !== null) {
            UserValidator::validatePassword($data["password"]);
        }

        if (UserValidator::hasErrors()) {
            return UserValidator::getErrors();
        }

        return true;
    }

    public static function validateName($name)
    {
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
/*
    public static function validateRole($role) {
        $validRoles = ['admin', 'user'];
        if (empty($role)) {
            self::$errors['role'] = 'Role is required.';
        } elseif (!in_array($role, $validRoles)) {
            self::$errors['role'] = 'Invalid role. Allowed roles are: admin, user.';
        }
    }
*/
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
