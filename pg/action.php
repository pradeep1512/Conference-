<?php 

include ("connection.php");

if(isset($_POST['query'])){
	$inpText =$_POST['query'];
	$query ="SELECT Topic FROM Location where Topic LIKE '%$inpText%' ";

	$result = $dbCon->query($query);
	if($result->num_rows>0){
		while ($row=$result->fetch_assoc()) {

			echo " <a href='#'class="list-group-item list-group-item-action border-1">".$row['Topic']."</a>";

			# code...
		}
	}
	else{
		echo "<p class='list-group-item border-1'>NO Record</p>";
	}


}


 ?>