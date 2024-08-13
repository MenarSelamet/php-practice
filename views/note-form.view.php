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
        <form method="POST">
            <label for="body">Description:</label><br>
            <textarea type="text" name="body" id="body"></textarea><br>
            <button type="submit">Create</button>

        </form>
    </div>
</body>

</html>