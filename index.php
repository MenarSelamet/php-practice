<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';
$config = require 'config.php';


$db = new Database($config["database"],'root', '' );
$posts = $db ->query('select id, title from untitled_table_1 ')->fetchAll();

foreach ($posts as $post) {
echo "<li>" . $post['id'] . "</li>";
echo "<li>" . $post['title'] . "</li>";
};