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
			var c =document.getElementById("cid").value;

			if (c=='' || c==null) {
				alert('Enter the Conference id');
				return false;

			}


			else{
				return true;
			}


		}
	</script>
</head>
<body>
	<div class="bgimage"></div>
		<div class="formbox">
			<form  action="update1.php" method="POST" onsubmit="return validate();">
			<h2 align="center" style="color: darkorchid;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue">UPDATE CONFERENCE</h2>
			Conference ID
			<br>
			<input type="text" name="c_id" id="cid"  style="width:300px">
			<br>
			<br>
			<center>
			<input type="submit" id="submit" name="update" >
			</center>
			</form>
		</div>
</body>
</html>