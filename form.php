<?php  
$db_con = mysqli_connect("localhost" , "root" , "" , "register");

$course_data_select = mysqli_query($db_con , "SELECT * FROM `from` ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

<select name="" id="">
    <option value="">Select Course</option>
    <?php  while($course_data_fatch = mysqli_fetch_assoc($course_data_select)){?>
    <option value="<?=$course_data_fatch['course']?>"><?=$course_data_fatch['course']?></option>
    <?php }?>
</select>

</form>

</body>
</html>