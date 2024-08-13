<?php 
$heading = "Notes";

$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
//  $id = $_GET["id"];
$query = "select * from notes where user_id = 2";
$notes = $db->query($query)->fetchAll();
//dumpAndDie($posts);

// $notes = [$posts];




require "views/notes.view.php";