<?php

$db_connection = mysqli_connect('localhost', 'root', '','visitor_management_system');
if(mysqli_connect_error()){
    echo mysqli_connect_errno();
    exit();
}else{
    // echo "successfully connected to database";
}
?>