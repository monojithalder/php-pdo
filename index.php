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
	$lat = $_GET['lat'];
	$sql = "INSERT INTO test (id,lat)
    VALUES ('',$lat)";
	$conn->exec($sql);
	echo "Connected successfully";
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}