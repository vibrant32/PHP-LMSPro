<?php 
	//include ('ses.php');
session_start();
if(isset($_SESSION['finaluser']))
{echo "<script>alert('welcome to Adding Magazine Page!');</script>";}
else
{echo "<script>alert('GET OUT'); window.location.href='login.php';</script>";}
 ?>
<html>
	<head>
		<title>add magazine</title>
		<link rel="stylesheet" type="text/css" href="w3.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear" style="padding-bottom: 16px"> 
    <div class="fl_left">
      <ul>
        <li><h5><i class="fa fa-phone"></i> (+91)8412970821</h5></li>
        <li><h6 style="text-transform: lowercase;"><i class="fa fa-envelope-o"></i>dhasyashodeep32@gmail.com</h6></li>
        <li><h6><i class="fa fa-user"></i><?php echo "Current User - ".$_SESSION['finaluser']; ?></h6></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><h4><a href="home.php"><i class="fa fa-lg fa-home "></i></a></h4></li>
      </ul>
    </div>
   </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear" style="padding-bottom: 13px"> 
    <div id="logo" class="fl_left">
      <h1 style="font-size: 36px"><a>Adding a New Magazine</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
       <ul class="nospace inline">
        <li><strong>Contact Us:</strong><br>
          (+91)8412970821</li>
      </ul>
    </div>
   </header>
</div>
<nav class="w3-sidenav w3-black w3-animate-left" style="display:none;z-index:5">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large w3-hover-orange">Close</a>
  <a href="viewmagrequest.php" class="w3-hover-orange w3-black">View Magazine Requests</a>		
  <a href="displaybooks.php" class="w3-hover-orange w3-black">Check Available Books</a>		
  <a href="bookmaster.php" class="w3-hover-orange w3-black">Book Master</a>
  <a href="addingmag.php" class="w3-hover-orange w3-black">Add Magazine</a>
  <a href="visitorstud.php" class="w3-hover-orange w3-black">Visitor Student</a>		
  <a href="logout.php" class="w3-hover-orange w3-black">Logout</a>				
</nav>
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>
<div class="w3-container w3-black">
<span class="w3-opennav w3-xxlarge w3-orange" onclick="w3_open()"><b>=</b></span>
</div>       
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>
<div class="wrapper row2 w3-black">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
    </ul>
   </nav>
</div>
<style type="text/css">
	.overlay::after {
    color: inherit;
    background-color: rgba(0,0,0,.75);
	}
	.login-box {
	height: 520px;
    background: rgba(0, 0, 0, 1.5);
 	}   
</style>
	<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/book.jpg');">
  	<article id="pageintro" class="hoc clear" style="padding-bottom: 480px"> 
  	<div class="login-box">
  		<form action="" method="POST">
        	<h1>Adding Magazine</h1>
           	<p>Name of Magazine</p>
            <input type="text" name="nameofmag" placeholder="Enter magazine name here" required="">
            <p>Quantity</p>
            <input type="text" name="quantity" placeholder="Enter quantity here" required="">
            <p>Description</p>
            <input type="text" name="description" placeholder="Enter description here" required="">
            <p>Price</p>
            <input type="text" name="price" placeholder="Enter Price here" required="">
            <input type="submit" name="submit" value="add" class="w3-purple w3-hover-black">
 		</form>
 		</div>
	</article>
</div>
<div class="wrapper row3">
  <figure class="hoc clear"> 
    <ul class="nospace group logos">
      <li class="one_quarter first"><a href="#"><img src="images/demo/small1.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/small2.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/small3.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/small4.jpg" alt=""></a></li>
    </ul>
  </figure>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="heading">Library Facts</h6>
      <p>Library management is a sub-discipline of institutional management that focuses on specific issues faced by libraries and library management professionals. Library management encompasses normal managerial tasks, as well as intellectual freedom and fundraising responsibilities.</p>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Popular Hashtags</h6>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">#Read</a></li>
          <li><a href="#">#learn</a></li>
          <li><a href="#">#bookislife</a></li>
          <li><a href="#">#booklibrarian</a></li>
          <li><a href="#">#booksarewealth</a></li>
       	</ul>
      </nav>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">RB tech Services</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Final Build</a></h2>
        <time class="font-xs" datetime="20159-05-25">Friday, 25<sup>th</sup> May 2019</time>
        <p>Website is intended for the Commercial use only. No one has rights to copyright except the Publisher[&hellip;]</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Modules Used</h6>
      <ul class="nospace linklist">
        <li><a href="#">Login and Registration</a></li>
        <li><a href="#">Student Book Request</a></li>
        <li><a href="#">Admin Book Issuing</a></li>
        <li><a href="#">Visitor Students</a></li>
      </ul>
    </div>
    </footer>
</div>
<div class="wrapper row5">
 <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Dhas Yashodeep</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">YD Templates</a></p>
    </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<div id="dropDownSelect1"></div>
 <script src="js/main.js"></script>
</body>
</html>
<?php 
	$conn = mysqli_connect("localhost","root","","lms");
		if(isset ($_POST['submit'])) {
			$nameofmag = $_POST['nameofmag'];
			$quantity = $_POST['quantity'];
			$description = $_POST['description'];
			$price = $_POST['price'];		
			$query = "insert into add_magazine(nameofmag,quantity,description,price,status)values('$nameofmag','$quantity','$description','$price','')";
			mysqli_query($conn, $query);
			echo "<script> alert('Magzine Added!');</script> ";
		}	
 ?>