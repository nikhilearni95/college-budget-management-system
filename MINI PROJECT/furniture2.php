

Skip to content
Using Gmail with screen readers
Enable desktop notifications for Gmail.
   OK  No thanks

1 of 1,341
login form miniproject
Inbox
x

ramya ganta
AttachmentsMar 7, 2020, 11:12 PM (11 hours ago)
 

Sanjana Pidakala
12:59 AM (9 hours ago)
to me

ilook database

On Sat, 7 Mar 2020 at 23:12, ramya ganta <ramyaganta17@gmail.com> wrote:



Sanjana Pidakala
Attachments
1:00 AM (9 hours ago)
to me


4 Attachments

Sanjana Pidakala
Attachments
10:27 AM (7 minutes ago)
to me


Attachments area


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
         <h2>Shri Vishnu Engineering College for Women[SVECW]</h2><h4>(Autonomous)</h4></font></b></span></a></h1>
        
  </div>
  <div class="panel-heading "><h2><b><font color="purple" >BUDGET MANAGEMENT SYSTEM</font></b></h2></div>

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

  

  <div class="panel-heading"><h3><font color="purple">Consumables for the academic years</font></h3></div>
</div>
  <div class="panel-body">
    <form method="POST" action="storeFurniture.php">
   <div class="col-sm-3 nopadding">Select Acadamic Year-
   </div>
        <div class="col-sm-2 nopadding">
          <select name ="acadamic_year" class="form-control">
            <option value="2019-20">2019-20</option>
            <option value="2020-21">2020-21</option>
          </select>
        </div>

  <div class="col-sm-12 nopadding m-3"></div>
  
<div class="col-sm-2 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="name[]" value="" placeholder="Name">
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
    <button class="btn btn-success" type="button"  onclick="education_fields();"> 
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
    </button>
</div>
<div id="education_fields">       
</div>
<br>
<button type="submit" class="btn btn-primary" value="1" name="submit"> Submit</button>
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
    divtest.innerHTML = '<div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="name" name="name[]" value="" placeholder="Name"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="unit" name="unit[]" value="" placeholder="Enter Amount Required"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="item_cost" name="item_cost[]" value="" placeholder="Enter item cost"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="total" name="total[]" value="" placeholder="Enter total value"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="justification" name="justification[]" value="" placeholder="Enter justification"></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div><div class="col-sm-12 nopadding"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
     $('.removeclass'+rid).remove();
   }
</script>