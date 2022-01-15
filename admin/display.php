<?php
    require('../includes/connection.php');
    // if ($_SESSION['RollNo']) {
    include 'partials/header.php'; 
?>  

    <body>
    <?php  
        include 'partials/navheader.php'; 
    ?>  
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php  
                            include 'partials/sidebar.php'; 
                        ?> 
                    </div> <!--/.span3-->

                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>List of Records</h3>
                                </div>
                                <div class="module-body">
                                    <br >

                                    <table class="table ">
                                        <thead>
                                        <tr>
                                            <th scope="col">Sr. No.</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">City</th>
                                            <th scope="col">State</th>
                                            <th scope="col">number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql="select * from  tbl_child_labor";
                                                $result=mysqli_query($con,$sql);
                                                if($result){
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $id=$row['clr_id'];
                                                    $type=$row['clr_worktype'];
                                                    $address=$row['clr_address'];
                                                    $city=$row['clr_city'];
                                                    $state=$row['clr_state'];
                                                    $number=$row['clr_chldrnNo'];
                                                    echo '
                                                    <tr>
                                                    <th scope="row">'.$id.'</th>
                                                    <td>'.$type.'</td>
                                                    <td>'.$address.'</td>
                                                    <td>'.$city.'</td>
                                                    <td>'.$state.'</td>
                                                    <td>'.$number.'</td>
                                                    <td>
                                                        <button class="btn btn-primary"><a href="edit.php?updateid='.$id.'" class="text-light">Update</a></button>
                                                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" onclick="return checkDelete()">Delete</a></button>

                                                    </td>
                                                    </tr>';  
                                                }
                                                }
                                            ?>       
                                        </tbody>
                                    </table>   
                                </div><!--/.module body-->
                            </div><!--/.module-->  
                        </div><!--/.content--> 
                    </div> <!--/.span9-->   
                </div><!--/.row-->
            </div><!--/.container-->
        </div> <!--/.Wrapper-->

        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 Library Management System </b>All rights reserved.
            </div>
        </div>

        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

<?php
/* if(isset($_POST['submit']))
{
    $rollno=$_POST['RollNo'];
    $message=$_POST['Message'];

$sql1="insert into LMS.message (RollNo,Msg,Date,Time) values ('$rollno','$message',curdate(),curtime())";

if($conn->query($sql1) === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
    
} */
?>

    </body>

</html>


<?php /* }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} */ ?>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>