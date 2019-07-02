<?php
			$to = $_POST['emailto'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$headers = 'From: Admin <noreply@hemantkulkarni.com>' . "\r\n" .'Reply-To: noreply@hemantkulkarni.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
			if (mail($to, $subject, $message, $headers)){ 
				$qstring = "Email has been successfully sent.";
				/*
				echo '<div class="row">
						<div class="col-sm-12">
						<label class="pull-right control-label">Email has been successfully sent.<label>
						</div>
						</div>';
				*/	
			}else{
				$qstring = "There was an error sending the mail.";
				/*echo '<div class="row">
						<div class="col-sm-12">
						<label class="pull-right control-label">There was an error sending the mail.<label>
						</div>
						</div>';
				*/
			}
header("Location: admin.php".$qstring);
?> 