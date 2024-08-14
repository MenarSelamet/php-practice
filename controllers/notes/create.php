<?php 
require 'Validator.php';
$heading = "Create Note";

$config = require base_path('config.php');
$db = new Database($config["database"],'root', '' );




if($_SERVER['REQUEST_METHOD'] === 'POST' ){
    
        $errors= [];
        
    if (!Validator::string($_POST['body'], 1, 15)){
        $errors['body'] = 'A body of no more than 15 characters is required.';

    };
        if (empty($errors)){
        $db ->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body'=> htmlspecialchars($_POST['body']),
        'user_id'=> 2,
    ] ) ;
    } 

}


view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);