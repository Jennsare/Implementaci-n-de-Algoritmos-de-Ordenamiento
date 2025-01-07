<?php
echo "\n--- Problema 1: Bubble Sort ---\n";

function bubbleSortDesc(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

$list1 = [3, -2, 5, 7, -8, 5, 3];
echo "Lista antes de ordenar: " . implode(", ", $list1) . "\n";
bubbleSortDesc($list1);
echo "Lista despues de ordenar: " . implode(", ", $list1) . "\n";

?>