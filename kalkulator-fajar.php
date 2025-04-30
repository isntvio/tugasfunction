<?php 
function tambah($nilaisatu, $nilaidua){
    return $nilaisatu + $nilaidua;
}

function kurang($nilaisatu, $nilaidua){
    return $nilaisatu - $nilaidua;
}

function kali($nilaisatu, $nilaidua){
    return $nilaisatu * $nilaidua;
}

function bagi($nilaisatu, $nilaidua){
    return $nilaisatu / $nilaidua;
}

$nilaisatu = [2, 6, 4, 10];
$nilaidua = [5, 3, 7, 2];
$operator = ["+", "-", "x", ":"];   

foreach ($operator as $index => $op) {
    $x = (int)$nilaisatu[$index];
    $y = (int)$nilaidua[$index];

    if ($op == "+") {
        echo "$x + $y = " . tambah($x, $y) . "<br>";
    } elseif ($op == "-") {
        echo "$x - $y = " . kurang($x, $y) . "<br>";
    } elseif ($op == "x") {
        echo "$x x $y = " . kali($x, $y) . "<br>";
    } elseif ($op == ":") {
        echo "$x : $y = " . bagi($x, $y) . "<br>";
    } else {
        echo "Operator tidak dapat dikenal<br>";
    }
}
?>