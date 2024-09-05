<?php

$title = 'Learn Words Forever';

$heading = 'Learn German for 20th September';

$output = "null";

$num1 = 29;

$num2 = 10;

$output = "$num1 + $num2 = " .$num1 + $num2;

$output = "$num1 - $num2 = " .$num1 - $num2;

$output = "$num1 * $num2 = " .$num1 * $num2;

$output = "$num1 % $num2 = " .$num1 % $num2;

$num3 = 59;
//$num3 = $num3 + 20;

//$num3 += 20;

//$num3 -= 20;

//$num3 *= 12;

//$num3 /= 5;

//$num3 %= 10;

$output = rand();

$output = getrandmax();

$output = rand(1, 10);

$output = round(53.4);

$output = ceil(53.4);

$output = floor(55.9);

$output = sqrt(16);

$output = pi();

$output = abs(-4.3);//abs() gets rid of the minus :)

$output = max(1, 2, 3, 99);

$output = max([1, 202, 3, 99]);

$output = min([1, 202, 3, 99]);

$output  = number_format(123456.7772,2, '.', ',');



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
        <h2 class="text-xl">
            <?= $output ?>
        </h2>

    </div>
</div>



</body>