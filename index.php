<?php

//load .env file
require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//get app name from .env file
$appName = $_ENV['APP_NAME'];

//echo the app name
echo $appName;