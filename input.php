<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    

    <form action="input.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Type your name">
        <input type="number" name="age" placeholder="Type your age">
        <input type="submit">
    </form>
    <?php 
         echo $_GET["name"];
        ?>

    <br>

    <?php
         echo $_GET["age"];
         ?>
</body>
</html>