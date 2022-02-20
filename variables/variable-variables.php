<?php

$foo = 'bar';

$$foo = 'car';

//todas as opçoes abaixo funcionam

//echo $bar;

//echo $$foo;

//echo "{$$foo}";

//echo "${$foo}";

echo $foo, $$foo, $bar;




?>