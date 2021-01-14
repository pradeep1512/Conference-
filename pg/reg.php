<!DOCTYPE html>
<html>
<head>
	<title>Registertion</title>
	<link rel="shortcut icon" type="image/jpeg" href="logo.jpeg">

	<style>
		
		body{
			margin: 0;
			padding: 0;
			background-image: url(background1.jpg);
			background-size: 100% 100%;

		}

		.title{
			text-align: center;
			padding: 50px 0 20px;
		}

		.title h1{
			margin: 0;
			padding: 0;
			color: deeppink;
			font-family: Calibri;
			letter-spacing: 3px;
			text-shadow: 2px 2px orchid;
			font-weight: bold;
		}

		.container{
			width: 60%;
			height: 700px;
			background: #fff;
			margin: 0 auto;
			border: 2px solid white;
			box-shadow: 0 15px 40px rgba(0,0,0,0.5);

		}

		.container .left{
			float: left;
			width: 50%;
			height: 700px;
			background: url(conference2.jpg);
			background-size: 100% 100%;
			box-sizing: border-box;
		}

		.container .right{
			float: right;
			width: 50%;
			height:700px;
			box-sizing: border-box;
		}

		.formbox{
			width: 100%;
			padding: 80px 40px;
			height: 700px;
			box-sizing: border-box;
			background: white;
			color: darkmagenta;
			font-weight: bold;
			font-size: 90%;
			font-family: times new roman;
		}

		.formbox input{
			width: 100%;
			margin-bottom: 15px;
		}

		.formbox input[type=text],
		.formbox input[type=password]{
			border: none;
			outline: none;
			border-bottom: 2px solid plum;
			height: 20px;
			font-size: 75%;
			color: 

		}

		.formbox input[type=text]:focus,
		.formbox input[type=password]:focus
		{
			border-bottom: 2px solid purple;
		}

		.formbox input[type=checkbox]{
			color: gray;
			font-size: 60%;
		}

		.formbox input[type=button]{
			border: none;
			outline: none;
			width: 100%;
			height: 60%;
			color: white;
			background-color: deepskyblue;
			font-weight: bold;
			font-size: 100%;
			border-radius: 20px;
			font-family:Calibri;
		}

		.formbox input[type=button]:hover{
			cursor: pointer;
			background-color: greenyellow;
		}



	</style>
</head>
<body>

		<div class="title"><h1>CONFERENCE REGISTRATION</h1></div>
		<div class="container">
			<div class="left"></div>
			<div class="right">
				<div class="formbox">
					<form method="POST" action="">
						 Pid
						<br>
						<input type="number" id="id" name="pii" placeholder="Pid" autocomplete="off">
						<br>
						<br>
						First Name
						<br>
						<input type="text" id="fname" name="fnam" placeholder="First Name">
						<br>
						<br>
						Last Name
						<br>
						<input type="text" id="lname" name="lnam" placeholder="Last Name">
						<br>
						<br>
						Email
						<br>
						<input type="text" id="email" name="eml" placeholder="Email">
						<br>
						<br>
						Topic
						<br>
						<input type="text" id="topic" name="top" placeholder="Topic">
						<br>
						<br>
						Username
						<br>
						<input type="text" id="uname" name="usname" placeholder="Username">
						<br>
						<br>
						Password
						<br>
						<input type="password" id="pwd" name="psname" placeholder="Password">
						<br>
						<br>
						Confirm Password
						<br>
						<input type="password" id="cpwd" name="conpass" placeholder="Password">
						<br>
						<br>
						
						<center>
							<input type="submit" id="button" name="submit" value="Submit" >
						</center>

					</form>
				</div>
			</div>
		</div>




<?php

include ("connection.php");



// REGISTER USER


  // receive all input values from the form
  $pid =  mysqli_real_escape_string($dbCon,$_POST['pii']);
  $fname = mysqli_real_escape_string($dbCon,$_POST['fnam']);
  $lname = mysqli_real_escape_string($dbCon,$_POST['lnam']);
  $email =  mysqli_real_escape_string($dbCon,$_POST['eml']);
  $topic =  mysqli_real_escape_string($dbCon,$_POST['top']);
  $username =  mysqli_real_escape_string($dbCon,$_POST['usname']);
  $password = mysqli_real_escape_string($dbCon,$_POST['psname']);
  $cpass =  mysqli_real_escape_string($dbCon,$_POST['conpass']);


$sql="insert into Conference_table
(Pid,P_First_Name,P_Last_Name,P_Email,P_Topic,P_Username,P_Password,P_Confirm_Password) values('{$dbCon->real_escape_string($_POST['pii'])}','{$dbCon->real_escape_string($_POST['fnam'])}','{$dbCon->real_escape_string($_POST['lnam'])}','{$dbCon->real_escape_string($_POST['eml'])}','{$dbCon->real_escape_string($_POST['top'])}','{$dbCon->real_escape_string($_POST['usname'])}','{$dbCon->real_escape_string($_POST['psname'])}','{$dbCon->real_escape_string($_POST['conpass'])}')";

$insert=$dbCon->query($sql);

if($insert)
{
echo "<div style='display:flex;align-items:center;background:#ccc;'><div><h1 style='text-align:center'>Account Created Successfully! </h1></div></div> ";
  header("refresh:4;url=reg.php")  ;

}

else
{


  echo "<div style='display:flex;align-items:center;background:#ccc;'><div><h1 style='text-align:center'>Failed to create Account  </h1></div></div> ";
die("Error:{$dbCon->errno}:{$dbCon->error}:");
  header("refresh:4;url=reg.php")  ;

}


$dbCon->close();

?>


</body>
</html>
<!--- dataentering --->	

