 <?php
//  $pusername=$_GET['user'];
//  $ppassword=$_GET['pass'];


// $servername = "localhost";
// $dbname = "recruiters";


// $conn = new mysqli($servername,"admin","password",$dbname);
// //check connection
// if($conn->connect_error){
// 	die ("Connection failed: " . $conn->connect_error);
// }
// $sql = "Select id FROM recruiters where username='" . $pusername."' and password='".$ppassword."';";
// $sql = str_replace("\'","", $sql);
// $result = mysqli_query($conn,$sql);
// while($row = mysqli_fetch_array($result)){
// 	echo $row['id'];
// }

// $conn->close();




// check<span class="searchlite">Login</span>.php

 

session_start(); // Start a new session

// require('conn.php'); // Holds all of our database connection information
$servername = "localhost";
$dbname = "recruiters";
 

 $conn = new mysqli($servername,"admin","password",$dbname);
 //check connection
 if($conn->connect_error){
 	die ("Connection failed: " . $conn->connect_error);
 }

 

// Get the data passed from the form

$username = $_POST['user'];

$password = $_POST['password'];

 

// Do some basic sanitizing

$username = stripslashes($username);

$password = stripslashes($password);

 

$sql = "select * from recruiters where username = '$username' and password = '$password'";

$result = mysql_query($sql) or die ( mysql_error() );

 

$count = 0;

 

while ($line = mysql_fetch_assoc($result)) {

     $count++;

}

 

if ($count == 1) {

     $_SESSION['loggedIn'] = "true";

     header("Location: <span class='searchlite'>../index.html</span>"); // This is wherever you want to redirect the user to

} else {

     $_SESSION['loggedIn'] = "false";

     header("Location: <span class='searchlite'>login</span>Failed.php"); // Wherever you want the user to go when they fail the login

}





 ?>