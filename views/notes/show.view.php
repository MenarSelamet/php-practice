<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require "views/partials/nav.php"; ?>
        <?php require "views/partials/head.php"; ?>
        <?php require "views/partials/main.php"; ?>
        <p><?= htmlspecialchars($note['body']) ?></p>
        <p>
            <a href="/php-practice/notes" class="text-blue-700 hover:underline ">Go back to Notes </a>
        </p>
    </div>

</body>

</html>