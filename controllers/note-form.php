<?php 
$heading = "Create Note";

$config = require 'config.php';
$db = new Database($config["database"],'root', '' );

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $db ->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body'=> htmlspecialchars($_POST['body']),
        'user_id'=> 2,
    ] ) ;
}



require "views/note-form.view.php";