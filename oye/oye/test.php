<?php
include 'dbConfig.php';
include 'send_otp.php';
$mysql_tb = 'user_otp';
$mysql_tb2 = 'form_verify';
$otp_confirm = $_POST['otp_num'];
$password = $_POST['password'];

if((isset($_POST['password']))&&(isset($_POST['otp_num']))){
$myquery = "SELECT id FROM `".$mysql_tb."` WHERE otp = '".$otp_confirm."'";
$myresult = $db->query($myquery);
                if($myresult->num_rows > 0){					

					$myquery2 = "SELECT id FROM `".$mysql_tb2."` WHERE password = '".$password."'";
					$myresult2 = $db->query($myquery2);
					if($myresult2->num_rows > 0){
						echo "Your form has been submitted. You will soon get an email after verification.";
						$db->query("UPDATE `".$mysql_tb2."` SET status = 'checked' WHERE password = '".$password."'");
					}
					else{
						echo "Incorrect Account Password. Please enter again.";
					}
					
                }else{
					echo "Incorrect OTP. Please enter again.";
                }
}		
?>