<?php
include 'oye/dbConfig.php';
		 $mysql_tb = 'form_verify';
		 $query = $db->query("SELECT * FROM `".$mysql_tb."` WHERE id = 1");
		 if($query->num_rows > 0){ 
			$db->query("UPDATE `".$mysql_tb."` SET role = 'user' WHERE id = 1");
		 }
?>