<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "recruiters";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, phone, mobile, fax, email, web FROM recruiters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . " Phone: ". $row["phone"]."<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>