<?php 
$heading = "My Notes";

$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
$query = "select * from notes ";
$notes = $db->query($query)->findAll();


require "views/notes/index.view.php";