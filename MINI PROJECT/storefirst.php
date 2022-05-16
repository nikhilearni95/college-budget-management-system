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
$query = "INSERT INTO `non_recurring` (`academic_year`,`department`,`designation`,`amount`,`annexure`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["faculty"]);$i++){
	if($i == 0){
		$insertSQL = $insertSQL."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["faculty"][$i])."',".sanatize($_POST["amount"][$i]).",'".sanatize($_POST["annexure"][$i])."')";
	}
	else{
		$insertSQL = $insertSQL.","."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["faculty"][$i])."', ".sanatize($_POST["amount"][$i]).",'".sanatize($_POST["annexure"][$i])."')";
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
$query = "INSERT INTO `recurring` (`academic_year`,`department`,`required_faculty`,`amount`,`annexure`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["required_faculty"]);$i++){

	if($i == 0){
		$insertSQL = $insertSQL."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["required_faculty"][$i])."',".sanatize($_POST["amount"][$i]).",'".sanatize($_POST["annexure"][$i])."')";
	}
	else{
		$insertSQL = $insertSQL.","."('".sanatize($_POST["academic_year"])."', '".sanatize($dept)."', '".sanatize($_POST["required_faculty"][$i])."', ".sanatize($_POST["amount"][$i]).",'".sanatize($_POST["annexure"][$i])."')";
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
