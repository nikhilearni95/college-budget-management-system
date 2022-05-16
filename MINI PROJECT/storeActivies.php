<?php
#print($_POST["acadamic_year"]);
#print_r($_POST["activity"]);
#print_r($_POST["amount"]);
$dept = "IT";
#echo sizeof($_POST["activity"]);
$query = "INSERT INTO  `r_d_activities` (`academic_year`, `department`, `activity`, `amount`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["activity"]);$i++){
	if($i == 0){
		$insertSQL = $insertSQL."('".$_POST["academic_year"]."', '".$dept."', '".$_POST["activity"][$i]."', ".$_POST["amount"][$i].")";
	}
	else{
		$insertSQL = $insertSQL.","."('".$_POST["academic_year"]."', '".$dept."', '".$_POST["activity"][$i]."', ".$_POST["amount"][$i].")";
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

