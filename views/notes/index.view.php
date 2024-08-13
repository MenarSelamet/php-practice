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
        <ul>
            <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/php-practice/note?id=<?= $note['id'] ?>" class=" text-blue-700 hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
        </ul>
        <?php endforeach; ?>

        <a href="/php-practice/notes/form" class="text-blue-700 hover:underline">Click here to Add a Note</a>
    </div>

</body>

</html>