<?php
include('includes/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Stop Child Labor</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
</head>
<body>

	<div class="container">
		<img src="includes/images/child-labour-icons.png" alt="" width="50px" ><br><br>
		<a href="index.php" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back</a>
	
  		<hr>
			<table class="table table-bordered table-striped table-hover" id="myTable">
			<thead>
				<tr>
				<th class="text-center" scope="col">Sr. No.</th>
					<th class="text-center" scope="col">Type</th>
					<th class="text-center" scope="col">Address</th>
					<th class="text-center" scope="col">City</th>
					<th class="text-center" scope="col">Number of Children</th>
					<th class="text-center" scope="col">View</th>
				</tr>
			</thead>
				<?php
				$sql="select * from  tbl_child_labor";
				$result=mysqli_query($con,$sql);
				$i = 0;
				if($result){
				while($row=mysqli_fetch_assoc($result)){
					$sl = ++$i;
					$id = $row['clr_id'];
					$worktype = $row['clr_worktype'];
					$address = $row['clr_address'];
					$city = $row['clr_city'];
					$No_of_children = $row['clr_chldrnNo'];
					echo "
					<tr>
					<td class='text-center'>$sl</td>
					<td class='text-left'>$worktype</td>
					<td class='text-left'>$address</td>
					<td class='text-left'>$city</td>
					<td class='text-center'>$No_of_children</td>
				
					<td class='text-center'>
						<span>
						<a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$id' title='Prfile'><i class='fa fa-address-card-o' aria-hidden='true'></i></a>
						</span>
						
					</td>
				</tr>
					";
				}
			}
				?>
			</table>
	</div>


	
		<!-- View modal  -->
		<?php 

		// <!-- profile modal start -->
		$get_data = "SELECT * FROM  tbl_child_labor";
		$run_data = mysqli_query($con,$get_data);

		while($row = mysqli_fetch_array($run_data))
		{
			$id = $row['clr_id'];
			$worktype = $row['clr_worktype'];
			$address = $row['clr_address'];
			$city = $row['clr_city'];
			$state = $row['clr_state'];
			$emp = $row['clr_emp'];
			$reportedby = $row['clr_rptdby'];
			$children = $row['clr_chldrnNo'];
			$email = $row['clr_email'];
			$mobile = $row['clr_mobile'];
			$notes = $row['clr_notes'];
			$reportedon = $row['clr_rpt_dt'];
			
			echo "

				<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
				<div class='modal-dialog'>
					<div class='modal-content'>
					<div class='modal-header'>
						<h5 class='modal-title' id='exampleModalLabel'><i class='fa fa-user-circle-o' aria-hidden='true'></i> Reported on $reportedon </h5>
						<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>
					<div class='modal-body'>
					<div class='container' id='profile'> 
						<div class='row'>
							<div class='col-sm-4 col-md-2'>
								
				
								<strong>Children :</strong> $children<br>
								<strong>Industry :</strong> $worktype<br>
								<strong>Address :</strong><br>$address <br>
								<strong>Employer :</strong> $emp <br>
								<strong>City :</strong> $city<br>
								<strong>State: </strong>$state<br>
								
							</div>
							<div class='col-sm-3 col-md-6'>
								<h3 class='text-primary'>Good Samartian</h3>
								<p class='text-secondary'>
								<strong>Reported by :</strong> $reportedby <br>
								<i class='fa fa-phone' aria-hidden='true'></i> $mobile
								<br />
								<i class='fa fa-envelope-o' aria-hidden='true'></i> $email
								<br />
								<div class='card' style='width: 18rem;'>
								<i class='fas fa-sticky-note' aria-hidden='true'></i><strong>AdditionalNotes :</strong>
										<div class='card-body'>
										<p> $notes </p>
										</div>
								</div>
								
								<br />
								</p>
								<!-- Split button -->
							</div>
						</div>

					</div>   
					</div>
					<div class='modal-footer'>
						<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
					</div>
					</form>
					</div>
				</div>
				</div> 

			";
		}
		// <!-- profile modal end -->
		?>
<!-- </body>
</html> -->

<?php  
  include 'includes/footer.html'; 
?>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

