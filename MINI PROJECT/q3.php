<?php
$connection = mysqli_connect("localhost", "root", "","budget");
if(isset($_POST['Submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
//$name=$_POST['name'];
//$e_mail=$_POST['e_mail'];
//$phone_number=$_POST['phone_number'];
//$type_user=$_POST['type_user'];
//$department=$_POST['department'];
if($username !=''||$password !='' ){
$query = mysqli_query($connection,"insert into login(username,password) values ('$username', '$password')");
echo "<br/><br/><span>Data inserted succesfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!! or exceeded length..</p>";
}
}
?>