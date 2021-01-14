<?php

include ("connection.php");


$p1 =$_POST['d_id'];

$sql_del = "DELETE FROM M_Insert WHERE C_id='$p1' ";

$result=mysqli_query($dbCon,$sql_del);

if ($result) {

	# code...
	echo "Deleted";
}


else{
	echo "Fail";
}



?>