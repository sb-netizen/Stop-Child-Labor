<?php
    include '../includes/connection.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="Delete from tbl_child_labor where clr_id=$id";
        $result=mysqli_query($con,$sql);
        if ($result){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>