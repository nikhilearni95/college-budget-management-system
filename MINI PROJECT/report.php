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

<title></title>  
<body bgcolor="white"> 
<form action="report_generation.php" method="post"> 
Employee List : <?php echo $_SESSION["department"];?> 
<select name="academic_year" >  
  <option value="Select">Select year</option>}  
  <option value="2017-18">2017-18</option>  
  <option value="2018-19">2018-19</option>  
  <option value="2019-20">2019-20</option>  
  <option value="2020-21">2020-21</option>  
  <option value="2021-22">2021-22</option>  
  <option value="2022-23">2022-23</option>  
</select> 
<!--<button type="submit">Generate Report</button>-->
<input type="submit" name="Generate Report" class="btn btn-info btn-md" value="Generate Report">
</form>  
</body>  
<html>  




