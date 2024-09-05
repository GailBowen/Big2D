<?php
$title = 'Learn Words Forever';

$heading = 'Learn German for 20th September';

$output = null;

$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
];

$fruits[] = ['Mango', 'Green'];

$users = [
    ['name' => 'Julie', 'email' => 'julie@example.com', 'password' => 'password1'],
    ['name' => 'Corinne', 'email' => 'corinne@example.com', 'password' => 'password9'],
    ['name' => 'Neville', 'email' => 'neville@example.com', 'password' => 'password3'],
];

$users[] = ['name'=>'Gail', 'email'=>'gail@example.com', 'password'=>'password2' ];

$output = $users[2]["email"];

unset($users[2]);

$users = array_values($users);


//var_dump($users[2]["email"]);

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

        <h2 class = "text-xl font-semibold my-4">Users:</h2>
        <p>
        <pre>
                <?php print_r($users); ?>
            </pre>
        </p>

        <h2 class = "text-xl font-semibold my-4">Fruits:</h2>
        <p>
        <pre>
                <?php print_r($fruits); ?>
            </pre>
        </p>


    </div>
</div>



</body>

