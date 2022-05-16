<?php
$connection = mysqli_connect("localhost", "root", "","budget");
if(isset($_POST['Submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$e_mail = $_POST['e_mail'];
$phone_number = $_POST['phone_number'];
$type_user = $_POST['type_user'];
if($username !=''||$password !=''||$name !=''||$e_mail !=''||$phone_number !=''||$type_user !=''){
$query = mysqli_query($connection,"insert into log(username,password,name,e_mail,phone_number,type_user) values ('$username', '$password', '$name', '$e_mail','$phone_number','$type_user')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!! or exceeded length..</p>";
}
}
?>