<?php 
$heading = "Create Note";

$config = require 'config.php';
$db = new Database($config["database"],'root', '' );




if($_SERVER['REQUEST_METHOD'] === 'POST' ){
    
        $errors= [];
    if (strlen($_POST['body']) === 0 ){
        $errors['body'] = 'You have to fill this area!!';

    };
     if (strlen($_POST['body']) > 15 ){
        $errors['body'] = 'The body can not be more than 15 character!';

    };
        if (empty($errors)){
        $db ->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body'=> htmlspecialchars($_POST['body']),
        'user_id'=> 2,
    ] ) ;
    } 

}


require "views/note-form.view.php";