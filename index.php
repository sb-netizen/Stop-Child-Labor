
<?php  
  session_start();
  include 'includes/header.html'; 
?>
   <?php
            if(isset($_SESSION['status'])){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
              
              unset($_SESSION['status']);
            }
            ?>

<body class="home">

    <!--Content Section Start -->
        <div class="container my-4">
          
          <div class="row">

            <!-- Card on the Left Side start-->

            <div class="col-6" >
            <div class="card">
              <img src="includes/images/childlabor.jpg" class="card-img-top"  height="125px" width="100px"/>
              <div class="card-body">
                <h5 class="card-title">Child Labor</h5>
                <p class="card-text">
                The term “child labour” is often defined as work that deprives children of their childhood, 
                their potential and their dignity, 
                and that is harmful to physical and mental development.
                </p>
                <p>The worst forms of child labour involves children being enslaved, 
                  separated from their families, exposed to serious hazards and illnesses 
                  and/or left to fend for themselves on the streets of large cities often at a very early age.
                </p>
                <a href="https://www.ilo.org/ipec/ChildlabourstatisticsSIMPOC/lang--en/index.htm"  target="_blank" class="btn btn-primary">
                  Statistics
                </a>
              </div>
            </div>
            
            </div>

            <!-- Card on the Left Side end -->
            
            <div class="col-6">


                        <form action="action.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Report Child labour </legend>
                              <p> Child Labour related info: </p>
                        
                          <div class="elements">
                              <label>Type of Work  <font color="red">*</font>:</label>
                              <input type="text" id="work" name="worktype" size="25" placeholder="Industry"  autocomplete="off" required/>
                          </div>

                          <div class="elements">
                                  <label>Building Address <font color="red">*</font>:</label>
                                  <textarea id="address" name="address" cols="21" rows="4"  placeholder="Please be as detailed as possible"  autocomplete="off" required></textarea>
                          </div>

                          <div class="elements">
                                <label>State <font color="red">*</font>:</label>
                                <select name="state" size="1" id="state">
                                <option disabled selected>&larr; Select State &rarr;</option> -->
                                <!-- <option selected disabled value="">&larr; Select State &rarr;</option> -->
                                          <?php
                                              include 'includes/connection.php';
                                              $sql="select state_nm from state";
                                              $result=mysqli_query($con,$sql);
                                              while($data = mysqli_fetch_array($result))
                                              {
                                                  echo "<option value='". $data['state_nm'] ."'>" .$data['state_nm'] ."</option>";  // displaying data in option menu
                                              }	
                                          ?>
                                    </select>
                    
                            </div>

                            
                            

                           <div class="elements">
                                <label for="city">City <font color="red">*</font>:</label>
                                <input type="text" id="city" name="city" size="25"  placeholder="City"  autocomplete="off" required/>
                          </div>

                          <div class="elements">
                                  <label for="emp">Employer Name:</label>
                                  <input type="text" id="emp" name="emp" size="25"  placeholder="(Kindly mention, if Known)"  autocomplete="off" required/>
                                </div>

                          <div class="elements">
                            <label>No. of Children Working: <font color="red">*</font>:</label>
                            <input name="childrenno" type="text" id="childrenno" size="7" maxlength="3" placeholder="Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" autocomplete="off" required dir="rtl"/>
                          </div>
                          
                          <p>Details of Person reporting: </p>
                                <div class="elements">
                                    <label>Reported by:</label>
                                    <input type="text" size="20" placeholder="Please Enter Name" name="report" autocomplete="off" required>
                                </div>
                                              
                                <div class="elements">
                                    <label>Email:</label>
                                    <input type="email"  size="20" placeholder="Enter Email" name="email"  autocomplete="off" required>
                                </div>
                    
                                <div class="elements">
                                    <label>Mobile:</label>
                                    <input type="text" size="20" placeholder="Enter Contact No." name="mobile"  autocomplete="off" required>
                                </div> 
                                
                                <div class="elements">
                                    <label>Upload Image:</label>
                                    <input type="file" name="image"  >
                                </div>

                                <div class="elements">
                                  <label>Notes:</label>
                                  <textarea id="notes" name="notes" cols="21" rows="4"  placeholder="Enter Notes"  autocomplete="off"></textarea>
                                </div>

                          <button type="submit" class="btn btn-success m-a-30" name="submit" id="submitreport" >Submit</button><br><br>
                          <fieldset>
                        </form>


            </div>
          </div>
        </div>
    <!-- Content Section End -->

<?php  
  include 'includes/footer.html'; 
?>