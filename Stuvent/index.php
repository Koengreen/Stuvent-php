<?php
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Stuvent";
$titleSuffix = "";
var_dump($params);

switch ($params[1]) {
    case "info":
        var_dump($params[1]);
        include_once "./Templates/info.php";
        break;




    default:
        $titleSuffix = ' | Home';
        include_once "./Templates/home.php";
break;
}


