<?php

$heading = "Home";
$clicked = "rounded-md bg-gray-900";

function dumpAndDie() {
echo"<pre>";
var_dump($_SERVER);
echo "</pre";
  die();
}

require "views/index.view.php";

?>;