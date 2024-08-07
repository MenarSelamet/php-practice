<?php

$clicked = "rounded-md bg-gray-900 text-white";
$notClicked = "tex-gray-300";

function currentPage ($value) {
    return $_SERVER["REQUEST_URI"] === $value;
}


?>;