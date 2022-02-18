<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>

<form action="calc.php" method="GET">
<input type="number" name="a"> + <input type="number" name="b">
<input type="submit" value="Sum">

</form>

<?php 

echo $_GET["a"] + $_GET["b"];
?>
    
</body>
</html>