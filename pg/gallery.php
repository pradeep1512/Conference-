<!DOCTYPE html>
<html>
<head>
	<!-------------meta elements----------------->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-------------meta elements----------------->



<!-------------favicons----------------->
<!-- inserting fav-icon  -->
	<link rel="shortcut icon" type="image/png" href="logo.jpeg">
	
<!-------------favicons----------------->




<!---------------------css elements------------------------------>


<style type="text/css">

	


/* The slider div styles */



/* end image position */



/*	start navigation bar */	
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
 /* navigation bar*/


		 /* The pagination container div: */
#pagination {
position:relative;
margin:40px 0;
}
 /* The class to hide the navigation if only one page: */
.display-none {
display:none;
}

/* The navigation container: */
#pageNav {
position:relative;
margin:30px 0;
}

/* The navigation buttons: */
#pageNav button {
background:#333;
color:#fff;
padding:8px 12px;
margin:5px 5px 5px 0;
border:0;
font-size:1em;
cursor:pointer;
text-decoration:none;
}

/* The active class to style the current page button: */
.active {
text-decoration:underline!important;
}
 /* The pagination container div: */
#pagination {
position:relative;
margin:40px 0;
}
 /* The image container class: */
.img-container {
width:31%;
padding:1%;
float:left;
left:0;
}
 /* The image container inner container: */
.img {
height:0;
padding:0;
padding-bottom:100%;
overflow:hidden;
display: flex;
}
 /* The image itself: */
.img img {
width:195%;
height:auto;
transform:translate(-25%,-7%);
-moz-transform:translate(-25%,-7%);
-webkit-transform:translate(-25%,-7%);
-ms-transform:translate(-25%,-7%);
}
 .clearfix {
clear:both;
}
 /* MEDIA QUERIES */

/* One column */
@media only screen and (max-width: 360px) {
.img-container {
width:98%;
padding:2% 1%;
}
}

/* Two columns */
@media only screen and (min-width: 360px) and (max-width: 900px) {
.img-container {
width:48%;
padding:1%;
}
}


	</style>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://fontawesome.com/icons?d=gallery&s=brands">
	<link rel="stylesheet" type="text/css" href="img.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<script src="https://kit.fontawesome.com/c0cc844871.js"></script>
	<link rel="shortcut icon" type="image/jpeg" href="logo.jpeg">
</head>
<body>

<!-- Starting navigation bar -->
	<div>
		
		<nav class="nav" style="float: right;width: 100% ;line-height: 3em;z-index: 100;margin: 0em 2em 2em 2em;height: 5em;" >
			<img src="logo.jpeg" style="height: 100px;width: 100px;float: left;margin:0px 0px 0px 80px ;border-radius: 50px;border-style: solid;border-color: #a0bda8;">
			<ul style="margin-top: 30px;">	
				<li><a href="final.php">home</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="Manager.html">Manager</a></li>
				<li><a href="reg.html">Registration</a></li>
				<li><a href="aboutus.html">About us</a></li>
			</ul>
		</nav>
	</div>
	<a id="top"></a>

<!--Ending of navigation bar  -->





 <?php
$host = 'localhost'; // Host name
$username = 'pradeep'; // Username
$password = 'pradeep123'; // Password - usually empty for localhost server
$database = 'login'; // Name of the database containing our 'images' table

// Let's call our database connection variable $dbCon:

$dbCon = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$dbCon) {// If the database connection fails...
die('Connection failed: ' . mysqli_connect_error());// ... kill the connection and say 'Connection failed: ' followed by the error.
}
?> 



 <?php

////// FIRST WE SET UP THE TOTAL IMAGES PER PAGE & CALCULATIONS:
$per_page = 9;// Number of images per page, change for a different number of images per page

// Get the page and offset value:
if (isset($_GET['page'])) {
$page = $_GET['page'] - 1;
$offset = $page * $per_page;
}
// Otherwise we render the page and offset as non-existent:
else { $page = 0;
$offset = 0;
}

// Count the total number of images in the table ordering by their id's ascending:
$images = "SELECT count(id) FROM gallery ORDER by id ASC";
$result = mysqli_query($dbCon, $images);
$row = mysqli_fetch_array($result);
$total_images = $row[0];

// Calculate the number of pages:
if ($total_images > $per_page) {//If there is more than one page
$pages_total = ceil($total_images / $per_page);
$page_up = $page + 2;
$page_down = $page;
$display ='';//leave the display variable empty so it doesn't hide anything
}
else {// Else if there is only one page
$pages = 1;
$pages_total = 1;
$display = ' class="display-none"';//class to hide page count and buttons if only one page
}


