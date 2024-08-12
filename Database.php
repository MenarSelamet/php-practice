<?php 

class Database {

public $connection;

public function __construct() {

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$this -> connection = new PDO($dsn, 'root');
}
public function query ($query) {






$statement = $this-> connection->prepare($query);
$statement->execute();
return $statement;
}
}




// dumpAndDie($posts);

$db = new Database();
$posts = $db ->query('select id, title from untitled_table_1 ')->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
echo "<li>" . $post['id'] . "</li>";
echo "<li>" . $post['title'] . "</li>";
};