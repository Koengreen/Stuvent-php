<?php
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    default:
        $titleSuffix = ' | Home';
        include_once "./Templates/home.php";
}
