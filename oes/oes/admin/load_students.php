<?php 
	include 'db/db.php';
	$output = '';

	function output($con){
		$query = mysqli_query($con,"SELECT * FROM users WHERE course='".$_POST['course_code']."'");
		//$output = '<h4 class="mb-1 fw-bold">Course Units</h4>';
		$id = 0;
		while ($row = mysqli_fetch_array($query)) {
			//$output = '<h4 class="mb-1 fw-bold">Course Units</h4>';
			$id++;
			$output .= '<tr>';
			$output .= '<td>'.$id.'</td>';
			$output .= '<td>'.$row['name'].'</td> <td">'.$row['reg'].'</td> <td">'.$row['course'].'</td>';
			$output .= '';
			$output .= '';
			$output .= '</tr';

		}
	}
	
	echo '
		<div class="table-responsive">
			<table id="basic-datatables" class="display table table-striped table-hover" >
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Course</th>
						<th>RegNo.</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>'
					.$output.							
				'</tbody>
			</table>
		</div>

	';
	//echo $output;
?>