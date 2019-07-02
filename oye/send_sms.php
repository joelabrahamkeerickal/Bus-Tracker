<?php
//$username = "easytolearntutorials@gmail.com";
$username = "JoshuaDsouza";
$password = "9930003794";
$number = $_POST['number'];
$message = $_POST['message'];
$from = $_POST['from'];
//$vars = "username=".$username."&password=".$password."&message=".$message."&sender=".$from."&numbers=".$number."&test=0";	

$vars = "user=".$username."&pass=".$password."&sender=".$from."&phone=".$number."&text=".$message."&priority=ndnd&stype=normal";
#$_POST['numberext']. &info=1
#test=1 is for testing purpose so actual message wont be send to phone
#if test=0 is used, credits will be used
#if test=0 is used, message will actually be sent to your phone
if($_POST['submitted']=="true"){
	//$curl = curl_init("https://api.textlocal.in/send/");			#curl provides more security
	$curl = curl_init("http://bhashsms.com/api/sendmsg.php");
		/*API FOR SINGLE SMS
			http://bhashsms.com/api/sendmsg.php?user=JoshuaDsouza&pass=9930003794&sender=Joshua&phone=8087934964&text=hii&priority=ndnd&stype=normal
		*/
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,$vars);
	//curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);		#if anything goes wrong, it returns back to us
	$result = curl_exec($curl);
	curl_close($curl);
	die("SMS has been sent");
}
?>