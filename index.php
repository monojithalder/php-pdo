<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 30/7/18
 * Time: 1:03 AM
 */
$servername = "localhost";
$username = "root";
$password = "123";

try {
	$conn = new PDO("mysql:host=$servername;dbname=pdo", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$gps_data = $_GET['data'];
	//$gps_data = "0,88.407448,22.511423,2018/07/31,10:35:08";
	$gps_data_array = explode(",",$gps_data);
	$sql = "INSERT INTO test (lat,lan)
    VALUES ($gps_data_array[1],$gps_data_array[2])";
	$conn->exec($sql);
	echo "Connected successfully";
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}