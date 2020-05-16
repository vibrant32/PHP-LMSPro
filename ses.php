<?php
session_start();
$p=$_SESSION['finaluser'];
	$conn = mysqli_connect("localhost","root","","lms"); 	
	$query = "select username from stud_info where username = '$p' ";
	$result = mysqli_query($conn, $query);
	while ($res = mysqli_fetch_assoc($result)) 
	{
		$a = $res['username'];
	}
	if(!isset($a))
	{
		mysqli_close($conn);		
		header('Location: login.php');
	}
	if(!isset($p))
	{
		mysqli_close($conn);		
		header('Location: login.php');
	}
?>