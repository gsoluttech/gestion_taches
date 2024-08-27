<?php
use Dotenv\Dotenv;
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';


$rootPath = realpath(__DIR__ . '/../');


if (!file_exists(__DIR__ . '/../.env')) {
    die('.env file not found!');
}




?>
