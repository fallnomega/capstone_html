 <?php


$servername = "localhost";
$dbname = "recruiters";
 

 $conn = new mysqli($servername,"admin","password",$dbname);
 //check connection
 if($conn->connect_error){
 	die ("Connection failed: " . $conn->connect_error);
 }
 ?>