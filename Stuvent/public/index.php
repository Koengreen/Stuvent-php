<?php
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Stuvent";
$titleSuffix = "";

switch ($params[1]) {
    case "info":
        include_once "../Templates/info.php";
        break;

    case "login":
        include_once "../Templates/login.php";
        break;

    case "signup":
        include_once "../Templates/signup.php";
        break;

    case "about":
        include_once "../Templates/about.php";
        break;




    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
break;
}


