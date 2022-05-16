<?php
#print($_POST["acadamic_year"]);
#print_r($_POST["activity"]);
#print_r($_POST["amount"]);
$dept = "IT";
#echo sizeof($_POST["activity"]);
$query = "INSERT INTO `printing_stationary` (`academic_year`, `department`,`item_description`,`quantity`,`item_cost`,`total`) VALUES ";
$insertSQL = "";
for ($i=0;$i<sizeof($_POST["item_description"]);$i++){
	if($i == 0){
		$insertSQL = $insertSQL."('".$_POST["academic_year"]."', '".$dept."', '".$_POST["item_description"][$i]."','".$_POST["quantity"][$i]."','".$_POST["item_cost"][$i]."','".$_POST["total"][$i]."')";
	}
	else{
		$insertSQL = $insertSQL.","."('".$_POST["academic_year"]."', '".$dept."', '".$_POST["item_description"][$i]."', ".$_POST["quantity"][$i].",".$_POST["item_cost"][$i].",".$_POST["total"][$i].")";
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


