<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<form action="arrays.php" method="POST">
    <input type="checkbox" name="fruits[]" value="Apple"> Apple <br>
    <input type="checkbox" name="fruits[]" value="Orange"> Orange <br>
    <input type="checkbox" name="fruits[]" value="Pineapple"> Pineapple <br>

    <input type="submit" value="Send">
</form>

    <?php 
        $fruits = $_POST['fruits'];

        echo $fruits[1];
    ?>
    
</body>
</html>