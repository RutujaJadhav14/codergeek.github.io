<?php
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
$insert=false;
if(isset($_POST['Name'])){

$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username,$password);
if(!$con){
die("connection to this database failed due to".mysqli_connect_error());
}
echo'<p style="color: white; text-align: center"><b> Thank You!!</b></p>';
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$sql="INSERT INTO `register`.`table1` (`Name`, `Email`, `Message`, `dt`) VALUES ('$Name', '$Email', '$Message', current_timestamp());";
//echo $sql;
if($con->query($sql)==true){
//echo"Successfully inserted";
$true=true;
}
else{
echo"ERROR:$sql <br> $con->error";

}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<title>Miniproject of WDL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {background-image: url('images/BG2.jpg'); font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

</style>
<body>       

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
<div style="background-image: url('images/bt1.jpeg');">
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>{CoderGeeks}</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">GOALS</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">OUR TEAM</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">PACKAGES</a>

    <a href="#demo" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">DEMO LECTURES</a> 
<a href="#register" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">REGISTRATION</a> 
<a href="#login" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">CONTACT</a>
 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name=CoderGeeks</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo w3-text-white"><b><i>Coder Geeks</i></b></h1>
    <h1 class="w3-xxxlarge w3-text-white"><b>Coding Classes</b></h1>
    
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="images\c.jpg" style="width:100%" onclick="onClick(this)" >
      <img src="images\c1.jpg" style="width:100%" onclick="onClick(this)" >
      <img src="images\c2.jpg" style="width:100%" onclick="onClick(this)" >
    </div>

    <div class="w3-half">
      <img src="images\c4.jpg" style="width:100%" onclick="onClick(this)" >
      <img src="images\c5.jpg" style="width:100%" onclick="onClick(this)" >
      <img src="images\c6.jpg"  style="width:100%" onclick="onClick(this)" >
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-white"><b><i>GOALS</i></b></h1>
  
    <div class="w3-row-padding">
    <div class="w3-half">
      <img src="images\11.jpg" style="width:100%" onclick="onClick(this)">
      <img src="images\12.jpg" style="width:100%" onclick="onClick(this)">
     
    </div>

    <div class="w3-half">
      <img src="images\33.png"  style="width:100%" onclick="onClick(this)" >
      <img src="images\55.jpg"  style="width:100%" onclick="onClick(this)" >
     
    </div>
  </div>

  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-white"><b><i>OUR TEAM</i></b></h1>
 
    <p style="color:white;"><b>*The best team in the world.</b></p>
    
    <p style="color:white;"><b>*Our all things are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="images\T1.jpg"  alt="John" style="width:100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity"><b>CEO</b></p>
          <p>University of Columbia<br>Specialization in mobile and web computing<br>(28 years experience)</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="images\T2.jpg"  alt="Jani" style="width:100%">
        <div class="w3-container">
          <h3>Jani Doa</h3>
          <p class="w3-opacity"><b>Founder</b></p>
          <p>PHD degree from MIT university<br>Specialization in computer and network security<br>(22 years experience)</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="images\T3.jpg"  alt="Rohe" style="width:100%">
        <div class="w3-container">
          <h3>Rohe hoss</h3>
          <p class="w3-opacity"><b>CEO</b></p>
          <p>Rector of Virtual University of Delhi<br>Specialization in software engineering<br>(20 years experience)</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-white"><b><i>Packages</i></b></h1>
   
    <p style="color:white;"><b> **Prices for our course</b></p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-blue w3-center">
        <li class="w3-light-grey w3-xlarge w3-padding-32"><b>Basic</b></li>
        <li class="w3-padding-16">C programming</li>
        <li class="w3-padding-16">C++</li>
        <li class="w3-padding-16">C#</li>
        <li class="w3-padding-16">Java</li>
        <li class="w3-padding-16">Python</li>
<li class="w3-padding-16">CSS</li>
        <li class="w3-padding-16">
          <h2><b>Rs 5000</b></h2>
          <span class="w3-opacity">per student</span>
        </li>
       
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-blue w3-center">
        <li class="w3-light-grey w3-xlarge w3-padding-32 ">Pro</li>

<li class="w3-padding-16">Advanced Java</li>
        <li class="w3-padding-16">Machine learning</li>
        <li class="w3-padding-16">Artificial Intelligence</li>
        <li class="w3-padding-16">Advanced OS</li>
        <li class="w3-padding-16">Deep learning</li>
        <li class="w3-padding-16">Application Development</li>
        <li class="w3-padding-16">
          <h2>Rs 8000</h2>
          <span class="w3-opacity">per student</span>
        </li>
      
      </ul>
    </div>
  </div>
  <!--demo -->
<div class="w3-container" id="demo" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-white"><b>Demo Lectures</b></h1>
   
<video controls width="500" height="200" >
<source src="video\1.mp4" type="video/mp4">
</video>

<h4 class="w3-xlarge w3-text-white"><b><i>#About Python</i></b></h4>
<video controls width="500" height="200" >
<source src="video\2.mp4" type="video/mp4">
</video>
<h4 class="w3-xlarge w3-text-white"><b><i>#About Machine Learning</i></b></h4>

<video controls width="500" height="200" >
<source src="video\3.mp4" type="video/mp4">
</video>

<h4 class="w3-xlarge w3-text-white"><b><i>#About Website</i></b></h4>
<video controls width="500" height="200" >
<source src="video\4.mp4" type="video/mp4">
</video>
<h4 class="w3-xlarge w3-text-white"><b><i>#About Java</i></b></h4>
<!-- register -->
  <div class="w3-container" id="register" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-white"><b><i>Registration</i></b></h1>

  <h5 class="w3-xlarge w3-text-white"><b><i>Register here and fill the details :)</i></b></h5>

 <form action="insert.php" method="post" >
      <div class="w3-section">
        <h5 class="w3-xlarge w3-text-white"><b><label><b>Name</b></label></i></b></h5>
        <input class="w3-input w3-text-black w3-border" type="text" placeholder="Enter Your Name" name="Name" required>
      </div>
