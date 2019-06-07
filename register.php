<?php 
	include 'db/db.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 	$name = addslashes($_POST['name']);
	 	$reg = addslashes($_POST['reg']);
	 	$email = addslashes($_POST['email1']);
	 	$course = addslashes($_POST['course']);
	 	$contact = addslashes($_POST['contact']);
	 	$password = addslashes(sha1($_POST['password1']));

	 	if($email== "" || $password== "" || $name== "" || $reg== "" || $course== "" || $contact== ""){
			echo "<span class='text-red'>All fields required</span>";
			exit();
		}else{
			//check whether email exist
			$query = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' limit 1");
			if (mysqli_num_rows($query) > 1) {
				echo "<span class='text-green'>Account already exists</span>";
			}
			else{
				//save data to the database
				$insert = mysqli_query($con,"INSERT INTO users(name,reg,email,course,contact) VALUES ('$name','$reg','$email','$course','$contact')") or die("Failed ".mysqli_error($con));
				$insert2 = mysqli_query($con,"INSERT INTO login (email,password) VALUES ('$email','$password')");

				if ($insert) {
					header('Location:index.php');
					exit();
				}else{
					echo "<span class='text-red'>Registration Failed</span> ".mysqli_error($con);
					exit();
				}
			}	
		}
	 } 
?>