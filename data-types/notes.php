<?php

//força a tipagem estática, embora int e floats ainda sejam convertidos
declare(strict_types=1);

$test = "test";
$test2 = "more-test";

//imprime com tag html
echo $test . '<br />';
echo $test2 . '<br />';

$completed = true;

$price = 4.66;

//mostra o tipo da variável
echo gettype($test) . '<br />';

//mostra o tipo e o valor da variável
echo var_dump($test2) . '<br />';
echo var_dump($completed) . '<br />';
echo var_dump($price) . '<br />';

?>