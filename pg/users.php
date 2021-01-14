<?php

include ("connection.php");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($dbCon, $_POST["query"]);
	$query = "
	SELECT * FROM Location
	WHERE Topic LIKE '%".$search."%'
	OR Location1 LIKE '%".$search."%'
	OR lCid LIKE '%".$search."%'
	" ;
}
else
{
	$query = "SELECT * FROM Location  ORDER BY Cid;";
}
$result = mysqli_query($dbCon, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
	<div class="table-responsive">
	<table class="table table-hover" cellspacing="20px" border="1"  cellpadding="15px" style="text-align=center;color:#fff;font-size:20px;">
	<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Topic</th>
			<th scope="col">Location</th>
			
		</tr>
	</thead>
	<tbody>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
		<tr>
			<th scope="row">'.$row["lCid"].'</th>
			<td>'.$row["Topic"].'</td>
			<td>'.$row["Location1"].'</td>
			
		</tr>';
	}
	$output .= '</tbody></table>';
	echo $output;
}
else
{
	echo 'No such users found';
}

?>
