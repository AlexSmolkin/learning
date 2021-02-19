<?php

/**
 * @param array $arr
 * @param int $counter
 * @return array
 */
function quickSort(array $arr, int &$counter): array
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

/**
 * @param array $arr
 * @param int $counter
 * @return array
 */
function bubbleSort(array $arr, int &$counter): array {
    $counter = 0;
    $arrLength = count($arr);

    for ($i = 0; $i < $arrLength; $i++) {
        //Last $i elements are already sorted
        for ($j = 0; $j < $arrLength - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $tempElement = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $tempElement;
            }
            $counter++;
        }
    }

    return $arr;
}

/**
 * @param array $arr
 */
function quickSortOutput(array $arr): void {
    $operationsCount = 0;
    $result = quickSort($arr, $operationsCount);
    echo "Quick sort result: " . implode(', ', $result) . PHP_EOL;
    echo "Operations count: " . $operationsCount . PHP_EOL;
}

/**
 * @param array $arr
 */
function bubbleSortOutput(array $arr): void {
    $operationsCount = 0;
    $result = bubbleSort($arr, $operationsCount);
    echo "Bubble sort result: " . implode(', ', $result) . PHP_EOL;
    echo "Operations count: " . $operationsCount . PHP_EOL;
}

$randomArr = array(3, -2, 1, 5, -8, 0, 9, -4, 4, 2);
echo "Random array: " . implode(', ', $randomArr) . PHP_EOL;
quickSortOutput($randomArr);
bubbleSortOutput($randomArr);
echo "------------------------------------------------" . PHP_EOL;

$sortedArr = array(-8, -4, -2, 0, 1, 2, 3, 4, 5, 9);
echo "Sorted array: " . implode(', ', $sortedArr) . PHP_EOL;
quickSortOutput($sortedArr);
bubbleSortOutput($sortedArr);
echo "------------------------------------------------" . PHP_EOL;

$equalValuesArr = array(-4, -4, -4, -4, -4, -4, -4, -4, -4, -4);
echo "Array with equal values: " . implode(', ', $equalValuesArr) . PHP_EOL;
quickSortOutput($equalValuesArr);
bubbleSortOutput($equalValuesArr);
echo "------------------------------------------------" . PHP_EOL;

$emptyArr = array();
echo "Empty array: " . implode(', ', $emptyArr) . PHP_EOL;
quickSortOutput($emptyArr);
bubbleSortOutput($emptyArr);
echo "------------------------------------------------" . PHP_EOL;
