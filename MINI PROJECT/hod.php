<?php
session_start();
if(!isset($_SESSION["Key"])){
	header("Location:index.php");
}
if($_SESSION["type_user"] == "principal"){
	header("Location:principal.php");
}else if($_SESSION["type_user"] == "admin"){
	header("Location:admin.php");
}

?>
<!DOCTYPE html>


<html>
<head>
  <title></title>


<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/jquery-1.11.1.min.js"></script>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
	<!-- Header Started -->
<div class="panel panel-default">
  <div class="panel-heading">
    <table align="center">
      <tr>
        <td><img src="./images/logo.JPG" width="60" height="60"></td>
        <td align="center"><font color="purple" size="5"><b>SHRI VISHNU ENGINEERING COLLEGE FOR WOMEN[SVECW]</font></b><br><font color="purple" size="4"><b>(Autonomous)</b></font></td>
      </tr>
    </table>     
  </div>
  <div class="panel-heading">
    <center>
      <font color="purple" size="4"><b>BUDGET MANAGEMENT SYSTEM<b></font>
    </center>
  </div>
</div>

<div class="panel-heading">
    <center>
      <font color="purple" size="4">CHOOSE THE CATEGORIES</font>
    </center>
  </div>
</div>

<!-- Header Closed -->
  <!--<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="#">Categories-</a></li>
    <li><a href="equipment.php">Equipment</a></li>
    <li><a href="furniture.php">Furniture</a></li>
    <li><a href="stationary.php">Stationary</a></li>
    <li><a href="consumables.php">Consumables</a></li>
    <li><a href="activities1.php">Activities</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>

</nav>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" align="center">
      <center>

      <a class="navbar-brand" href="#"></a>
      <a class="navbar-brand" href="#"></a>
      <a class="navbar-brand" href="#"></a>
      <a class="navbar-brand" href="#"></a>
      
    </center>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="fisrtpdf.php">Annexure</a></li>
      <li><a></a></li>
      <li class="active"><a href="equipment.php">Equipment </a></li>
      <li><a></a></li>
      <li class="active"><a href="furniture.php">Furniture </a></li>
      <li><a></a></li>
      <li class="active"><a href="stationary.php">Stationary</a></li>
      <li><a></a></li>
      <li class="active"><a href="consumables.php">Consumables</a></li>
      <li><a></a></li>
      <li class="active"><a href="activities1.php">Activities</a></li>
      <li><a></a></li>
      <li class="active"><a href="salaries.php">Salaries</a></li>
      <li><a></a></li>
      <li class="active"><a href="logout.php">Logout  </a></li>
      <li><a></a></li>
      <li class="active"><a href="report.php">Report  </a></li>   
    </ul>

  </div>
</nav>



</body>
</html>

