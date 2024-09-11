<?php

$title = 'Learn Words Forever';

$heading = 'Believe you can remember every single word forever';

$body = 'This app will get you learning and <i>remembering</i> every word';

//    for ($i = 0; $i <5; $i++) {
//        for ($j = 0; $j <= 5; $j++) {
//            echo $i . ' - ' . $j . '<br>';
//        }
//    }

//$i = 0;
//
//while ($i < 5) {
//    $j = 0;
//
//    while ($j < 5) {
//        echo $i . ' - ' . $j . '<br>';
//        $j++;
//    }
//
//    $i++;
//}

?>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 50px);
            grid-gap: 5px;
        }

        .grid-item {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
        }


    </style>
</head>

<body>
    <div class="grid-container">
        <?php for($i = 0; $i < 5; $i++) : ?>
            <?php for ($j = 0; $j < 5; $j++) : ?>
                <div class="grid-item">
                    <?= $i . ' - ' . $j ?>
                </div>

            <?php endfor ?>
        <?php endfor ?>
    </div>

</body>
