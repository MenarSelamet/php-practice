<?php 
$heading = "Single Note";

$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
$note = $db->query("select * from notes where id = :id", ['id' => $_GET["id"]])->fetch();

require "views/note.view.php";