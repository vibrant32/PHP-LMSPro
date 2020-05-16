<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	$id = $_GET['Id'];
	$query = "update request_for_mag set status = 'Delivered' where id = '$id'";
	$result = mysqli_query($conn, $query);
	echo "<script>window.location.href='viewmagrequest.php';</script>";
?>