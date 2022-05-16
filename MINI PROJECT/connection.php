<?php
$connection = mysqli_connect("localhost", "root", "","db1");
if(isset($_POST['Submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
if($username !=''||$password !=''){
$query = mysqli_query($connection,"insert into login(username,password) values ('$username', '$password')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!! or exceeded length..</p>";
}
}
?>