<div class="w3-section">
        <h5 class="w3-xlarge w3-text-white"><b><i><label><b>Gender</b></label></i></b></h5>
        <input class="w3-input w3-border" type="radio" name="Gender" value="m" required><h4 style="color:white;">Male</h4>
<input class="w3-input w3-border" type="radio" name="Gender" value="f" required><h4 style="color:white;">Female</h4>
<input class="w3-input w3-border" type="radio" name="Gender" value="o" required><h4 style="color:white;">Others</h4>
      </div>
      <div class="w3-section">
         <h5 class="w3-xlarge w3-text-white"><b><label><b>Email</b></label></i></b></h5>
        <input class="w3-input w3-border" type="email" placeholder="Enter Your Email" name="Email" required>
      </div>
<div class="w3-section">
        <h5 class="w3-xlarge w3-text-white"><b><label><b>Contact No.</b></label></i></b></h5>

        <input class="w3-input w3-border" type="number" placeholder="Enter Your Contact No." name="Contact" required>
      </div>
      <div class="w3-section">
        <h5 class="w3-xlarge w3-text-white"><b><label><label><b>Your Package</b></label></i></b></h5>
        <input class="w3-input w3-border" type="text" placeholder="Enter Your Package" name="Package" required>
      </div>
 <div class="w3-section">
           <h5 class="w3-xlarge w3-text-white"><label><b>Payment Details</b></label></i></h5>
        <input class="w3-input w3-border" type="text" placeholder="Enter Your Payment Details" name="Payment" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom">submit</button>
    </form>  
  </div>
  <!-- Login -->
<div class="w3-container" id="login" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-white"><b><i>Login</i></b></h1>

   
 <h5 class="w3-xlarge w3-text-white"><b><i>Please login here:</i></b></h5>


    <form action="login.php" method="post">
      <div class="w3-section">
        <h5 class="w3-xlarge w3-text-white"><b><i><label>Email</label></i></b></h5>
        <input class="w3-input w3-border" type="email"  placeholder="Enter Your  Email" name="uname" required>
      </div>
      <div class="w3-section">
         <h5 class="w3-xlarge w3-text-white"><b><i><label>Password</label></i></b></h5>
        <input class="w3-input w3-border" type="password"  placeholder="Enter Your Password" name="pass" required>
      </div>
      
      <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom"><b>Login</b></button>
    </form>
  
  </div>



  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-white"><b><i>Contact</i></b></h1>


  <h5 class="w3-xlarge w3-text-white"><b>Do you want us to study new courses? Fill out the form with the details :) We always help you</b></h5>

    <form action="contact.php" method="post">
      <div class="w3-section">
         <h5 class="w3-xlarge w3-text-white"><label><h5><b>Name</b></h5></label></h5>
        <input class="w3-input w3-border" type="text"  placeholder="Enter Your Name" name="Name" required>
      </div>
      <div class="w3-section">
         <h5 class="w3-xlarge w3-text-white"><label><h5><b>Email</b></h5></label></h5>
        <input class="w3-input w3-border" type="email"  placeholder="Enter Your Email" name="Email" required>
      </div>
      <div class="w3-section">
        <h5 class="w3-xlarge w3-text-white"><label><h5><b>Message</b></h5></label></h5>
        <input class="w3-input w3-border" type="text"  placeholder="Enter Your Message" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom"><b>Send Message</b></button>
    </form>
  
  </div>
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">CoderGeeks.com</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;

}



</script>

</body>

</html>