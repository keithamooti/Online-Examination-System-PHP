<?php
	include 'addCourse.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Courses</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="index.php" class="logo" style="color: #fff">
					Online Exam
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/avatar.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Administrator</h4>
												<p class="text-muted">admin@example.com</p><a href="profile.php" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Actions</h4>
						</li>
						<li class="nav-item active">
							<a href="courses.php">
								<i class="fas fa-file-word"></i>
								<p>Courses</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="students.php">
								<i class="fas fa-users"></i>
								<p>Manage Students</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="question_bank.php">
								<i class="fas fa-book"></i>
								<p>Question Bank</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="add_questions.php">
								<i class="fas fa-pen-square"></i>
								<p>Add Questions</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="">
								<i class="fas fa-file-word"></i>
								<p>View Results</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h2 class="text-white pb-2">Courses</h2>
						<h5 class="text-white op-7 mb-4">View or edit couses and Couseunit From Here</h5>
					</div>
					<div class="row">
						<div class="col-md-4">
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addCourseModal">
								<i class="fa fa-plus"></i>
								New Course
							</button>
						</div>
						<div class="col-md-4">
							<button class="btn btn-secondary btn-round ml-auto" data-toggle="modal" data-target="#addCourseUnitModal">
								<i class="fa fa-plus"></i>
								New Course Unit
							</button>
						</div>
						<div class="col-md-4">
							<button class="btn btn-warning btn-round ml-auto" data-toggle="modal" data-target="#editCourseUnitModal">
								<i class="fa fa-plus"></i>
								Edit Course/Course Unit
							</button>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Courses</div>
										<div class="card-tools">
											<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Export
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>#</th>
													<th>Course Name</th>
													<th>Code</th>
													<th>Faculty</th>
													<th>Duration</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$query = mysqli_query($con,"SELECT * FROM courses ORDER BY faculty");
													$id = 0;
													while ($table = mysqli_fetch_array($query)) {
													  $id++;
													 ?>
													  
													<tr>
														<td><?php echo $id; ?></td>
														<td><?php echo $table['course_name']; ?></td>
														<td><?php echo $table['course_code']; ?></td>
														<td><?php echo $table['faculty']; ?></td>
														<td><?php echo $table['period']; ?></td>
													</tr>
												<?php
												}  
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-secondary">
								<div class="card-header">
									<div class="card-title">Search</div>
									<div class="card-category">Select Course to view the course Units</div>
								</div>
								<div class="card-body">
									<select class="form-control" id="course">
										<option value="">--SELECT COURSE--</option>
										<?php
											//$result = mysqli_query($con,"SELECT * FROM courses");
											//while ($row = mysqli_fetch_array($result)) {
												//echo '<option value = "'.$row["course_code"].'">'.$row["course_name"].'</option>';
											//}
										echo load_courses($con);
										?>
									</select>
								</div>
							</div>
							<div id="state"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course Modal -->
			<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">
									New
								</span> 
								<span class="fw-light">
									Course
								</span>
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="courses.php">
						<div class="modal-body">
							<p class="small">Add new course using this form, make sure you fill them all</p>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group form-group-default">
											<label>Course Name</label>
											<input id="cname" type="text" name="cname" class="form-control" placeholder="fill course name" required="true">
										</div>
									</div>
									<div class="col-md-6 pr-0">
										<div class="form-group form-group-default">
											<label>Course Code</label>
											<input id="code" type="text" name="code" class="form-control" placeholder="fill course code" required="true">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-default">
											<label>Faculty</label>
											<input id="faculty" type="text" name="faculty" class="form-control" placeholder="fill faculty" required="true">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Study Period</label>
											<input id="period" type="text" name="period" class="form-control" placeholder="study period(eg., 1,2,3...)" required="true">
										</div>
									</div>
								</div>
						</div>
						<div class="modal-footer no-bd">
							<button type="submit" name="submit" id="addCourseButton" class="btn btn-primary">Add</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Course Unit Modal -->
			<div class="modal fade" id="addCourseUnitModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">
									New
								</span> 
								<span class="fw-light">
									Course Unit
								</span>
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="courses.php" method="POST">
						<div class="modal-body">
							<p class="small">Add new course unit using this form, make sure you fill them all</p>
							
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group form-group-default">
											<label>Course Unit Name</label>
											<input id="addUnitName" name="unit_name" type="text" class="form-control" placeholder="fill course name" required="true">
										</div>
									</div>
									<div class="col-md-6 pr-0">
										<div class="form-group form-group-default">
											<label>Course Unit Code</label>
											<input id="addUnitCode" type="text" name="unit_code" class="form-control" placeholder="fill course unit code" required="true">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-default">
											<label>Study Year</label>
											<input id="addYear" type="text" name="year" class="form-control" placeholder="fill year" required="true">
										</div>
									</div>
									<div class="col-md-8">
										<div class="form-group form-group-default">
											<label>Course</label>
											<select id="addCourse" name="course" class="form-control" required="true">
												<option value="">--Select--</option>
												<?php
													echo load_courses($con);
											 	?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form-group-default">
											<label>Semester</label>
											<select name="semester" class="form-control" required="true">
												<option value="">--Select--</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
									</div>
								</div>
							
						</div>
						<div class="modal-footer no-bd">
							<button type="submit" id="addCUButton" name="addunit" class="btn btn-primary">Add</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Edit Course/Courseunit Modal -->
			<div class="modal fade" id="editCourseUnitModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">
									Edit
								</span> 
								<span class="fw-light">
									Course/Course Unit
								</span>
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p class="small">Make sure you fill them all</p>
							<ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">Edit Course</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Edit Course Unit</a>
								</li>
							</ul>
							<div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
								<div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
									<form>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Course Name</label>
													<input id="addName" type="text" class="form-control" placeholder="fill course name">
												</div>
											</div>
											<div class="col-md-6 pr-0">
												<div class="form-group form-group-default">
													<label>Course Code</label>
													<input id="addCode" type="text" class="form-control" placeholder="fill course code">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Faculty</label>
													<input id="addFaculty" type="text" class="form-control" placeholder="fill faculty">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Study Period</label>
													<input id="addperiod" type="text" class="form-control" placeholder="study period(eg., 1,2,3...)">
												</div>
											</div>
										</div>
									</form>
								</div>
								
								<div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
									<form action="cours.php" method="POST">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Course Unit Name</label>
													<input id="addUnitName" type="text" class="form-control" placeholder="fill course name">
												</div>
											</div>
											<div class="col-md-6 pr-0">
												<div class="form-group form-group-default">
													<label>Course Unit Code</label>
													<input id="addUnitCode" type="text" class="form-control" placeholder="fill course unit code">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Study Year</label>
													<input id="addYear" type="text" class="form-control" placeholder="fill year">
												</div>
											</div>
											<div class="col-md-8">
												<div class="form-group form-group-default">
													<label>Course</label>
													<select id="addCourse" class="form-control">
														<option value="">--Select--</option>
														<?php
															echo load_courses($con);
													 	?>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Semester</label>
													<select name="semester" class="form-control">
														<option value="">--Select--</option>
														<option value="1">1</option>
														<option value="2">2</option>
													</select>
												</div>
											</div>
										</div>
									
								</div>
							</div>
						</div>
						<div class="modal-footer no-bd">
							<button type="button" id="addRowButton" class="btn btn-primary">Edit</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="">
									Online Exam
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.facebook.com/keithorganisations">
									Help
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2019, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.facebook.com/keithorganisations">Keith Tusiime</a>
					</div>				
				</div>
			</footer>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="selected changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="selected changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="selected changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<!--  DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
		});

		$(function(){
			/*$("#addCourseButton").click(function(){
				var cname = $("#addName").val();
				var code = $("#addCode").val();
				var faculty = $("#addFaculty").val();
				var period = $("#addperiod").val();
				var datastring = 'cname='+ cname + '&code=' + code + '&faculty=' + faculty + '&period=' + period;
				$.ajax({
					type: "POST",
					url: "addCourse.php",
					data: datastring,
					success: function(data){
						$("#message").html(data);
					}
				});
				return false;
			});

			//User Registration.......
			$("#signup").click(function(){
				var cname        = $("#cname").val();
				var code = $("#code").val(); 
				var faculty = $("#faculty").val();
				var period       = $("#period").val();
				var dataString = 'cname=' + cname + '&code=' + code + '&faculty=' + faculty +' &period=' + period;
				$.ajax({
					type: "post",
					url: "addCourse.php",
					data: dataString,
					success: function(data){
						$("#message").html(data);
					}
					
				});                                                                                                                                       
				return false;
			});
		});*/
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#course').change(function(){
				var courseCode = $(this).val();

				$.ajax({
					url: "load_cunit.php",
					method: "POST",
					data: {course_code:courseCode},
					dataType: "Text",
					success:function(data){
						$('#state').html(data);
					}
				});
			});
		});
	</script>
</body>
</html>