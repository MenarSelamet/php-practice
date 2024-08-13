<?php



require 'functions.php';
require 'router.php';
require 'Database.php';
$config = require 'config.php';


$db = new Database($config["database"],'root', '' );
//dumpAndDie($_GET["id"]);
 $id = $_GET["id"];
$query = "select * from notes where user_id = ?";
$posts = $db ->query($query,  [$id] )->fetchAll();
dumpAndDie($posts);

// foreach ($posts as $post) {
// // echo "<li>" . $post['id'] . "</li>";
// // echo "<li>" . $post['title'] . "</li>";
// echo $post['title'];
// };