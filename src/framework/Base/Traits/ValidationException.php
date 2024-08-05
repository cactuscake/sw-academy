<?php

namespace Framework\Traits;

class ValidationException extends \Exception
{
    protected $errors;

    public function __construct($errors)
    {
        $this->errors = $errors;
        parent::__construct("Validation errors occurred.");
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
