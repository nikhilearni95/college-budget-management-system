<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <form action="storereg.php" method="POST">
  <table>
   <tr>
    <td>Username :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="name" required></td>
  </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="e_mail" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
        <input type="phone" name="phone_number" required>
    </td>
   </tr>
   <tr>
    <td>Type user :</td>
    <td>
        <input type="text" name="type_user" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>