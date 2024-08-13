<?php 
$heading = "Single Note";
$currentUser = 3;
$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
$note = $db->query("select * from notes where id = :id", ['id' => $_GET["id"]])->fetch();

    if(!$note) {
        abort(Response::NOT_FOUND);
    };

    if($note['user_id'] != $currentUser){
        abort(Response::FORBIDDEN); 
    };

 

require "views/note.view.php";