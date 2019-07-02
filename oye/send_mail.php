<?php

			$to = $_POST['emailto'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$headers = 'From: Admin <noreply@hemantkulkarni.com>' . "\r\n" .'Reply-To: noreply@hemantkulkarni.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
			if (mail($to, $subject, $message, $headers)){ 
				$qstring = '?status=succ';
			}else{
				$qstring = '?status=err';
			}
header("Location: admin.php".$qstring);
?> 