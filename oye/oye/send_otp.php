<?php
error_reporting(E_PARSE | E_ERROR);
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
	$oyepin = $_POST['oyepin'];
	//$address = $_POST['address'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$password2 = $_POST['password'];
	$ownership_type = $_POST['ownership_type'];
	$lat = $_POST['latitude'];
	$lon = $_POST['longitude'];
	//$coordinates = $_POST['coordinates'];
	if(getimagesize($_FILES['image']['tmp_name']) == TRUE){
		$imgData = addslashes($_FILES['image']['tmp_name']);
		$imgName = addslashes($_FILES['image']['name']);
		$imgData = file_get_contents($imgData);
		$imgData = base64_encode($imgData);
	}
	
	//$filename = $_POST['document'];
	//$imgData = file_get_contents($filename);
					
$vars = "user=".$username."&pass=".$password."&sender=".$SenderID."&phone=".$number."&text=".$message."&priority=ndnd&stype=normal";
	echo "Message ID - ";
	$curl = curl_init("http://bhashsms.com/api/sendmsg.php");
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,$vars);
	$result = curl_exec($curl);
	curl_close($curl);
	
	echo "<br><br>";

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
				"', oyepin = '".$oyepin."', country = '".$country."', state = '".$state."', city = '".$city.
				"', pincode = '".$pincode."', phone = '".$number."', ownership_type = '".$ownership_type."', image = '"
				.$imgData."', name = '".$imgName."', status = 'unchecked',	role = 'undefined', lat = '".$lat."', lon = '".$lon."'
				WHERE email = '".$email."' AND password = '".$password2."'");
		}else{
			$db->query("INSERT INTO `".$mysql_tb2."` (personal_name, loc_owner_name, oyepin, country, state, city, pincode, 
			email, phone, password, ownership_type, image, name, status, role, lat, lon) VALUES ('"
			.$personal_name."','".$loc_owner_name."','".$oyepin."','".$country."','".$state."','"
			.$city."','".$pincode."','".$email."','".$number."','".$password2."','".$ownership_type."','"
			.$imgData."','".$imgName."','unchecked','undefined','".$lat."','".$lon."')");
		}
?>
<?php
include 'dbConfig.php';
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Your form has been submitted. You will soon get an email after verification.';
			
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Incorrect OTP/Account Password. Please enter again.';
            break;
		default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}	
?>
<form method="post" action="test.php">
<div>Enter the OTP sent to your phone </div><div><input type="number" name="otp_num"> </div><br>
<div>Confirm your account password </div><div><input name="password" type="password"></div><br>
<button type="submit" >Verify </button>
</form>
<?php
		if(!empty($statusMsg)){
					echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
					}
		?>
