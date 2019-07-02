<?php
include 'dbConfig.php';

if(isset($_POST['importSubmit'])){

    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){

            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            fgetcsv($csvFile);
			//parsing
			$mysql_tb = 'members';

            while(($line = fgetcsv($csvFile)) !== FALSE){		
                $prevQuery = "SELECT id FROM `".$mysql_tb."` WHERE email = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
					
                    $db->query("UPDATE `".$mysql_tb."` SET name = '".$line[0]."', phone = '".$line[2]."', created = '".$line[3]."', modified = '".$line[3]."', status = '".$line[4]."' WHERE email = '".$line[1]."'");
                }else{
                    $db->query("INSERT INTO `".$mysql_tb."` (name, email, phone, created, modified, status) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[3]."','".$line[4]."')");
                }
            }
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';		//for error in database operations
        }
    }else{
        $qstring = '?status=invalid_file';		//for errors in file format
    }
}
header("Location: index.php".$qstring);

?>