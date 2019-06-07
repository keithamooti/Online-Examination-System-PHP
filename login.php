<?php
	include 'db/db.php';
	session_start();
	
	if(isset($_POST['login'])){
		$email    = addslashes($_POST['email']);
		$password = $_POST['password'];
		
		if($email== "" || $password== ""){
			echo "<span class='text-danger'>All fields required</span>";
			exit();
		}else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){ 
			echo "<center><font face='Verdana' size='2' color=red>Invalid email</font></center>";
		}
		else{
			$password_encrypt = sha1($password);
				$query = mysqli_query($con,"SELECT * FROM `login` WHERE email = '$email' AND password = '$password_encrypt' limit 1");
				if (mysqli_num_rows($query) > 0) {
					$login = mysqli_fetch_array($query);
					$q = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM users WHERE email = '".$login['email']."'"));
					$_SESSION['email'] = $email;
					echo '<script>window.location = "student/index.php"</script>';
					exit();
				}else{
					echo "<span class='text-danger'>Incorrect email or password</span>";
					exit();
				}
			


		}
		
	}

	if (isset($_POST['admin'])) {
	  	$email    = addslashes($_POST['email']);
		$password = $_POST['password'];
		
		if($email== "" || $password== ""){
			echo "<span class='text-danger'>All fields required</span>";
			exit();
		}else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){ 
			echo "<center><font face='Verdana' size='2' color=red>Invalid email</font></center>";
		}
		else{
			$password_encrypt = sha1($password);
				$query = mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$email' AND password = '$password' limit 1");
				if (mysqli_num_rows($query) > 0) {
					$login = mysqli_fetch_array($query);
					header('location:admin/index.php');
					exit();
				}else{
					echo "<span class='text-danger'>Incorrect email or password</span>";
					exit();
				}
			


		}
	  }    
?>