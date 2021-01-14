<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>

	<style type="text/css">
		html,body{
			height: 100%;
			margin: 0;
			padding: 0;
		}

		.bgimage{
			background-image: url(conference.jpg);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 100%;
			margin: 0;
			padding: 0;
			-webkit-filter: blur(3px);
  			filter: blur(3px)
  			
		}

		form{
			margin-left: auto;
			margin-right: auto;
			width: 20%;
			background-color: black;
			background: rgba(0,0,0,.7);
			font-family: Times New Roman;
			font-size:150%;
			font-weight: bold;
			text-align:left;
			color: white;
			padding:30px;
			box-sizing: border-box;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}

		input[type=submit]{
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

		input[type=submit]:hover{
			cursor: pointer;
			background-color: greenyellow;
		}

		input[type=text],input[type=password]{
			border: none;
			outline: none;
			background: transparent;
			height: 40px;
			width: 100%;
			color: white;
			font-size: 60%;
			margin-bottom: 20px;
			border-bottom: 2px solid white;
		}
		.avatar{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}

		a{
			text-decoration: none;
			font-size: 60%;
			line-height: 12px;
			color: dodgerblue;
		}

		a:hover{
			color: red;
		}
		
	</style>

	<script type="text/javascript">

		function validate(){
		var username =/^(?=.{5,15}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
		var password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{5,10}$/; 

		var uname = document.getElementById('uname').value;
		var pwd = document.getElementById('pwd').value;

		if (uname==''){
		alert("Username cannot be blank");
		form.uname.focus();
		return false;
		}

		if ( !(username.test(uname))){
		alert("Username cannot contain symbols, special characters, __ , _. , ._ , .. , cannot begin or end with _ or . and must be 5-15 characters long");
		form.uname.focus();
		return false;	
		}

		if (pwd==''){
		alert("Password cannot be blank");
		form.pwd.focus();
		return false;
		}

		if (!(pwd.match(password))){
		alert("Password must contain at least one number,one uppercase, one lowercase, one special character and at least 5 characters long");
		form.pwd.focus();
		return false;
		}

		else{
		alert("LOGIN SUCCESSFUL!!!").focus();
		return true;
		}
		
	}
	</script>
</head>
<body>
	<div class="bgimage"></div>
	<form action="final.php" method="post" onSubmit="validate(this);">
		<h3 style="text-decoration:underline" align="center">LOGIN</h3>
		<img src="avatar.png" class="avatar">
		Username
		<br>
		<input type="text" id="uname" placeholder="Username" autocomplete="off" style="width:180px" name="uname">
		<br>
		<br>
		Password
		<br>
		<input type="password" id="pwd" placeholder="Password" autocomplete="off" style="width: 180px">
		<br>
		<br>
		<center>
			<input type="submit" name="submit" value="Login" id="submit">
		</center>
		<br>
		
		<a href="reg.php">Don't have an account?</a>
		
		
	</form>


</body>
</html>		
