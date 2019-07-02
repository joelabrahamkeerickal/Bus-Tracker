<?php
$username = "easytolearntutorials@gmail.com";
$password = "Keeric@12";
$number = $_POST['number'];
$message = $_POST['message'];
$from = $_POST['from'];
$vars = "username=".$username."&password=".$password."&message=".$message."&sender=".$from."&numbers=".$number."&test=0";	
#$_POST['numberext']. &info=1
#test=1 is for testing purpose so actual message wont be send to phone
#if test=0 is used, credits will be used
#if test=0 is used, message will actually be sent to your phone
if($_POST['submitted']=="true"){
	$curl = curl_init("https://api.textlocal.in/send/");			#curl provides more security
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,$vars);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);		#if anything goes wrong, it returns back to us
	$result = curl_exec($curl);
	curl_close($curl);
	die("SMS has been sent");
}
?>