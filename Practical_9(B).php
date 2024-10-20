<?php

$numbers = array(12, 45, 2, 33, 50, 25, 18, 99, 7);

$maxValue = $numbers[0];
$minValue = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $maxValue) {
        $maxValue = $num;
    }
    if ($num < $minValue) {
        $minValue = $num;
    }
}

echo "The maximum value in the array is: " . $maxValue . "<br>";
echo "The minimum value in the array is: " . $minValue . "<br>";
?>


<!-- The maximum value in the array is: 99
The minimum value in the array is: 2 -->