echo '<div id="gallery">';// #gallery div to contain the gallery

 // DISPLAY THE IMAGES:
// Select the images from the table limited as per our $offset and $per_page total:
$result = mysqli_query($dbCon, "SELECT * FROM gallery ORDER by id ASC LIMIT $offset, $per_page");
while($row = mysqli_fetch_array($result)) {// Open the while array loop

// Define the image variable by retrieving the filename from the table:
$image=$row['path'];

// Then we echo our HTML for each image:
echo '<div class="img-container">';
echo '<div class="img">';

echo '<a href="image/'.$image.'">';
echo '<img src="image/'.$image.'">';
echo '</a>';

echo '</div>';// .img end
echo '</div>';// .img-container end

}// Close the while array loop

echo '</div>';// #gallery end

echo '<div class="clearfix"></div>';// The clearfix

 ////// THEN WE DISPLAY THE PAGE COUNT AND BUTTONS:


echo '<center><h2'.$display.'>Page '; echo $page + 1 .' of '.$pages_total.'</h2></center>';// Page out of total pages

$i = 1;// Set the $i counting variable to 1

echo '<center><div id="pageNav"'.$display.'>';// our $display variable will do nothing if more than one page

// Show the page buttons:
if ($page) {
echo '<a href="gallery.php"><button><<</button></a>';// Button for first page [<<]
echo '<a href="gallery.php?page='.$page_down.'"><button><</button></a>';// Button for previous page [<]
}

for ($i=1;$i<=$pages_total;$i++) {
if(($i==$page+1)) {
echo '<a href="gallery.php?page='.$i.'"><button class="active">'.$i.'</button></a>';// Button for active page, underlined using 'active' class
}

// In this next if statement, calculate how many buttons you'd like to show. You can remove to show only the active button and first, prev, next and last buttons:
if(($i!=$page+1)&&($i<=$page+3)&&($i>=$page-1)) {// This is set for two below and two above the current page
echo '<a href="gallery.php?page='.$i.'"><button>'.$i.'</button></a>'; }
}

if (($page + 1) != $pages_total) {
echo '<a href="gallery.php?page='.$page_up.'"><button>></button></a>';// Button for next page [>]
echo '<a href="gallery.php?page='.$pages_total.'"><button>>></button></a>';// Button for last page [>>]
}
echo '</div></center>';// #pageNav end




echo '<div class="clearfix"></div>';// The clearfix




?> 

<!-- Start of footer --> 
<a href="#top" style="float: right;margin-right: 10px;"><button style="font-size: 25px;"> ⬆ </button></a>
<div class="footer-main-div" style="display: flex;flex-direction: column;justify-content: center;align-items: center; ">
	<div class="footer-social-icons">
			<ul>
				<li style="background:blue"><a href="https://www.facebook.com/rsaconference/" target="blank"><i class="fab fa-facebook-f" style="font-size: 30px;color: #ffffff"></i></i></a></li>
				<li style="background: #ca0949 "><a href="https://www.instagram.com/explore/tags/conference/" target="blank"><i class="fab fa-instagram" style="font-size: 30px; color:#fff;"></i></a></li>
				<li style="background:#1da1f2 "><a href="https://twitter.com/hashtag/conference?lang=en" target="blank"><i class="fab fa-twitter" style="font-size: 30px; color:#ffffff ;"></i></a></li>
				<li style="background:#f4f711"><a href="https://www.cru.org/us/en/digitalministry/training/snapchat/snapchat-for-conferences.html" target="blank"><i class="fab fa-snapchat-ghost" style="font-size: 30px;color: #fff"></i></a></li>			
			</ul>		
		</div>

	<div class="footer-menu-one">
			<ul>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="final.html">Home</a></li>
				<li><a href="aboutus.html">About us</a></li>
				<li style=" margin-left:-1em;margin-right: -1em; "><a href="gallery.php">Gallery</a></li>
				<li ><a href="">Contact us</a></li>
			</ul>
	</div>

	<div class="footer-menu-two" >			
			<ul>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="https://www.kotobee.com/blog/writers-conferences-2019/">blog</a></li>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="">Gallery</a></li>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="https://events.wan-ifra.org/events/world-news-media-congress-2019">News</a></li>
				<li style=" margin-left:1em;margin-right: -1.5em;"><a href="https://www.warc.com/EventReports">Media</a></li>
			</ul>	
	</div>

	
</div>	
<div class="footer-bottom">
		<center><span style="color:#fff;">© Copyright Confomatch 2019 </span></center>
		<center><span style="color: #fff;">Design by<a href="aboutus.html">Group of Confomatch</a></span></center>
</div>

<!-- end of footer-->

</body>
</html>