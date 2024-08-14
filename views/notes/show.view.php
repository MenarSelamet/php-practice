<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require base_path("views/partials/nav.php"); ?>
        <?php require base_path("views/partials/head.php"); ?>
        <?php require base_path("views/partials/main.php"); ?>
        <p><?= htmlspecialchars($note['body']) ?></p>
        <p>
        <form class="mt-6" method="POST">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>
        <a href="/php-practice/notes" class="text-blue-700 hover:underline">Go back to Notes </a>
        </p>
    </div>

</body>

</html>