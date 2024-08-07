<?php

$heading = "Home";
$clicked = "rounded-md bg-gray-900 text-white";

// function dumpAndDie($value) {
// echo"<pre>";
// var_dump($value);
// echo "</pre";
//   die();
// }

// dumpAndDie($_SERVER["REQUEST_URI"]);

$currentPage = $_SERVER["REQUEST_URI"];

echo $currentPage;

require "views/index.view.php";

?>;