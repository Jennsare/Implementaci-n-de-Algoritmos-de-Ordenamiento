<?php
echo "\n--- Problema 3: Insertion Sort ---\n";

function insertionSort(&$arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
}

$list3 = ["Laura", "Ana", "Pedro", "Carlos", "Beatriz"];
echo "Lista antes de ordenar: " . implode(", ", $list3) . "\n";
insertionSort($list3);
echo "Lista despues de ordenar: " . implode(", ", $list3) . "\n";

?>
