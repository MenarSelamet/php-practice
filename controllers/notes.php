<?php 
$heading = "My Notes";


$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
$query = "select * from notes where user_id = 3";
$notes = $db->query($query)->fetchAll();


require "views/notes.view.php";