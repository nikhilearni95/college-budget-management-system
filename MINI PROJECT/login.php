<?php

if(!isset($_POST["submit"])){
	header("Location:index.php");
}
$username=$_POST["username"];
$password=$_POST["password"];
//Database Connection
include "databaseConnection.inc.php";
$con = dbConnect();
if(!$con){
		die("Database Connection Error".mysqli_error($con));
}
$query = "select * from log where username = '".$username."' and password = '".$password."'";

$rs = mysqli_query($con,$query);

if(!$rs){
	die("Query execution Error".mysqli_error($con));
	echo"invalid";
}
if($row = mysqli_fetch_array($rs)){
		session_start();
		$_SESSION["name"]=$row["name"];
		$_SESSION["type_user"] = $row["type_user"];
		$_SESSION["department"] = $row["department"];
		$_SESSION["Key"]="abcdfe13454dfsdfs23rdsf";
		if($_SESSION["type_user"]=="hod"){
				header("Location:hod.php");
		}else if($_SESSION["type_user"]=="principal"){
				header("Location:principal.php");
		}else if($_SESSION["type_user"]=="admin"){
				header("Location:admin.php");
		}

}
?>