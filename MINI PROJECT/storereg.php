    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $e_mail = $_POST['e_mail'];
    $phone_number = $_POST['phone_number'];
    $type_user = $_POST['type_user'];
    if (!empty($username) || !empty($password) || !empty($name) || !empty($e_mail) || !empty($phone_number) || !empty($type_user)) {
     $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "budget";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT email From register Where email = ? Limit 1";
         $INSERT = "INSERT Into login (username, password, name, e_mail, phone_number, type_user) values(?, ?, ?, ?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $e_mail);
         $stmt->execute();
         $stmt->bind_result($e_mail);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssii", $username, $password, $name, $e_mail, $phone_number, $type_user);
          $stmt->execute();
          echo "New record inserted sucessfully";
         } else {
          echo "Someone already register using this email";
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
    ?>