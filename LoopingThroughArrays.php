<?php

$title = 'Learn Words Forever';

$heading = 'Believe you can remember every single word forever';

$body = 'This app will get you learning and <i>remembering</i> every word';

$names = ['Gail Foad', 'Ben Foad', 'Julie Fadden', 'Corinne Wilmott'];

$users = [
    ['name' => 'Gail', 'email' => 'gailfoad@gmail.com', 'cats' => 'Cyd & Nancy'],
    ['name' => 'Ben Foad', 'email' => 'benfoad@gmail.com'],
    ['name' => 'Julie Fadden', 'email' => 'juliefadden@gmail.com'],
    ['name' => 'Corinne Wilmott', 'email' => 'corinnewilmott@gmail.com']
];

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
    <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
        <ul class="mb-6">
            <?php for ($i = 0; $i < count($names); $i++) : ?>
                <li><?= $names[$i] ?></li>
            <?php endfor; ?>
        </ul>

        <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
        <ul class="mb-6">

            <?php  foreach ($names as $name) : ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>


        </ul>

        <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
        <ul class="mb-6">
            <?php  foreach ($names as $index => $name) : ?>
                <li><?= $index .': ' . $name ?></li>
            <?php endforeach; ?>

        </ul>


        <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
        <ul class="mb-6">

            <?php foreach ($users as $user) : ?>

            <li><?= $user["name"] . ': ' . $user["email"]  ?></li>

            <?php endforeach; ?>

        </ul>

        <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
        <ul class="mb-6">
            <?php foreach ($users as $user) : ?>

                <?php foreach($user as $key => $value) : ?>
                    <li>
                        <?= $key . ': ' . $value ?>
                    </li>
                <?php endforeach; ?>
                <br/>
            <?php endforeach; ?>

        </ul>

    </div>
</div>


</body>
