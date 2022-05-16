
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




</div>
  <div class="panel-heading"><h3><font color="purple">Non-Reccuring</font></h3></div>
  <div class="panel-body">
    <form method="POST" action="storefirst.php">
   <div class="col-sm-3 nopadding">Select Acadamic Year-
   </div>
        <div class="col-sm-5 nopadding">
          <select name ="academic_year" class="form-control">
            <option value="1999-2000">1999-2000</option> <option value="2000-01">2000-01</option>
            <option value="2001-02">2001-02</option> <option value="2002-03">2002-03</option>
            <option value="2003-04">2003-04</option> <option value="2004-05">2004-05</option>
            <option value="2005-06">2005-06</option> <option value="2006-07">2006-07</option>
            <option value="2007-08">2007-08</option> <option value="2008-09">2008-09</option>
            <option value="2009-10">2009-10</option> <option value="2011-12">2011-12</option>
            <option value="2012-13">2012-13</option> <option value="2013-14">2013-14</option>
            <option value="2014-15">2014-15</option> <option value="2015-16">2015-16</option>
            <option value="2016-17">2016-17</option> <option value="2017-18">2017-18</option>
            <option value="2018-19">2018-19</option> <option value="2019-20">2019-20</option>
            <option value="2020-21">2020-21</option> <option value="2021-22">2021-22</option>
            <option value="2022-23">2022-23</option> <option value="2023-24">2023-24</option>
            <option value="2024-25">2024-25</option>
          </select>`
        </div>
<div class="col-sm-12 nopadding m-3"></div>  
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input class="form-control" id="designation" name="faculty[]" value="equipment" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter the amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="staff_month_salary" name="annexure[]" value="" placeholder="Annexure">
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input class="form-control" id="designation" name="faculty[]" value="furniture" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter the amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="staff_month_salary" name="annexure[]" value="" placeholder="Annexure">
  </div>
</div>


<div class="panel-heading"><h3><font color="purple">Recurring</font></h3></div>
<div class="panel-body">
<div class="col-sm-12 nopadding m-3"></div>
  
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="staff_salaries" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>

<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="workshopes" contenteditable="" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>

<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="recuired_faculty[]" value="conducting" contenteditable="" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="faculty_deputation" placeholder="" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="student_deputation" placeholder="" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="industrial_tours" placeholder="" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>

<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="guest_faculty" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="department_activities" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="inhouse_activities" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="printing_stationary" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="equipment_consumables" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="required_faculty[]" value="miscellaneous_items" contenteditable="disabled" readonly>
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="amount[]" value="" placeholder="Enter amount" >
  </div>
</div>
<div class="col-sm-4 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name_of_the_staff_member" name="annexure[]" value="" placeholder="Enter annexure" >
  </div>
</div>

<div class="clear"></div>
<div class="col-sm-12 nopadding"></div>
<center>
<div class="form-group">
  <button type="submit" class="btn btn-primary" value="1" name="submit">Submit</button>
</div>
</center>
</form>
</div>
</body>
</html>