<?php 
    //include ('ses.php');
session_start();
if(isset($_SESSION['finaluser']))
{echo "<script>alert('welcome to visitorstudent page');</script>";}
else
{echo "<script>alert('GET OUT'); window.location.href='login.php';</script>";}
 ?>
<html>
<head>
    <title>visitor students</title><br/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="w3.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="top">
<form action = "" method = "POST">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear" style="padding-bottom: 16px"> 
    <div class="fl_left">
      <ul>
        <li><h6><i class="fa fa-phone"></i>(+91)8412970821</h6></li>
        <li><h6 style="text-transform: lowercase;"><i class="fa fa-envelope-o"></i>dhasyashodeep32@gmail.com</h6></li>
        <li><h6><i class="fa fa-user"></i><?php echo "".$_SESSION['finaluser']; ?></h6></li>
      </ul>
    </div>
    <div class="fl_right">
    </div>
   </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear" style="padding-bottom: 13px"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html"><strong>Visitor Student Panel</strong></a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Contact Us:</strong><br>
          (+91)8412970821</li>
      </ul>
    </div>
   </header>
</div>
</div>
<nav class="w3-sidenav w3-black w3-animate-left" style="display:none;z-index:5">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large w3-hover-orange w3-black">Close</a>
  <a href="viewrequest.php" class="w3-hover-orange w3-black">View Book Requests</a>
  <a href="viewmagrequest.php" class="w3-hover-orange w3-black">View Magazine Requests</a>       
  <a href="displaybooks.php" class="w3-hover-orange w3-black">Check Available Books</a>      
  <a href="bookmaster.php" class="w3-hover-orange w3-black">Book Master</a>
  <a href="addingmag.php" class="w3-hover-orange w3-black">Add Magazine</a>
  <a href="logout.php" class="w3-hover-orange w3-black">Logout</a>               
</nav>

<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>
<div class="w3-container w3-black">
<span class="w3-opennav w3-xxlarge w3-orange" onclick="w3_open()"><b>=</b></span>
</div>  
<style type="text/css">
  .overlay::after {
    color: inherit;
    background-color: rgba(0,0,0,.75);
</style>

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
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/book.jpg');">
  <article id="pageintro" class="hoc clear"> 
    <!--<div class="row" style="margin-top:5%">
        <div class="col-sm-12">
            <div class="form-group">
                <span class="form-label"><b>Name Of  Student</b></span>
                    <select class="w3-form-control w3-round w3-large" name="name">
                        <option style="color: black">Select Name</option>
                            <?php
                                /*$conn=mysqli_connect("localhost","root","","lms");
                                $query1 = "select username from stud_info";
                                $result = mysqli_query($conn, $query1);
                                while ($row = mysqli_fetch_array($result)) {
                                    $username = $row['username'];
                                    echo "<option value='$username' name='$username'> $username</option>";
                                }*/
                                ?>
                            </select>
                        </div>

                    <div class="row" style="margin-top:5%">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <span class="form-label"> <b>  name of magazine </b> </span>
                            <select class="w3-form-control w3-round w3-large" name="nameofmag">
                                <option> Select Magazine name</option>
                                <?php
                                /*$conn=mysqli_connect("localhost","root","","lms");
                                $query2 = "select nameofmag from add_magazine";
                                $result2 = mysqli_query($conn, $query2);
                                while ($row = mysqli_fetch_array($result2)) {
                                    $mag = $row['nameofmag'];
                                    echo "<option value='$mag' name='$mag'> $mag    </option>";
                                }*/
                                ?>
                            </select>
                        </div>
	<div> Contact Number <input type="text" name="mobileno" required="" class="w3-round-large" placeholder="Enter Mobile Number here" style="width: 60%;color: black;background-color: white"> </div><br/><br/>
	<div class="form-group"> Class       
       <select class="form-control w3-round-large" name="class" style="width: 60%;color: black;background-color: white">
        <option value="1" name="1">Select Course</option>
        <option value="FYCM" name="FYCM">FYCM</option>
        <option value="SYCM" name="SYCM">SYCM</option>
        <option value="TYCM" name="TYCM">TYCM</option>
      </select></div><br/><br/>
	<div> Check In Time <input type="Time" name="checkin" class="w3-round-large" placeholder="Enter Check in time here" style="width: 60%;color: black;background-color: white" required=""> </div><br/><br/>
	<div> Check Out Time <input type="Time" name="checkout" class="w3-round-large" placeholder="Enter Check out time here" style="width: 60%;color: black;background-color: white" > </div><br/><br/>
	<div> Remark <input type="text" name="remark" class="w3-round-large" placeholder="Enter remark here" style="width: 60%;color: black;background-color: white" required=""> </div><br/><br/>
	       <input type="Submit" name="Submit" value = "Submit" class="w3-btn w3-hover-black w3-round-xxlarge w3-text-sand">
	       <input type="reset" name="Reset" value="Clear" class="w3-btn w3-hover-black w3-round-xxlarge w3-text-sand">
        </div>
        </div>
    </div>
</div>-->
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
      <h6 class="heading">Polar Tags</h6>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
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
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</form>
</body>
</html>


<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","lms");
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $query2 = "select username from stud_info where username='$name'";
    $user = mysqli_query($conn, $query2);
    while($row = mysqli_fetch_array($user)){
        $a = $row['username'];

    }
    	$magzine = $_POST['nameofmag'];
    	$mobileno = $_POST['mobileno'];
    	$class = $_POST['class'];
    	$checkin = $_POST['checkin'];
    	$checkout = $_POST['checkout'];
    	$remark = $_POST['remark'];
    	$query = "insert into visitorstudent(username,nameofmag,mobileno,year,checkin,checkout,remark)values('$a','$magzine','$mobileno','$class','$checkin','$checkout','$remark')";
    	mysqli_query($conn,$query);
    	echo "<script>alert('Entry Added Successfully');</script>";
	}
?>	