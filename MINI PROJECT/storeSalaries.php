<?php
#print($_POST["acadamic_year"]);
#print_r($_POST["curent_faculty"]);
#print_r($_POST["amount"]);
$dept = "IT";
#echo sizeof($_POST["designation"]);
function sanatize($val){

	if(empty($val) || $val==''){
		
		return 'null';
	}
	else{
		return $val;
	}
}
$query = "INSERT INTO `current_faculty` (`academic_year`,`department`,`designation`,`staff_available`,`staff_month_salary`,`staff_year_salary`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["faculty"]);$i++){
	if($i == 0){
		$insertSQL = $insertSQL."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["faculty"][$i])."','".sanatize($_POST["staff_available"][$i])."',".sanatize($_POST["staff_month_salary"][$i]).",".sanatize($_POST["gross_salary_per_year"][$i]).")";
	}
	else{
		$insertSQL = $insertSQL.","."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["faculty"][$i])."', '".sanatize($_POST["staff_available"][$i])."',".sanatize($_POST["staff_month_salary"][$i]).",".sanatize($_POST["gross_salary_per_year"][$i]).")";
	}
}
$sql = $query.$insertSQL;
#echo $sql;
$con=mysqli_connect("localhost","root","","budget");
if(isset($_POST['submit'])) {
	$qu = mysqli_query($con,$sql);
	if($qu){
	echo "Data inserted";
	header("Location:hod.php");
   }
else { 

	echo "failed to insert";
}
}
$query = "INSERT INTO `required_faculty` (`academic_year`,`department`,`designation`,`required_staff_available`,`required_staff_month_salary`,`required_staff_year_salary`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["required_faculty"]);$i++){

	if($i == 0){
		$insertSQL = $insertSQL."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["required_faculty"][$i])."','".sanatize($_POST["required_staff"][$i])."',".sanatize($_POST["required_staff_month_salary"][$i]).",".sanatize($_POST["required_staff_year_salary"][$i]).")";
	}
	else{
		$insertSQL = $insertSQL.","."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["required_faculty"][$i])."', '".sanatize($_POST["required_staff"][$i])."',".sanatize($_POST["required_staff_month_salary"][$i]).",".sanatize($_POST["required_staff_year_salary"][$i]).")";
	}
	
}
$sql = $query.$insertSQL;
#echo $sql;
$con=mysqli_connect("localhost","root","","budget");
if(isset($_POST['submit'])) {
	$qu = mysqli_query($con,$sql);
	if($qu){
	echo "Data inserted";
	header("Location:hod.php");
	
   }
else { 


	echo "failed to insert";
}
}
?>
