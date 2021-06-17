<?php

require_once (__DIR__."/vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$hostname = $_ENV["DB_HOSTNAME"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$database = $_ENV["DB_DATABASE"];

$db = new mysqli($hostname,$username,$password,$database) or die("Did not connect to database");

session_start();


?>