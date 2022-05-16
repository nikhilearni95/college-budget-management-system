<?php
#print($_POST["acadamic_year"]);
#print_r($_POST["activity"]);
#print_r($_POST["amount"]);
$dept = "IT";
#echo sizeof($_POST["activity"]);
$query = "INSERT INTO `non_reccuring_equipment` (`academic_year`, `department`,`item_description`,`unit`,`item_cost`,`total`,`justification`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["item_description"]);$i++){
	if($i == 0){
		$insertSQL = $insertSQL."('".$_POST["acadamic_year"]."', '".$dept."', '".$_POST["item_description"][$i]."', ".$_POST["unit"][$i].",".$_POST["item_cost"][$i].",".$_POST["total"][$i].",'".$_POST["justification"][$i]."')";
	}
	else{
		$insertSQL = $insertSQL.","."('".$_POST["acadamic_year"]."', '".$dept."', '".$_POST["item_description"][$i]."', ".$_POST["unit"][$i].",".$_POST["item_cost"][$i].",".$_POST["total"][$i].",'".$_POST["justification"][$i]."')";
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



<?php
#print($_POST["acadamic_year"]);
#print_r($_POST["activity"]);
#print_r($_POST["amount"]);
$dept = "IT";
#echo sizeof($_POST["activity"]);
$query = "INSERT INTO `consumables` (`academic_year`, `department`,`item_description`,`unit`,`item_cost`,`total`,`justification`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["item_description"]);$i++){
	if($i == 0){
		$insertSQL = $insertSQL."('".$_POST["acadamic_year"]."', '".$dept."', '".$_POST["item_description"][$i]."', ".$_POST["unit"][$i].",".$_POST["item_cost"][$i].",".$_POST["total"][$i].",'".$_POST["justification"][$i]."')";
	}
	else{
		$insertSQL = $insertSQL.","."('".$_POST["acadamic_year"]."', '".$dept."', '".$_POST["item_description"][$i]."', ".$_POST["unit"][$i].",".$_POST["item_cost"][$i].",".$_POST["total"][$i].",'".$_POST["justification"][$i]."')";
	}
	
}
$sql = $query.$insertSQL;
#echo $sql;
$con=mysqli_connect("localhost","root","","budget");
if(isset($_POST['submit'])) {
	$qu = mysqli_query($con,$sql);
	if($qu){
	echo "Data inserted";
   }
else {
	echo "failed to insert";
}

}
?>

