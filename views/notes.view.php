<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/head.php"; ?>
        <?php require "partials/main.php"; ?>
        <ul>
            <?php  foreach ($notes as $note) : ?>
            <li?><?= $note['body'] ?></li><br>
        </ul>
        <?php endforeach; ?>
    </div>

</body>

</html>