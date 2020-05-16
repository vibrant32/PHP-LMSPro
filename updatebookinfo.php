<?php 
error_reporting(0);
	$conn = mysqli_connect("localhost","root","","lms");
	$id = $_GET['id'];
	$query = "select nameofbook,quantity,description from bookmaster where id = '$id'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
 ?>
<html>
	<head>
		<title>bookmaster</title>
		<link rel="stylesheet" type="text/css" href="w3.css">
</head>
<style type="text/css">
	body {
		background: url(bg8.png);
		background-size: 1535px, 820px; 
	}
</style>
<body>
	<form class="w3-container" action="" method="POST">
<center>
	<br/><br/><br/><br/><br/><br/>
		<div class="w3-card-24 w3-purple w3-round-large w3-container" style="width:40%; padding-top:5%; padding-bottom:23%; height:40%;margin-top:-2%;"><b>Update Book Info</b> <br>
				<b> Name of Book  </b>
					<input class="w3-round-large" type="text" name="nameofbook" value="<?php echo"$row[nameofbook]"; ?>" placeholder=" Enter Bookname here" style="background-color: white; color: black" required> <br> <br>

					<b> Quantity  </b>
					<input class="w3-round-large" type="text" name="quantity" value="<?php echo"$row[quantity]"; ?>" placeholder=" Enter quantity here" style="background-color: white; color: black" required> <br> <br>
				
					<b> Description  </b>
					<input class="w3-round-large" type="text" name="description" value="<?php echo"$row[description]"; ?>" placeholder=" Enter description here" style="background-color: white; color: black" required> <br> <br>	
					
				
				<input type="submit" name="submit" value = "Update" class="w3-btn w3-hover-black w3-round-xlarge w3-text-sand w3-card-24" style="width: 18%">
				<input type="submit" name="submit" value="Back" class="w3-btn w3-hover-black w3-round-xlarge w3-text-sand" style="width: 18%"><br><br>
			</div>
		</center>
	</form>
	</body>
</html>
<?php 
	
	$conn = mysqli_connect("localhost","root","","lms");
		if(isset ($_POST['submit'])) {
			$nameofbook = $_POST['nameofbook'];
			$quantity = $_POST['quantity'];
			$description = $_POST['description'];		
			$query = "update bookmaster SET nameofbook='$nameofbook',quantity='$quantity',description='$description' where id='$id'";
			mysqli_query($conn, $query);
			echo "<script> alert('Successfully updated');window.location.href = 'displaybooks.php';</script> ";
		}
?>
