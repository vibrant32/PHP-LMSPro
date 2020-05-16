<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	$id = $_GET['Id'];
	$query = "update request_for_book set Status = 'Delivered' where id = '$id'";
	$result = mysqli_query($conn, $query);
	echo "<script>window.location.href='viewrequest.php';</script>";
?>