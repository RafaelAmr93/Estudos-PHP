<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>?Associative Array</title>
</head>
<body>
    <form action="associativeArray.php" method="POST">
    <input type="text" name="student" placeholder="Student Name">
    <input type="submit">
    </form>
    <?php

set_error_handler('error');
function error(int $errno, string $errstr){
    echo "Not found!";
}

$grades = array("Jim" => 8.5, "Pam" => 7.0, "Michael" => 10.0);
$grades['Kevin'] = 3.0;

$student = $grades[$_POST["student"]];

if (in_array($student, $grades, $strict = false)) {
    echo $student;
} 

    ?>
</body>
</html>