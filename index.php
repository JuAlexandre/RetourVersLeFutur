<?php

require 'src/TimeTravel.php';

$startDate = new DateTime('1985-12-31');
$endDate = new DateTime('2018-05-23');

$timeTravel = new TimeTravel($startDate, $endDate);
echo $timeTravel->getTravelInfo();

echo '<br>';

try {
    echo $timeTravel->findDate(new DateInterval('PT1000000000S'));
} catch (Exception $e) {
    echo $e;
}

$periods = $timeTravel->backToFutureStepByStep(new DateInterval('P1M1W1D'));
foreach ($periods as $period) {
    echo $period . '<br>';
}