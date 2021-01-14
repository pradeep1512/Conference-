<?php


// initializing variables

$servername = "localhost";
$username = "pradeep";
$password = "pradeep123";
$dbname = "login";

// Create connection
$dbCon = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbCon->connect_error) {
    die("Connection failed: " . $dbCon->connect_error);
}
$sql = "SELECT * FROM M_Insert";
$result = $dbCon->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table  cellspacing="5" border="1"  cellpadding="5"  style="text-align=center;color:red;font-size:20px; "><tr><th>C_id</th><th>C_Topic</th><th>C_Loc</th><th>R_name</th><th>R_id</th><th>Qualifaction</th></tr>';


    while($row = $result->fetch_assoc()) {
      echo '<tr><td>'.$row["C_id"].'</td><td>'.$row["C_Topic"].'</td><td>'.$row["C_Loc"].'</td><td>'.$row["R_name"].'</td><td>'.$row["R_id"].'</td><td>'.$row["Quali"].'</tr>';
    }

    echo '</table>';

} else {
    echo '0 results';
}

$insert=$dbCon->query($sql);

if($insert)
{
echo "<div style='display:flex;align-items:center;background:#ccc;'><div><h1 style='text-align:center'>Displayed Successfully! </h1></div></div> ";
  header("refresh:4;url=display.php")  ;

}

else
{


  echo "<div style='display:flex;align-items:center;background:#fff;'><div><h1 style='text-align:center'>Failed to create Account  </h1></div></div> ";
die("Error:{$dbCon->errno}:{$dbCon->error}:");
  header("refresh:4;url=display.php")  ;

}


$dbCon->close();



?>




