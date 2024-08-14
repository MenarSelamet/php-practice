<?php 
use Core\Database;
$heading = "Single Note";
$config = require base_path('config.php');
$db = new Database($config["database"],'root', '' );
$note = $db->query("select * from notes where id = :id", ['id' => $_GET["id"]])->findOrFail();


authorize($note['user_id'] != 2, Response::FORBIDDEN );
   

 
view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);