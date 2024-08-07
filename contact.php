<?php 

$heading = "Contact US";
$clicked = "rounded-md bg-gray-900 text-white";

$currentPage = $_SERVER["REQUEST_URI"];

echo $currentPage;

require "views/contact.view.php";

?>;