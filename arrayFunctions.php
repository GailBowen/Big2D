<?php
$title = 'Learn Words Forever';

$heading = 'Learn German for 20th September';

$output = null;

//$ids = [10, 22, 15, 45, 67, 33];

$ids = [10, 22, 3];

$users = ['user3', 'user2', 'user6'];

$output = count($ids);

//sort($ids);

//rsort($ids);

$users[] = 'user4';

array_push($users, 'user5', 'user92');

array_pop($users);

//remove from the beginning:
array_shift($users);

//add to the beginning:
array_unshift($users, 'user0');

//slice off a chunk of the array:
$ids2 = array_slice($ids, 2, 2);

//replace part of the array with something else.
//array_splice($ids, 1, 1, 'new id');

//var_dump($ids2);

//sort($users);

$output = 'Sum of IDs: ' . array_sum($ids);

$output = 'user6 is at :' . array_search('user6', $users);

$output = 'user99 exists: ' . in_array('user99', $users);

$tags = 'tech,code,programming';
$tagsArray = explode(',', $tags);

//var_dump($tagsArray);

$output = implode(', ', $tagsArray);


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

        <h2 class = "text-xl font-semibold my-4">IDs Array:</h2>
        <p>
            <pre>
                <?php print_r($ids); ?>
            </pre>
        </p>

        <h2 class = "text-xl font-semibold my-4">Users Array:</h2>
        <p>
        <pre>
                <?php print_r($users); ?>
            </pre>
        </p>


    </div>
</div>



</body>

