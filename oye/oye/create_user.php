<?php
include 'dbConfig.php';
	$id = $_POST['create'];
	$mysql_tb = 'form_verify';
	$query = $db->query("SELECT * FROM `".$mysql_tb."` WHERE id = '".$id."'");
	if($query->num_rows > 0){ 
		$db->query("UPDATE `".$mysql_tb."` SET role = 'user' WHERE id = '".$id."'");
		echo '<div class="alert alert-success">User created successfully</div>';
	}
?>