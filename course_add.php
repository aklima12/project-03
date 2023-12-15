<?php
$db_con = mysqli_connect("localhost" , "root" , "" , "register");

if(isset($_POST['submit'])){
$name = $_POST['course'];

$insert = mysqli_query($db_con , "INSERT INTO `about`( `course`) VALUES ('$name')");
echo "ok";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
<input type="text" placeholder="course" name="course">
<input type="submit" name="submit" >
    </form>
</body>
</html>
