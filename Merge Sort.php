<?php

echo "\n--- Problema 2: Merge Sort ---\n";

function mergeSort($arr) {
    if (count($arr) <= 1) return $arr;

    $mid = count($arr) / 2;
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) < 0) {
            $result[] = $left[$i++];
        } else {
            $result[] = $right[$j++];
        }
    }

    while ($i < count($left)) $result[] = $left[$i++];
    while ($j < count($right)) $result[] = $right[$j++];

    return $result;
}

$list2 = ["banana", "manzana", "pera", "kiwi", "naranja"];
echo "Lista antes de ordenar: " . implode(", ", $list2) . "\n";
$list2 = mergeSort($list2);
echo "Lista despues de ordenar: " . implode(", ", $list2) . "\n";
?>