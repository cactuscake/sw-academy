<?php

namespace App\components\application;

use Framework\CUser;
use Exception;

include "framework/framework.php";

class Ajax
{
    /**
     * @throws Exeption
     */
    public function __invoke(string $name, ...$arguments)
    {
        $name .= "Action";

        if (!method_exists(self::class, $name)) {
            throw new Exception('Action not found');
        }

        return $this->$name(...$arguments);
    }

    /**
     * @throws Exception
     */
    public function createAction(array $payload = null)
    {
        if (empty($payload)) {
            throw new Exception('Payload is empty');
        }
        $user = new CUser(["name", "email", "password", "role"]);
        return $user->create(json_decode($payload['payload'], true));
    }
}
