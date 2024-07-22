<!-- <?php
        // I'm going to conquer the world
        echo "I love Pizza so much <br>";
        echo "With extra cheese <br>";

        $name = "MAMA MIA";
        echo $name;
        $food = " you know it ";

        echo "<br> This is going to take some long time {$name}";
        echo "<br> You know what's on my mind {$food}";
        ?> -->


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label> Username: </label><br>
        <input type="text" name="username" /> <br>
        <label> Password: </label><br>
        <input type="password" name="password" /> <br>
        <input type="submit" value="Log in">

    </form>
</body>

</html>

<?php
echo $_POST['username'] . "<br>";
echo "{$_POST['password']} <br>";

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="quantity">Quantity:</label> <br>
        <input type="text" name="quantity" /> <br>
        <input type="submit" value="Total">
    </form>
</body>

</html>

<?php

$item = 'Pizza';
$price = 5.99;
$quantity = $_POST['quantity'];
 $total = $quantity * $price; 


echo "you have ordered {$quantity} pizzas and the total price is {$total}";
?>