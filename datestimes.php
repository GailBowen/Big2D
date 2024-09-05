<?php

$title = 'Learn Words Forever';

$heading = 'Learn German for 20th September';

$output = null;

/*
Y
m
F - full name of month
d
D - day of the week short name
l - the full day of the week name
h
H - 24 hours
i - minute
s
a - AM/PM
 */

$output = date('Y');

//Jan 1st 1970.

$output = date('Y', 936345600);

$output = date('Y', strtotime('2022-09-01'));

$mybirthdaytimestamp = strtotime('1976-07-06');

$output = $mybirthdaytimestamp . ':  ' .  date('l, d F, Y', $mybirthdaytimestamp);

$now = time();

$output = $now . ':  ' .  date('l, d F, Y. h:i:s a', $now);

date_default_timezone_set('Europe/London');

$output = date('l, d F, Y. H:i:s');

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