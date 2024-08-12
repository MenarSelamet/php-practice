<?php

$clicked = "rounded-md bg-gray-900 text-white";
$notClicked = "tex-gray-300";

function currentPage ($value) {
    return $_SERVER["REQUEST_URI"] === $value;
}

function dumpAndDie($value) {
echo"<pre>";
var_dump($value);
echo "</pre";
  die();
}

// dumpAndDie($_SERVER["REQUEST_URI"]);
// $currentPage = $_SERVER["REQUEST_URI"];