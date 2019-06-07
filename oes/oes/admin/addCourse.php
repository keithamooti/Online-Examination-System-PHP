<?php 
	$msg = '';
	include 'db/db.php';
	//to add course
	if (isset($_POST['submit'])) {
	 	$cname = addslashes($_POST['cname']);
	 	$code = addslashes($_POST['code']);
	 	$faculty = addslashes($_POST['faculty']);
	 	$period = addslashes($_POST['period']);

	 	$add = mysqli_query($con,"INSERT INTO courses(course_name,course_code,faculty,period) VALUES('$cname','$code','$faculty','$period') ");
	 	if ($add) {
	 		$msg =  '<p style = "color: green;">Course Added</p>';

	 	}else{
	 		$msg = '<p style = "color: red;">Course Not Added</p>';
	 	}
	 } 
	 //to add course unit
	 if (isset($_POST['addunit'])) {
	 	$unit_name = addslashes($_POST['unit_name']);
	 	$unit_code = addslashes($_POST['unit_code']);
	 	$year = addslashes($_POST['year']);
	 	$course = addslashes($_POST['course']);
	 	$semester = addslashes($_POST['semester']);

	 	$insert = mysqli_query($con,"INSERT INTO course_unit(unit_name,unit_code,unit_year,unit_course_id,semester) VALUES ('$unit_name','$unit_code','$year','$course','$semester') ");
	 	if ($insert) {
	 		$msg =  '<p style = "color: green;">Course Unit Added</p>';
	 		echo '<script>
	 				swal("Good job!", "You clicked the button!", {
						icon : "success",
						buttons: {        			
							confirm: {
								className : \'btn btn-success\'
							}
						},
					});
	 		</script>';
	 	}else{
	 		$msg = '<p style = "color: red;">Course Unit Not Added</p>';
	 	}
	 }

	 function load_courses($con){
	 	$output = '';
	 	$query = "SELECT * FROM courses ORDER BY course_name";
	 	$result = mysqli_query($con,$query);
	 	while ($row = mysqli_fetch_array($result)) {
	 		$output .= '<option value = "'.$row["course_code"].'">'.$row["course_name"].'</option>';
	 	}
	 	return $output;
	 }

	 function courseunit($con){
	 	$output = '';
	 	$query = mysqli_query($con, "SELECT * FROM course_unit");
	 	while ($row = mysqli_fetch_array($query)) {
	 		$output .= '<div class = "row">';
	 		$output .= '<div class = "col-sm-4">'.$row['unit_code'].'</div>';
	 		$output .= '<div class = "col-sm-8">'.$row['unit_name'].'</div>';
	 		$output .= '</div>';
	 	}
	 	return $output;
	 }
?>