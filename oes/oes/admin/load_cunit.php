<?php 
	include 'db/db.php';
	$output = '';

	
	$query = mysqli_query($con,"SELECT * FROM course_unit WHERE unit_course_id='".$_POST['course_code']."'");
	//$output = '<h4 class="mb-1 fw-bold">Course Units</h4>';
	while ($row = mysqli_fetch_array($query)) {
		//$output = '<h4 class="mb-1 fw-bold">Course Units</h4>';
		$output .= '<div class = "row">';
		$output .= '<div class = "col-sm-4">'.$row['unit_code'].'</div>';
		$output .= '<div class = "col-sm-8">'.$row['unit_name'].'</div>';
		$output .= '</div>';

	}
	echo $output;
	//echo $output;
?>