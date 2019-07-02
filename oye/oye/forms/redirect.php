<?php
					if(isset($_POST['optionsRadios']) && ($_POST['optionsRadios']) == "option1"){
						
						header("Location: ../passenger.php");  
					 }
					if(isset($_POST['optionsRadios']) && ($_POST['optionsRadios']) == "option2"){
						
						header("Location: ../route.php"); 
					 }
					if(isset($_POST['optionsRadios']) && ($_POST['optionsRadios']) == "option3"){
							
							header("Location: ../route_contacts.php"); 
					 }
	/*	
		else{
			$qstring = $_GET['status'];
			$new = '?status='.$qstring;
			header("Location: ../send_otp.php".$new); 
		}
	*/	
?>
