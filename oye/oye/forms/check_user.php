<html>
<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
</html>
<?php
error_reporting(E_PARSE | E_ERROR);
include '../dbConfig.php';
$oyepin = $_POST['oyepin'];
if(!empty($oyepin)){
		$mysql_tb = 'form_verify';
		$prevQuery = "SELECT id FROM `".$mysql_tb."` WHERE oyepin = '".$oyepin."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){					
					echo '<div class="glyphicon glyphicon-remove"></div>&nbsp;OyePin already taken';
                }else{
					echo '<div class="glyphicon glyphicon-ok"></div>&nbsp;OyePin available';
                }
	}

?>