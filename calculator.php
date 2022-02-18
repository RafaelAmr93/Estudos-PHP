<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<form action="calculator.php" method="POST">
<input type="number" step="0.01" name="num1">
<select name="operator">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input type="number" step="0.01" name="num2">
<input type="submit">
</form>
    
<?php

set_error_handler('error');
function error(int $errno, string $errstr){
}

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST['operator'];

if ($op == "+") echo $num1 + $num2;
if ($op == "-") echo $num1 - $num2;
if ($op == "*") echo $num1 * $num2;
if ($op == "/") echo $num1 / $num2;

?>


</body>
</html>