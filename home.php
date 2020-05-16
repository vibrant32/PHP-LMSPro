<html lang="en">
<head>
<title>home page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="w3.css">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear" style="padding-bottom: 16px"> 
    <div class="fl_left">
      <ul>
        <li><h6><i class="fa fa-phone"></i>(+91)8412970821</h6></li>
        <li><h6 style="text-transform: lowercase;"><i class="fa fa-envelope-o"></i>dhasyashodeep32@gmail.com</h6></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="home.php"><h6><i class="fa fa-lg fa-home"></h6></i></a></li>
        <li><a href="login.php"><h3>Sign in</h3></a></li>
        <!--<li><a href="#">Register</a></li>-->
      </ul>
    </div>
   </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear" style="padding-bottom: 13px"> 
    <div id="logo" class="fl_left">
      <h1 style="font-size: 36px"><a href="index.html"><strong>GPAN Library</strong></a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <!--<li><strong>Aliquet:</strong><br>
          +00 (123) 456 7890</li>-->
        <li><strong>Contact Us:</strong><br>
          (+91)8412970821</li>
      </ul>
    </div>
   </header>
</div>
<div class="wrapper row2 w3-orange">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
      <li class="active"><a href="index.html w3-hover-black">Home</a></li>
      <li><a class=" w3-hover-black" href="#">About Us</a></li>
    </ul>
  </nav>
</div>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
  height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.overlay::after {
    color: inherit;
    background-color: rgba(0,0,0,.75);
}
</style>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/book.jpg');">
  <article id="pageintro" class="hoc clear"> 
    <h3 class="heading">LIBRARY MANAGEMENT SYSTEM</h3>
    <p> This the ideal choice for your organization and the best online education system. Join Now for using awesome privileges.</p>
    <footer><a class="btn" onclick="document.getElementById('modal-wrapper').style.display='block'">Register Now</a></footer>
     </article>
</div>
<div id="modal-wrapper" class="modal">
<form class="modal-content animate w3-card-24 w3-round-xlarge" action="" method="POST">        
<div class="imgcontainer">
  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h1 style="text-align:center;color: purple">Sign up</h1>
    </div>

    <div class="w3-container">
    <input type="text" placeholder="Enter Name" name="name" class="" style="color: black" required="">
    <input type="number" placeholder="Enter Mobile Number" name="phonenumber" style="width: 90%;padding-left: 20px;margin-left: 26px;padding-bottom: 20px;color: black" required="" >
    <input type="text" placeholder="Enter Address" name="address" class="" style="color: black" required="">
    <input type="text" placeholder="Enter Username" name="username" class="" style="color: black" required="">
    <input type="password" placeholder="Enter Password" name="password" class="" style="color: black" required=""> <br><br>       
    <center><input type="submit" name="submit" class="w3-btn w3-purple w3-hover-black w3-round-xxlarge w3-text-sand" style="width: 20%">
    <input type = "submit" name = "Button" value="Clear" class="w3-btn w3-purple w3-hover-black w3-round-xxlarge w3-text-sand" style="width: 20%"><center>
      <!--<input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>-->
    </div>
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<!---------------------------------->

<div class="wrapper row3">
  <figure class="hoc clear"> 
    <ul class="nospace group logos">
      <li class="one_quarter first"><a href="#"><img src="images/demo/small4.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/small1.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/small2.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/small3.jpg" alt=""></a></li>
    </ul>
  </figure>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="heading">Library Facts</h6>
      <p>The main goal of a library management information system is to store, organize, share and retrieve vital information needed to carry out daily operational functions of the library.</p>
      <p>LMS also facilitates the lending process by keeping records of items lent and borrowers' information.</p>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Popular Tags</h6>
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
</form>
</body>
</html>
<?php
  $conn = mysqli_connect("localhost","root","","lms");
    if(isset ($_POST['submit'])) {
      $name = $_POST['name'];
      $phonenumber = $_POST['phonenumber'];
      $address = $_POST['address'];
      $username = $_POST['username'];
      $password = $_POST['password'];   
      $query = "insert into stud_info(name,phoneno,address,username,password)values('$name',$phonenumber,'$address','$username','$password')";
      mysqli_query($conn, $query);
      echo "<script> alert('Welcome');window.location.href = 'student_dash.php';</script> ";
    }

?>