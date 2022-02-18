<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
</head>
<body>
    <form action="madLibs.php" method="GET">
        Color: <input type="text" name="color"> <br>
        Place: <input type="text" name="place"> <br>
        Name: <input type="text" name="name"> <br>

        <input type="submit">
    </form>

    <?php
        $color = $_GET['color'];
        $place = $_GET['place'];
        $name = $_GET['name'];

        echo "My favorite name is $color <br>";
        echo "My favorite place is $name <br>";
        echo "My favorite color is $place <br>";
    ?>
    
</body>
</html>