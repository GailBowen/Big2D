<?php
$title = 'Learn Words Forever';

$heading = 'Learn German for 20th September';

$output = null;

$user = [
  'name' => 'Gail',
  'email' => 'gailtoad@gmail.com',
  'password' => 'password1',
  'hobbies' => ['Italian', 'Latin', 'Reading']
];

$user['address'] = "153 Best House Ever";

$output = $user['name'];

$output = $user['email'];

$output = $user['hobbies'][0];

unset($user['hobbies']);

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

    </div>
</div>


<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p6">
        <h2 class="text-xl"><?=$output?></h2>

        <h2 class = "text-xl font-semibold my-4">User:</h2>
        <p>
        <pre>
                <?php print_r($user); ?>
            </pre>
        </p>

        <h2 class = "text-xl font-semibold my-4">Users Array:</h2>
        <p>
        <pre>
<!--                --><?php //print_r($users); ?>
            </pre>
        </p>


    </div>
</div>



</body>

