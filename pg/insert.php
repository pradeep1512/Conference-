<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
	<link rel="shortcut icon" type="image/jpeg" href="logo.jpeg">

	<style type="text/css">
		html,body{
			height: 100%;
			margin: 0;
			padding: 0;
		}


		.bgimage{
			background-image: url(conference2.jpg);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 100%;
			margin: 0;
			padding: 0;
			-webkit-filter: blur(3px);
  			filter: blur(3px)
  			
		}

		.formbox{
			margin-left: auto;
			margin-right: auto;
			width: 30%;
			background-color: black;
			background: rgba(0,0,0,.7);
			font-family: Times New Roman;
			font-size:110%;
			font-weight: bold;
			text-align:left;
			color: magenta;
			position: absolute;
			top: 50%;
			left: 50%;
			padding:30px;
			box-sizing: border-box;
			transform: translate(-50%,-50%);
		}

		.formbox input[type=text]{
			border: none;
			outline: none;
			background: transparent;
			height: 30px;
			color: white;
			font-size: 80%;
			margin-bottom: 20px;
			border-bottom: 2px solid plum;
		}

		.formbox input[type=submit]{
			border: none;
			outline: none;
			width: 35%;
			height: 30px;
			color: white;
			background-color: deepskyblue;
			font-weight: bold;
			font-size: 100%;
			border-radius: 20px;
			font-family:Calibri;
		}

		.formbox input[type=submit]:hover{
			cursor: pointer;
			background-color: greenyellow;
		}
	</style>

	<script type="text/javascript">
		function validate(){
			return true;

		}
		
	</script>
</head>
	

	<body>

		<?php 

		if(!isset($_POST['add']))
		
		{
			echo ' 


<div class="bgimage"></div>
		<div class="formbox">
		<form action="" method="POST" >
			<h2 align="center" style="color: darkorchid;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue">ADD NEW CONFERENCE</h2>
			Conference ID
			<br>
			<input type="text" id="cid" placeholder="Conferece ID" name="cid" autocomplete="off" style="width:300px">
			<br>
			<br>
			Conference Topic
			<br>
			<input type="text" id="ctopic" placeholder="Conference Topic" name="ctopic" autocomplete="off" style="width:300px">
			<br>
			<br>
			Conference Location
			<br>
			<input type="text" id="cloc" placeholder="Conference Location" name="cloc" autocomplete="off" style="width:300px">
			<br>
			<br>
			Reviewer Name
			<br>
			<input type="text" id="rname" placeholder="Reviewer Name" name="rname" autocomplete="off" style="width:300px">
			<br>
			<br>
			Reviewer ID
			<br>
			<input type="text" id="rid" placeholder="Reviewer ID" name="rid" autocomplete="off" style="width:300px">
			<br>
			<br>
			Qualification
			<br>
			<input type="text" id="quali" placeholder="Qualification" name="quali" autocomplete="off" style="width:300px">
			<br>
			<br>
			<center>
			<input type="submit" id="submit" value="ADD" name="add" >
			</center>

		</form>
	</div>





			';
		}	

		 ?>

		



		
<?php

include ("connection.php");

// connect to the database
 

// REGISTER USER


if (isset($_POST['add'])) {

	# code...
	// receive all input values from the form
  $cid =  mysqli_real_escape_string($dbCon,$_POST['cid']);
  $ctopic = mysqli_real_escape_string($dbCon,$_POST['ctopic']);
  $cloc = mysqli_real_escape_string($dbCon,$_POST['cloc']);
  $rname =  mysqli_real_escape_string($dbCon,$_POST['rname']);
  $rid =  mysqli_real_escape_string($dbCon,$_POST['rid']);
  $quali =  mysqli_real_escape_string($dbCon,$_POST['quali']);
  

$sql="insert into M_Insert
(C_id,C_Topic,C_Loc,R_name,R_id,Quali) values('{$dbCon->real_escape_string($_POST['cid'])}','{$dbCon->real_escape_string($_POST['ctopic'])}','{$dbCon->real_escape_string($_POST['cloc'])}','{$dbCon->real_escape_string($_POST['rname'])}','{$dbCon->real_escape_string($_POST['rid'])}','{$dbCon->real_escape_string($_POST['quali'])}')";



$insert=$dbCon->query($sql);

if($insert)
{
echo "<div style='display:flex;align-items:center;background:#ccc;'><div><h1 style='text-align:center'>Account Created Successfully! </h1></div></div> ";
  header("refresh:4;url=insert.php")  ;

}

else
{


  echo "<div style='display:flex;align-items:center;background:#ccc;'><div><h1 style='text-align:center'>Failed to create Account  </h1></div></div> ";

  header("refresh:4;url=insert.php")  ;

}



$dbCon->close();
}

  

?>






	</body>
</html>