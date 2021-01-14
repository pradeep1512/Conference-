<?php 


ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
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
			width: 50%;
			height: 60%;
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



if(isset($_POST['update']))
{
	include ("connection.php");

	$pg =$_POST['c_id'];

	$query = "SELECT * FROM M_Insert where C_id='$pg'" ;
 
if ($result = $dbCon->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $ct = $row["C_Topic"];
        $cl = $row["C_Loc"];
        $rn = $row["R_name"];
        $ri = $row["R_id"];
        $ql = $row["Quali"];
 
   



     echo '

<div class="bgimage"></div>
		<div class="formbox">
			<form action="updatenew.php" method="post" onSubmit="validate(this)">
			<h2 align="center" style="color: darkorchid;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue">UPDATE CONFERENCE</h2>
			Conference Id
			<br>
			<input type="text"  id="ctopic" name="c_id" readonly="true" autocomplete="off" value="'.$pg.'";
" style="width:300px">
			Conference Topic
			<br>
			<input type="text"  id="ctopic" name="ctop" placeholder="Conference Topic" autocomplete="off" value="'.$ct.'";
" style="width:300px">
			<br>
			<br>
			Conference Location
			<br>
			<input type="text"  id="cloc" name="clo" placeholder="Conference Location" autocomplete="off" value="'.$cl.'";
"style="width:300px">
			<br>
			<br>
			Reviewer Name
			<br>
			<input type="text" id="rname" name="rna" placeholder="Reviewer Name" autocomplete="off" value="'.$rn.'";
"style="width:300px">
			<br>
			<br>
			Reviewer ID
			<br>
			<input type="text" id="rid" name="ridi" placeholder="Reviewer ID" autocomplete="off" value="'.$ri.'";
" style="width:300px">
			<br>
			<br>
			Qualification
			<br>
			<input type="text" id="quali" name="qualif" placeholder="Qualification" autocomplete="off" value="'.$ql.'";
"style="width:300px">
			<br>
			<br>
			<center>
			<input type="submit" id="submit" value="UPDATE" >
			</center>
		</form>
		</div>


		';



	   }







 

 

}



	}


		else{
			header("refresh:5;url=update.html");
		}


 ?>





	




</body>
</html>