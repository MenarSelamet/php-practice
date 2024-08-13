<?php 
$heading = "Create Note";


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    dumpAndDie('You sumbitted the form');
}

require "views/note-form.view.php";