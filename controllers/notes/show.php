<?php 
$heading = "Single Note";
$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
$note = $db->query("select * from notes where id = :id", ['id' => $_GET["id"]])->findOrFail();


authorize($note['user_id'] != 2, Response::FORBIDDEN );
   

 

require "views/notes/show.view.php";