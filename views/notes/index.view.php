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
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <ul>
                    <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/php-practice/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                            <?= htmlspecialchars($note['body']) ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <p class="mt-6">
                    <a href="/php-practice/notes/create" class="text-blue-500 hover:underline">Create Note</a>
                </p>
            </div>
        </main>
    </div>

</body>

</html>