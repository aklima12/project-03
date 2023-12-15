<?php

include'admin_dbcon.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $input_error=array();
    if(empty($username)){
        $input_error['username']="Username is required";
    }
    if(empty($password)){
        $input_error['password']="Password is required";
    }
    if(count($input_error)==0){
        

          

                $user_check=mysqli_query($admin_dbcon,"SELECT * FROM `login` WHERE `username`='$username'");
                if(mysqli_num_rows($user_check)==0){
                    date_default_timezone_set("Asia/Dhaka");
                        $reg_time=date('m-d-Y,h:i:s a');
    $insert_query=mysqli_query($admin-dbcon,"INSERT INTO `login`(`username`, `password`, `reg_time`) VALUES ('$username','$password','$reg_time')");
                        if($insert_query){
                            echo '<script>
                            alert("successfully registered");
                            window.location.herf="index.php";
                            </script>
                            ';
                            $username=false;
                            $password=false;
                        }

                }else{
                    $input_error['username_unique']="This username is already exit";
                }
                

           


          
}
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login_style.css">
    <title>login-form</title>
</head>
<body>
    <div class="login">
				<form class="login100-form validate-form" action="" method="POST" autocomplete="on">
					<span class="login100-form-title">
						অ্যাডমিন লগইন
					</span>
					
					<div class="wrap-input100 validate-input">
						<input class="input100 " type="text" value="<?php if(isset($username)){echo $username;}?>" name="username" placeholder="ইউজারনেম">
                        <span style="color:red;"><?php if(isset($input_error['username'])){echo $input_error['username'];}?></span>
                <span style="color:red;"><?php if(isset($input_error['username_unique'])){echo $input_error['username_unique'];}?></span>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100 " value="<?php if(isset($username)){echo $username;}?>" type="password" name="password" placeholder="পাসওয়ার্ড">
                        <span style="color:red;"><?php if(isset($input_error['password'])){echo $input_error['password'];}?></span>
             

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
										
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							লগইন
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							ভুলে গেছেন
						</span>
						<a class="txt2" href="admin/forgot_password">
							পাসওয়ার্ড?
						</a>
					</div>
				</form>
                </div>
    
</body>
</html>