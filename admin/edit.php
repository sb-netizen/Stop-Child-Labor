<?php
    ob_start();
    include '../includes/connection.php';
    //  if ($_SESSION['RollNo']) {
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
                    <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                    <div class="span9">
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Record</h3>
                            </div>
                            <div class="module-body">

                                <?php

                                    $id=$_GET['updateid'];

                                    $sql="select * from tbl_child_labor where clr_id =$id";
                                    
                                    $result=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_assoc($result);
                                    $type=$row['clr_worktype'];
                                    $address=$row['clr_address'];
                                    $city=$row['clr_city'];
                                    $state=$row['clr_state'];
                                    $emp=$row['clr_emp'];
                                    $rptdby=$row['clr_rptdby'];
                                    $chdrn=$row['clr_chldrnNo'];
                                    $email=$row['clr_email'];
                                    $mobile=$row['clr_mobile'];
                                    $notes=$row['clr_notes'];

                                ?>

                                    <br >
                                    <!-- //action="edit.php?id=<?php echo $bookid ?>" -->
                                    <form class="form-horizontal row-fluid"  method="post">   
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Title">Type of Work:</label></b>
                                            <div class="controls">
                                                <input type="text" id="work" name="worktype" value= "<?php echo $type?>" class="span8" required>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="address">Building Address:<font color="red">*</font>:</label></b>
                                            <div class="controls">
                                            <textarea id="address" name="address" cols="21" rows="4" placeholder="Please be as detailed as possible" autocomplete="off" class="span8" required> <?php echo $address?> </textarea>
                                            </div>
                                        </div>

                                   <div class="control-group">
                                            <b>
                                            <label class="control-label" for="city">City:</label></b>
                                            <div class="controls">
                                                <input type="text" id="city" name="city" value= "<?php echo $city?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="state">State: <font color="red">*</font></label></b>
                                            <div class="controls">
                                            <select name="state" size="1" id="state">
                                            <option disabled selected>&larr; Select State &rarr;</option> -->
                                                    <?php
                                                        $sql="select state_nm from state";
                                                        $result=mysqli_query($con,$sql);
                                                        while($data = mysqli_fetch_array($result))
                                                        {
                                                           
                                                            $output = "<option value='". $data['state_nm'] ."'>" .$data['state_nm'] ."</option>"; // displaying data in option menu
                                                            echo $output;
                                                        }	
                                                    ?>
                                                </select>

                                            </div>               
                                        </div>

                                    

                                    <div class="control-group">
                                            <b>
                                            <label class="control-label" for="emp">Employer's Name:</label></b>
                                            <div class="controls">
                                                <input type="text" id="emp" name="emp" value= "<?php echo $emp?>" class="span8" required>
                                            </div>
                                        </div>

                                    <div class="control-group">
                                        <b>
                                        <label class="control-label" for="rptdby">Reported by:</label></b>
                                        <div class="controls">
                                            <input type="text" id="rptdby" name="rptdby" value= "<?php echo $rptdby?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <b>
                                        <label class="control-label" for="chdrn">Children:</label></b>
                                        <div class="controls">
                                            <input type="text" id="chdrn" name="chdrn" value= "<?php echo $chdrn?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <b>
                                        <label class="control-label" for="rptdby">email:</label></b>
                                        <div class="controls">
                                            <input type="text" id="email" name="email" value= "<?php echo $email?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <b>
                                        <label class="control-label" for="rptdby">mobile:</label></b>
                                        <div class="controls">
                                            <input type="text" id="mobile" name="mobile" value= "<?php echo $mobile?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                            <b>
                                            <label class="control-label" for="notes">Notes<font color="red">*</font>:</label></b>
                                            <div class="controls">
                                            <textarea id="notes" name="notes" cols="21" rows="4"  placeholder="Please be as detailed as possible"  autocomplete="off" class="span8" required> <?php echo $notes?> </textarea>
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit"class="btn">Update Details</button>
                                        </div>
                                    </div> 

                                    </form> 
                                    </div>   
                                    </div>          
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
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


if(isset($_POST['submit'])){
    $type=$_POST['worktype'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $emp=$_POST['emp'];
    $rptdby=$_POST['rptdby'];
    $chdrn=$_POST['chdrn'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $notes=$_POST['notes'];

    $sql="UPDATE tbl_child_labor SET clr_worktype='$type', clr_address='$address',
    clr_city='$city',  clr_state='$state'	,clr_emp='$emp', clr_rptdby='$rptdby',clr_chldrnNo='$chdrn',
    clr_email='$email', clr_mobile='$mobile',clr_notes='$notes'
    WHERE clr_id=$id";

$result=mysqli_query($con,$sql);
    if ($result){
         echo "<script type='text/javascript'>alert('Success')</script>";
         header( "Refresh:0.01; url=display.php", true, 303);
    }else{
        die(mysqli_error($con));
    }

}


?>
      
    </body>

</html>


<?php /* }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} */ ?>