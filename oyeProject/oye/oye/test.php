<?php
include 'dbConfig.php';
$string = '0123456789';
$string_shuffled = str_shuffle($string);
$otp = substr($string_shuffled, 1, 6);
$username = "JoshuaDsouza";
$password = "9930003794";
$number = $_POST['number'];
$email = $_POST['email'];
$SenderID = "Joshua";
$message = "Your OTP is ".$otp;
	echo "<br>";
	echo("Enter the OTP sent to your phone");

$prevQuery = "SELECT id FROM `user_otp` WHERE email = '".$email."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){					
                    $db->query("UPDATE 'user_otp' SET otp = '".$otp."' WHERE email = '".$email."'");
                }else{
                    $db->query("INSERT INTO 'user_otp' (email, otp) VALUES ('".$email."','".$otp."')");
                }

?>
<form method="post" action="#">
<input type="number" name="otp_num"> 
<button type="submit" >Submit</button>
</form>