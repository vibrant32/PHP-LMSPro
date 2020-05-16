<?php 
error_reporting(0);
	$conn = mysqli_connect("localhost","root","","lms");
	$id = $_GET['id'];
	$query = "select * from bookmaster where id = '$id'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	$query2 = "delete from bookmaster where id='$id'";
	$result1 = mysqli_query($conn,$query2);
	echo "<script> alert('Successfully deleted');window.location.href = 'displaybooks.php';</script> "; 
 
?>