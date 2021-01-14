<?php 


ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 ?>


<?php 






	include ("connection.php");

	$pg =$_POST['c_id'];
	$pg1 =$_POST['ctop'];
	$pg2 =$_POST['clo'];
	$pg3 =$_POST['rna'];
	$pg4 =$_POST['ridi'];
	$pg5 =$_POST['qualif'];

	
$sql="UPDATE M_Insert SET C_Topic = '$pg1' ,C_Loc = '$pg2' , R_name = '$pg3' , R_id = '$pg4' , Quali = '$pg5'   WHERE C_id='$pg'";


$result=mysqli_query($dbCon,$sql);

if ($result) {

	# code...
	echo "Updated";
}


else{
	echo "Fail";
}




?>