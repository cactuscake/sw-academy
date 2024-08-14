<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CUser;
use Framework\CDatabase;
use Framework\CMain;
use Framework\CApi;
use Framework\Config;

$API = new CApi();
$APPLICATION = new CMain();
$USER = new CUser(["name", "email", "password", "role"]);
$CONFIG = Config::getInstanse();
