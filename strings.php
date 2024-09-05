<?php

$title = 'Learn Words Forever';

$heading = 'Learn German for 20th September';

$output = null;

$string = 'hello wolfcub!';

$output = strlen($string);

$output = str_word_count($string);

$output = strpos($string, 'Wolf');

$output = $string[4];

$output = substr($string, 6, 5);

$output = str_replace('Wolf', 'Cat', $string);

$output = strtolower($string);

$output = strtoupper($string);

$output = ucwords($string);

$output =  ' bob the builder ';
//$output =  trim(' bob the builder ');

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

    </div>
</div>



</body>