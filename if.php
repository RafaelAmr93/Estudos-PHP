<?php 

function getMax($num1, $num2, $num3){
    if ($num1 > $num2 && $num1 > $num3) return $num1;
    if ($num2 > $num3) return $num2;
    return $num3;
}

function getMin($num1, $num2, $num3){
    if($num1 < $num2 && $num1 < $num3) return $num1;
    if($num2 < $num3) return $num2;
    return $num3;
}

echo getMax(1, 2, 10);
echo getMin(30,20,10);

?>