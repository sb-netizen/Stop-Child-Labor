<?php
session_start();
include 'includes/connection.php';

if(isset($_POST['submit'])){
    $worktype=$_POST['worktype'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $emp=$_POST['emp'];
    $reportedby=$_POST['report'];
    $noofchildren=$_POST['childrenno'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $notes=$_POST['notes'];
    
    $sql="insert into tbl_child_labor  (clr_worktype,clr_address,clr_city, clr_state,clr_emp,clr_rptdby, clr_chldrnNo, clr_email, clr_mobile, clr_notes)
    values ('$worktype','$address','$city','$state','$emp','$reportedby','$noofchildren','$email','$mobile','$notes')";
    $result=mysqli_query($con,$sql);
    if ($result){
        $_SESSION['status']="Data Inserted Successfully";
        header('location:index.php'); 
    }else{
        die(mysqli_error($con));
    }
}
?>

