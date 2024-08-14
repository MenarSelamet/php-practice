<?php 
$heading = "My Notes";

$config = require 'config.php';
$db = new Database($config["database"],'root', '' );
$query = "select * from notes ";
$notes = $db->query($query)->findAll();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);