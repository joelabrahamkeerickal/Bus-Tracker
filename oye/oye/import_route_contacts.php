<?php
include 'dbConfig.php';

if(isset($_POST['importSubmit'])){

    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){

            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            fgetcsv($csvFile);
			//parsing
			$mysql_tb = 'route_contacts';

            while(($line = fgetcsv($csvFile)) !== FALSE){		
                $prevQuery = "SELECT id FROM `".$mysql_tb."` WHERE primary_name = '".$line[0]."' AND primary_number = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
					
                    $db->query("UPDATE `".$mysql_tb."` SET name_1 = '".$line[2]."', number_1 = '".$line[3]."', name_2 = '".$line[4]."', number_2 = '".$line[5]."', stop_name = '".$line[6]."', status = '".$line[7]."' WHERE primary_name = '".$line[0]."' AND primary_number = '".$line[1]."'");
                }else{	
                    $db->query("INSERT INTO `".$mysql_tb."` (primary_name, primary_number, name_1, number_1, name_2, number_2,stop_name,status) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
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
header("Location: route_contacts.php".$qstring);

?>