<?php

$test_arr = array(3, -2, 1, 5, -8, 0, 9, -4, 4, 2);
$counter = 0;

function quickSort($arr, &$counter): array
{
    if(count($arr) < 2)
    {
        return $arr;
    }

    $base = $arr[0];
    $left = array();
    $right = array();

    for ($i = 1; $i < count($arr); $i++) {
        if ($base > $arr[$i]) {
            array_push($left, $arr[$i]);
        } else {
            array_push($right, $arr[$i]);
        }
        $counter++;
    }

    return array_merge(quickSort($left, $counter),array($base),quickSort($right, $counter));
}

$test_arr = quickSort($test_arr, $counter);

foreach ($test_arr as $elem) {
    echo $elem . " ";
}
echo $counter;
