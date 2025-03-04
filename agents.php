<?php
session_start();
require("config.php");
////code


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Real Estate App </title>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="css/feathericon.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="admin/assets/plugins/datatables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="admin/assets/plugins/datatables/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="admin/assets/plugins/datatables/select.bootstrap4.min.css">
	<link rel="stylesheet" href="admin/assets/plugins/datatables/buttons.bootstrap4.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/style.css">

	
			<script src="admin/assets/js/html5shiv.min.js"></script>
			<script src="admin/assets/js/respond.min.js"></script>
		
        	<!-- Header -->
	<?php include("include/header.php"); ?>
	
</head>

<body>

	<!-- Main Wrapper -->




	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col">
						<h3 class="page-title">Agent</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">Agents</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Agent List</h4>
							<?php
							if (isset($_GET['msg']))
								echo $_GET['msg'];
							?>
						</div>
						<div class="card-body">

							<table id="basic-datatable" class="table">
								<thead>
									<tr>
										<th>No. </th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										
										<th>Picture</th>
										
									</tr>
								</thead>


								<tbody>
									<?php

									$query = mysqli_query($con, "select * from user where utype='agent'");
									$cnt = 1;
									while ($row = mysqli_fetch_row($query)) {
										?>
										<tr>
											<td>
												<?php echo $cnt; ?>
											</td>
											<td>
												<?php echo $row['1']; ?>
											</td>
											<td>
												<?php echo $row['2']; ?>
											</td>
											<td>
												<?php echo $row['3']; ?>
											</td>
											<!-- <td>
												<?php echo $row['5']; ?>
											</td> -->
											<td><img src="images/user/<?php echo $row['6']; ?>" height="50px" width="50px"></td>
											
										</tr>
										<?php
										$cnt = $cnt + 1;
									}
									?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /Main Wrapper -->


	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

	<script src="assets/plugins/datatables/dataTables.select.min.js"></script>

	<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
	<script src="assets/plugins/datatables/buttons.print.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>