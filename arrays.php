<?php

$title = 'Learn Words Forever';

$heading = 'Learn German for 20th September';

$names = array('Julie', 'Corinne', 'Bego');


$numbers = [1,2,3,4,5,6];


$output = null;

//inspect($numbers);

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

$numbers[] = 300;

$numbers[] = 400;

$numbers[3] = 333;

unset($numbers[3]);

//Reindex after removing an array item
$numbers = array_values($numbers);

inspect($numbers);

//print_r($names);

//die();



