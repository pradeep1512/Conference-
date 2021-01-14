<!DOCTYPE html>
<html>
<head>

<style type="text/css">
		


body{
	background: #1E1F25;
}
.nav ul{
	float: right;
}
.footer-social-icons li{
	display: inline;
	padding: ;
  text-transform: uppercase;
  cursor: pointer;
	min-width: 80px;
	margin-left: -0.5em;
	margin-right: 0.5em;
}
.footer-menu-one li{
	display: inline;
	padding: ;
  text-transform: uppercase;
  cursor: pointer;
	min-width: 80px;
	margin-left: -0.5em;
	margin-right: 0.5em;
}
.footer-menu-two li{
	display: inline;
	padding: ;
  text-transform: uppercase;
  cursor: pointer;
	min-width: 80px;
	margin-left: -0.5em;
	margin-right: 0.5em;
	margin-top: -2em;
}

.nav li{
	display: inline;
	padding: 1em 1em 1.1em;
  text-transform: uppercase;
  cursor: pointer;
	min-width: 80px;
	margin: auto;
}
li a{
	text-decoration: none;
	  color: #fff;

}
li:hover {
  background-image: url("button.png");
  background-size:cover;
  color: #27262c;
  animation: spring 300ms ease-out;
  text-shadow: 0 -1px 0  #0ebeca ;
	font-weight: bold;
}
li:active {
  transform: translateY(5px);
}

@keyframes spring {
  15% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.2, 1.1);
  }
  40% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(0.95, 0.95);
  }
  75% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.05, 1);
  }
  100% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1, 1);
  }
 
  
}
	</style>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://fontawesome.com/icons?d=gallery&s=brands">
	<link rel="stylesheet" type="text/css" href="img.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<script src="https://kit.fontawesome.com/c0cc844871.js"></script>
	<link rel="shortcut icon" type="image/jpeg" href="logo.jpeg">


</head>
<body>

<div>
		
		<nav class="nav" style="float: right;width: 100% ;line-height: 3em;z-index: 100;margin: 0em 2em 2em 2em;height: 5em;" >
			<img src="logo.jpeg" style="height: 100px;width: 100px;float: left;margin:0px 0px 0px 80px ;border-radius: 50px;border-style: solid;border-color: #a0bda8;">
			<ul style="margin-top: 30px;">	
				<li><a href="final.html" >home</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="Manager.html">Manager</a></li>
				<li><a href="reg.html">Registration</a></li>
				<li><a href="aboutus.html">About us</a></li>
			</ul>
		</nav>
</div>

<!-- fetching data of login page  --->
<style type="text/css" >
	td,th{
		padding:10px;
		text-align: center;
	}

</style>



<?php

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "pradeep";
$password = "pradeep123";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Pid,P_First_Name,P_Last_Name,P_Email,P_Topic,P_Username,P_Password FROM Conference_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table  cellspacing="20px" border="1"  cellpadding="15px"  style="text-align=center;color:#fff;font-size:20px; "><tr><th>Pid</th><th>P_First Name</th><th>P_Last Name</th><th>P_Email</th><th>P_Topic</th><th>P_Username</th><th>P_Password</th></tr>';


    while($row = $result->fetch_assoc()) {
      echo '<tr><td>'.$row["Pid"].'</td><td>'.$row["P_First_Name"].'</td><td>'.$row["P_Last_Name"].'</td><td>'.$row["P_Email"].'</td><td>'.$row["P_Topic"].'</td><td>'.$row["P_Username"].'</td><td>'.$row["P_Password"].'</td></tr>';
    }

    echo '</table>';

} else {
    echo '0 results';
}

$conn->close();


?>

<!--- End of Php --->

<div class="footer-main-div" style="display: flex;flex-direction: column;justify-content: center;align-items: center; ">
	<div class="footer-social-icons">
			<ul>
				<li style="background:blue"><a href="https://www.facebook.com/rsaconference/" target="blank"><i class="fab fa-facebook-f" style="font-size: 30px;color:#d8f0de; "></i></i></a></li>
				<li style="background: #ca0949 "><a href="https://www.instagram.com/explore/tags/conference/" target="blank"><i class="fab fa-instagram" style="font-size: 30px; color: #d8f0de;"></i></a></li>
				<li style="background:#1da1f2"><a href="https://twitter.com/hashtag/conference?lang=en" target="blank"><i class="fab fa-twitter" style="font-size: 30px; color: #d8f0de"></i></a></li>
				<li style="background:#fffc00"><a href="https://www.cru.org/us/en/digitalministry/training/snapchat/snapchat-for-conferences.html" target="blank"><i class="fab fa-snapchat-ghost" style="font-size: 30px;color:#d8f0de"></i></a></li>			
			</ul>		
		</div>

	<div class="footer-menu-one">
			<ul>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="final.html">Home</a></li>
				<li><a href="aboutus.html">About us</a></li>
				<li style=" margin-left:-1em;margin-right: -1em; "><a href="">Location</a></li>
				<li ><a href="">Contact us</a></li>
			</ul>
	</div>

	<div class="footer-menu-two" >			
			<ul>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="https://www.kotobee.com/blog/writers-conferences-2019/">blog</a></li>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="gallery.php">Gallery</a></li>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="https://events.wan-ifra.org/events/world-news-media-congress-2019">News</a></li>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="https://www.warc.com/EventReports">Media</a></li>
			</ul>	
	</div>

	
</div>	
<div class="footer-bottom">
		<center><span style="color:#fff;">© Copyright Confomatch 2019</span></center>
		<center><span style="color: #fff;">Design by<a href="">Group of Confomatch</a></span></center>
</div>

</body>
</html>