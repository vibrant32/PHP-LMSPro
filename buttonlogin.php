<?php  
	$conn = mysqli_connect("localhost","root","","lms");
	if(isset($_POST['Submit'])) {
		$username = $_POST['username'];
		$finaluser = $username;	
		$password = $_POST['password'];
		$query = "select * from stud_info where username = '$username' AND password = '$password' ";
		$semifinal = mysqli_query($conn, $query);
		$final = mysqli_num_rows($semifinal);
		if($username == 'Admin' AND $password =='adminroot') {
			$_SESSION['finaluser'] = $username;
			echo "<script> alert('Successfully logged in!');window.location.href = 'admin_dash.php';</script>";
		}
		elseif ($final == 1) {
			$_SESSION['finaluser'] = $username;
		 	echo "<script> alert('Successfully logged in!');window.location.href = 'student_dash.php';</script>";
		 }
		else {
		 echo "<script> alert('login unsuccessful please tryagain');window.location.href='login.php';</script>";
		 }
   	}
?>