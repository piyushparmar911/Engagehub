<?php

date_default_timezone_set('Asia/Kolkata');

// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "engagehubdb";

// $connection = mysqli_connect("localhost", "root", "", "engagehub");

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/EngageHub");
define("BASE_URL", "/EngageHub");

function pathOf($path)
{
    return BASE_DIR . "/" . $path;
}

function urlOf($path)
{
    return BASE_URL . '/' . $path;
}

session_start();