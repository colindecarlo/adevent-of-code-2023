<?php

require_once 'vendor/autoload.php';

function problemOne() {
    $calibrations = getCalibrations('day-01-problem-01.txt');

    return sumCalibrations($calibrations);
}

function sumCalibrations($calibrations): int
{
    $sum = 0;
    $onlyDigits = preg_replace("/[^0123456789]/", '', $calibrations);
    foreach ($onlyDigits as $calibration) {
        $first = $calibration[0];
        $last = $calibration[strlen($calibration) - 1];
        $sum += intval($first . $last);
    }

    return $sum;
}

function problemTwo() {
    $calibrations = getCalibrations('day-01-problem-02.txt');
    $replaced = array_map(fn ($calibration) => strtr($calibration, [
        'oneight' => '18',
        'threeight' => '38',
        'fiveight' => '58',
        'nineight' => '98',
        'twone' => '21',
        'sevenine' => '79',
        'eightwo' => '82',
        'eighthree' => '83',
        'one' => '1',
        'two' => '2',
        'three' => '3',
        'four' => '4',
        'five' => '5',
        'six' => '6',
        'seven' => '7',
        'eight' => '8',
        'nine' => '9'
    ]), $calibrations);

    return sumCalibrations($replaced);
}

function getCalibrations($calibrationDocument)
{
    return loadInput($calibrationDocument);
}

echo problemOne();
echo "\n";
echo problemTwo();
