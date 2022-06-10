<?php
include('db_connection.php');
 session_start();
 $message = "";
 
 if(isset($_POST['email'])) {
    $olduser = "SELECT * FROM user WHERE email_address = '".$_POST["email"].  "  ' AND password = '".$_POST["password"]."'";
    $query = mysqli_query($db_connection, $olduser);
      $row = mysqli_num_rows($query);
    if(!empty($query) AND $row > 0){
         $_SESSION["email"] = $row['email_address'];
         $_SESSION["password" ] = $row['password'];
         header("Location:home.php");
    }
    else{
        $message = "Invaild email or Password!";
        header("Location:index.php");
    }

 }
 ?>