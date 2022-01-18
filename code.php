<?php

$array = [1, 1, 1, 1, -1, -1, 1, -1, 1];

function wildCount(array $array)
{
    $count = 0;

    foreach ($array as $value) {
        $value = $value;
        $count++;
    }
    return $count;
}

function wildMin(array $array)
{
    $min = null;

    foreach ($array as $number) {
        if ($number === null) {
            return $number;
        }
        if ($min === null || $number < $min) {
            $min = $number;
        }
    }
    return $min;
}

function wildMax(array $array)
{
    $max = null;

    foreach ($array as $number) {
        if ($max === null || $number > $max) {
            $max = $number;
        }
    }
    return $max;
}

function wildSort(array $array)
{
    $sizeArray = wildCount($array);
    for ($i = 0; $i < $sizeArray; $i++) {
        for ($j = $i + 1; $j < $sizeArray; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
                return true;
            }
            return true;
        }
        return true;
    }
    return true;
}
