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

	$personal_name = $_POST['personal_name'];
	$loc_owner_name = $_POST['loc_owner_name'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$phone = $_POST['number'];
	$password2 = $_POST['password'];
	$ownership_type = $_POST['ownership_type'];
					
$vars = "user=".$username."&pass=".$password."&sender=".$SenderID."&phone=".$number."&text=".$message."&priority=ndnd&stype=normal";
	//$curl = curl_init("http://bhashsms.com/api/sendmsg.php");
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,$vars);
	$result = curl_exec($curl);
	curl_close($curl);
	
	echo "<br>";
	echo("Enter the OTP sent to your phone");

$mysql_tb = 'user_otp';
$prevQuery = "SELECT id FROM `".$mysql_tb."` WHERE email = '".$email."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){					
                    $db->query("UPDATE `".$mysql_tb."` SET otp = '".$otp."' WHERE email = '".$email."'");
                }else{
                    $db->query("INSERT INTO `".$mysql_tb."` (email, otp) VALUES ('".$email."','".$otp."')");
                }

$mysql_tb2 = 'form_verify';				
$myquery2 = "SELECT id FROM `".$mysql_tb2."` WHERE email = '".$email."'";
	$myresult2 = $db->query($myquery2);
		if($myresult2->num_rows > 0){
					
			$db->query("UPDATE `".$mysql_tb2."` SET personal_name = '".$personal_name."', loc_owner_name = '".$loc_owner_name.
				"', address = '".$address."', country = '".$country."', state = '".$state."', city = '".$city.
				"', pincode = '".$pincode."', phone = '".$phone."', ownership_type = '".$ownership_type."', status = 'unchecked' WHERE email = '".$email."' AND password = '".$password2."'");
		}else{
			$db->query("INSERT INTO `".$mysql_tb2."` (personal_name, loc_owner_name, address, country, state, city, pincode, 
			email, phone, password, ownership_type, document, status) VALUES ('"
			.$personal_name."','".$loc_owner_name."','".$address."','".$country."','".$state."','"
			.$city."','".$pincode."','".$email."','".$phone."','".$password2."','".$ownership_type."','null','unchecked')");
		}
?>
<form method="post" action="#">
<input type="number" name="otp_num"> 
<button type="submit" >Submit</button>
</form>
<?php
include 'dbConfig.php';
$mysql_tb = 'user_otp';
$mysql_tb2 = 'form_verify';
$otp_confirm = $_POST['otp_num'];
$email_new = $_POST['email_new'];
$password2_new = $_POST['password2_new'];
$myquery = "SELECT id FROM `".$mysql_tb."` WHERE otp = '".$otp_confirm."'";
$myresult = $db->query($myquery);
                if($myresult->num_rows > 0){
					echo "Your form has been submitted. You will soon get an email after verification";

					$myquery2 = "SELECT id FROM `".$mysql_tb2."` WHERE email = '".$email_new."'";
					$myresult2 = $db->query($myquery2);
					if($myresult2->num_rows > 0){
						$db->query("UPDATE `".$mysql_tb2."` SET status = 'checked' WHERE email = '"
						.$email_new."' AND password = '".$password2_new."'");
					}
					
                }else{
                    echo "Incorrect OTP. Please enter again";
                }
?>