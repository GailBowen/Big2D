<?php

//1

$numArray = [1, 2, 3, 4, 5];

$arrayCount = count($numArray);

$total = $numArray[0] + $numArray[1] + $numArray[2] + $numArray[3] + $numArray[4];

echo "The sum of the $arrayCount numbers is: $total";

$colours = ['yellow', 'green', 'blue', 'red'];

//rsort($newColours);

$newColours = array_reverse($colours);

inspect($colours);

inspect($newColours);

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

//$newColours[] = 'purple';
//$newColours[] = 'orange';
//
//
//
//$newColours[2] = 'pink';

$newColours = array_merge($newColours, ['purple', 'orange']);

array_splice($newColours, 2, 1, 'pink');

//
//array_pop($newColours);
//
inspect($newColours);

$jobListings = [
    ['id' => 1, 'job_title' => 'Developer', 'company' => 'TNP', 'contact_email' => 'hr@tnp.com', 'contact-phone' => '07933302231', 'skills' => ['php', 'C#', 'xaml', 'javascript']],
    ['id' => 2, 'job_title' => 'Consultant', 'company' => 'TNP', 'contact_email' => 'hr@tnp.com', 'contact-phone' => '07933302231', 'skills' => ['management']],
    ['id' => 3, 'job_title' => 'Chef', 'company' => 'TNP', 'contact_email' => 'hr@tnp.com', 'contact-phone' => '07933302231', 'skills' => ['making tasty food']]
];

array_push($jobListings, ['id' => 4, 'job_title' => 'Company Cat', 'company' => 'TNP', 'contact_email' => 'hr@tnp.com', 'contact-phone' => '07933302231', 'skills' => ['cuddling', 'catching frogs']]);

inspect($jobListings);

echo $jobListings[1]['job_title'];

echo $jobListings[2]['skills'][0];


