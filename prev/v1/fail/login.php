<?php
// $pusername=$_GET['username'];
// $ppassword=$_GET['password'];
 $pusername='admin';
 $ppassword='password';

$servername = "localhost";
$dbname = "recruiters";


$conn = new mysqli($servername,"admin","password",$dbname);
//check connection
if($conn->connect_error){
	die ("Connection failed: " . $conn->connect_error);
}
$sql = "Select id FROM recruiters where username='" . $pusername."' and password='".$ppassword."';";
$sql = str_replace("\'","", $sql);
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
	echo $row['id'];
}

$conn->close();




?>