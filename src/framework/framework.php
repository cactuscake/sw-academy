<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CUser;
use Framework\CDatabase;
use Framework\CMain;
use Framework\Config;

$APPLICATION = new CMain();
$USER = new CUser(["name", "email", "password", "role"]);
$CONFIG = Config::getInstanse();
