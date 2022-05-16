<?php
session_start();
if(!isset(S_SESSION["Key"])){
	header("Location:index.php");
}
if($_SESSION["type_user"] == "principal"){
	header("Location:principal.php")
}else if($_SESSION["type_user"] == "admin"){
	header("Location:admin.php")
}

?>
<!DOCTYPE html>


<html>
<head>
  <title></title>


<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="text-light"><a href="index.html"><img src="https://upload.wikimedia.org/wikipedia/en/c/c2/Vishnu_Universal_Learning.png" alt="" align="left" width=50 height==50 class="img-fluid"><span><b><font color="purple" >
         <h2><b>Shri Vishnu Engineering College for Women[SVECW]</b></h2><h4>(Autonomous)</h4></font></b></span></a></h1>
        
  </div>
  <div class="panel-heading "><h2><b><font color="purple" >BUDGET MANAGEMENT SYSTEM</font></b></h2></div>
</div>
  <nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="#">Categories-</a></li>
    <li><a href="equipment.php">Equipment</a></li>
    <li><a href="furniture.php">Furniture</a></li>
    <li><a href="stationary.php">Stationary</a></li>
    <li><a href="consumables.php">Consumables</a></li>
    <li><a href="activities1.php">Activities</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>

</nav>

</div>
</div>

</body>
</html>

