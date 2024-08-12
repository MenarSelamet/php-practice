<?php

require 'functions.php';
// require 'router.php';

// class Person {
//     public $name;
//     public $age;

//     public function breathe () {

//         echo $this -> name . 'is breathing';
//     }
// }


// $person = new Person();
// $maya = new Person();

// $person->name = 'MOMO'; 
// $person->age = 'VERY YOUNG';  
// $person->breathe();  


// $maya->name =   'Maya';
// $maya->age = 'very old';
// $maya->breathe();


// dumpAndDie($maya);

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare('select * from untitled_table_1');   
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['id'] . "</li>";
    echo "<li>" . $post['title'] . "</li>";
};