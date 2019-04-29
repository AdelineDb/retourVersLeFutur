<?php

require 'TimeTravel.php';

//Point 1 et 2
$start = new DateTime("1985/12/31");
$end = new DateTime();
$time = new TimeTravel($start, $end);
echo $time->getTravelInfo();

// Point 3
$interval = new DateInterval('PT1000000000S');
echo 'La date de retour est ' . $time->findDate($interval)->format(DATETIME::COOKIE);

// Point 4

$time->end = new DateTime('1985/12/31');
$steps = $time->backToFutureStepByStep(new DateInterval('P1M8D'));
var_dump($steps);
