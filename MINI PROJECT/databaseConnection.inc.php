<?php

function dbConnect(){
	$hostname="localhost";
	$port="3306";
	$username="root";
	$password="";
	$database="budget";
	$con = mysqli_connect($hostname,$username,$password,$database);
	
	return $con;
}
?>
