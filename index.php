<?php

$title = 'Learn Words Forever';

$heading = 'Believe you can remember every single word';

$body = 'This app will get you learning and <i>remembering</i> every word';

$firstName = 'Gail';
$lastName = 'Foad';

$fullName = $firstName . ' ' . $lastName;

?>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class-"bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title ?></h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p6">
            <h2 class="text-2xl font-semibold mb-4"> <?= $heading ?></h2>

            <p><?= "Hello, is your name {$fullName}?" ?></p>

        </div>
    </div>


</body>