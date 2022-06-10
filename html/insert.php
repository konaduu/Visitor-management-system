<?php
include('db_connection.php');
 if(isset($_POST['delivery_approved'])){
     $company_name = $_POST['company_name'];
     $rider_name = $_POST['rider_name'];
     $arrival = $_POST['arrival'];
     $transportation = $_POST['transportation'];
     $package_type = $_POST['package_type'];


     $sql = "INSERT INTO deliveries(company_name,rider_name,arrival,transportation,package_type) VALUES ('$company_name',' $rider_name',' $arrival',' $transportation','$package_type')";
     $query = mysqli_query($db_connection,$sql);

echo'success';
exit();
 }

// visitors db connection
 if(isset($_POST['visitor_approved'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pov = $_POST['pov'];
    $toa = $_POST['toa'];
    $mot = $_POST['mot'];


    $sql = "INSERT INTO visitors(first_name,last_name,purpose_of_visit,time_of_arrival,transportation) VALUES ('$fname',' $lname',' $pov',' $toa','$mot')";
    $query = mysqli_query($db_connection,$sql);

echo'success';
exit();
}





