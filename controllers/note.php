<?php 
$heading = "Single Note";
$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
$note = $db->query("select * from notes where id = :id", ['id' => $_GET["id"]])->findOrFail();

$currentUser = 3;
$condition = $note['user_id'] != $currentUser;
   
authorize($condition, Response::FORBIDDEN );
   

 

require "views/note.view.php";