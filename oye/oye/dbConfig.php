<?php
$dbHost = 'hemantkulkarni.com';
$dbUsername = 'hemantku_user';
$dbPassword = 'qwertyuiop';
$dbName = 'hemantku_testbase';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>