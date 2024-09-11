<?php


$title = 'Learn Words Forever';

$heading = 'Believe you can remember every single word forever';

$body = 'This app will get you learning and <i>remembering</i> every word';

//for ($i = 0; $i <= 10; $i++) {
//    echo $i . "<br>";
//}
//$i = 0;

//while($i < 10)
//{
//    echo $i . "<br>";
//    $i +=1;
//
//}

//$i=0;
//
//do {
//    echo $i . "<br>";
//    $i++;
//} while ($i < 50);

?>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>



<?php $i=10;?>
<ul>

<?php do { ?>
    <li>Number: <?= $i ?></li>
    <?php $i++; ?>
 <?php }  while ($i < 10);  ?>

<?php //for ($i = 0; $i <= 10; $i++) : ?>
<!--   <li>Number: --><?php //= $i ?><!--</li>-->
<?php //endfor; ?>


<?php // $i=0; while($i <= 15) : ?>
<!--    <li>Number: --><?php //= $i ?><!--</li>-->
<!---->
<?php // $i++; endwhile; ?>
<?php // $i=0; while($i <= 15) : ?>
<!--    <li>Number: --><?php //= $i ?><!--</li>-->
<!---->
<?php // $i++; endwhile; ?>

</ul>

