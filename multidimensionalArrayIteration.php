<?php

$title = 'Learn Words Forever';

$listings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a software engineer to develop PHP solutions',
        'salary' => 99000,
        'location' => 'Newbury',
        'tags' => ['Software Engineer', 'PHP']
    ],
    [
        'id' => 2,
        'title' => 'Cat carer',
        'description' => 'We are looking for a cat specialist',
        'salary' => 33000,
        'location' => 'Burgclere',
        'tags' => ['Cat carer', 'Tin opener']
    ]

]

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


        <ul class="mb-6">

            <?php foreach ($listings as $listing) : ?>

            <div class="bg-white rounded-lg shadow-md p6">

                    <?php foreach ($listing as $key => $value) : ?>
                        <?php if ($key <> 'id') :?>
                            <?php if (is_array($value) == false) : ?>
                            <li>
                                <?= '<b>' . ucwords($key) . '</b>' . ':&nbsp;  ' . $value ?>
                            </li>
                            <?php else : ?>
                            <?= '<b>' . ucwords($key) . '</b>' . ':&nbsp;  ' .  implode(', ', $value) ?>
                            <?php endif; ?>

                        <?php endif; ?>



                    <?php endforeach; ?>

                <br><br>

            </div>
            <br><br>

            <?php endforeach;?>


        </ul>



</div>


</body>
