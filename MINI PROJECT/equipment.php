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
<!--
<!DOCTYPE html>
<html>
<head>
  <title></title>
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/jquery.min.js"></script>-->

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <title></title>
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
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

  <!--<div class="panel-heading ">
    <nav class="nav-menu float-right d-none d-lg-block">
        <!--<li class="drop-down"><a href="">LOGIN<-->
        <!--<ul>
          
            
              <!--<li class="drop-down"><a href="#">Non-Technical Club</a>
                <ul>-->
                  <!--<li class="drop-down"><a href="">Salaries</a>
                    <ul>
                      <li><a href="salaries.php">Existing Faculty</a></li>
                      <li><a href="salaries1.php">Faculty to be recruited</a></li>
                    </ul>
                  </li>
                  <li><a href="equipment1.php">Equipment</a></li>
                  <li><a href="furniture.php">Furniture</a></li>
                  <li><a href="stationary.php">Stationary</a></li>
                  <li><a href="consumables.php">Consumables</a></li>
                  <li><a href="activities1.php">Activities</a></li>
      </ul>
    </nav>
  </div>-->
  <!--<div class="panel-heading">
    <center>
      <font color="purple" size="4">Equipment required for the academic year</font>
    </center>
  </div>-->
</div>
<div class="panel-heading">
    <center>
      <!--<font color="purple" size="4">Equipments required for the academic year</font>-->
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
  <div class="panel-heading">
    <center>
      <font color="purple" size="4">Equipments required for the academic year</font>
    </center>
  </div>




    </center>
  </div>
</div>



  
  <div class="panel-body">
    <form method="POST" action="storeEquipment.php">
   <div class="col-sm-3 nopadding">Select Acadamic Year
   </div>
        <div class="col-sm-3 nopadding">
          <select name ="academic_year" class="form-control">
            <option value="2019-20">2019-20</option>
            <option value="2020-21">2020-21</option>
          </select>`
        </div>

 
  <div class="col-sm-12 nopadding m-3"></div>
  
<div class="col-sm-2 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="item_description" name="item_description[]" value="" placeholder="Enter item description">
  </div>
</div>
<div class="col-sm-2 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="unit" name="unit[]" value="" placeholder="Enter Amount Required">
  </div>
</div>
<div class="col-sm-2 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="item_cost" name="item_cost[]" value="" placeholder="Enter item cost">
  </div>
</div>
<div class="col-sm-2 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="total" name="total[]" value="" placeholder="Enter total value">
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="justification" name="justification[]" value="" placeholder="Enter justification">
  </div>
</div>

<div class="input-group-btn">
    <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
    </button>
</div>
<div id="education_fields">       
</div>
<br>
<button type="submit" class="btn btn-primary" value="submit" name="submit"> Submit</button>
<div class="clear"></div>
<div class="col-sm-12 nopadding"></div>
</form>
</div>
</div>

</body>
</html>
<script type="text/javascript">
  
  var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="item_description" name="item_description[]" value="" placeholder="Enter the item"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="unit" name="unit[]" value="" placeholder="Enter Amount Required"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="item_cost" name="item_cost[]" value="" placeholder="Enter item cost"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="total" name="total[]" value="" placeholder="Enter total value"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="justification" name="justification[]" value="" placeholder="Enter justification"></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div><div class="col-sm-12 nopadding"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
     $('.removeclass'+rid).remove();
   }
</script>

  