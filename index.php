<?php

$title = 'Learn Words Forever';

$heading = 'Believe you can remember every single word';

$body = 'This app will get you learning and <i>remembering</i> every word';

$number1 = 5;
$number2 = 10;
$number3 = '20';

$fruit = 'apple';

$bool1 = true;
$bool2 = false;

$null = null;

$result = $number1 + $number2;

$result = $number1 + $number3;

$result = $number3 + $number3;

$result = $number1 . $number2;

//$result = $fruit + $number2;
$result = $number1 + $bool1;

$result = $number1 + $bool2;

$result = $number1 + $null;

$result = (string)$number1;


var_dump($result);

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


</body>