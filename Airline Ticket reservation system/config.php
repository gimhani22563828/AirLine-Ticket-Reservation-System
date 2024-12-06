<?php

$servername = "Localhost" ;
$username = "root";
$password = "";
$databasename = "airline";

$conn = new mysqli("Localhost","root","","airline");

if($conn -> connect_error){
	
	die("Connection fail!".$conn->connect_error);
	
}else{
	
	echo("Connection succesfull!");
	
}
?>