<?php

$colors = ['green', 'blue', 'yellow'];

//print_r ($colors);

$colors[1] = 'white';

//print_r ($colors);

//[] vazio funciona como push
$colors[] = 'black';

//print_r ($colors);

//push com mais itens
array_push($colors, 'orange', 'pink', 'red');

print_r ($colors);


?>