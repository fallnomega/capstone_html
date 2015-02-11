<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = strval($_GET['q']);

$servername = "localhost";
$username = "fallnomega";
$password = "abc123";

// Create connection

$con = mysqli_connect($servername,$username,$password,'jobs');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"posted");

//$sample = $_POST['reqlookup'];


$sql = "SELECT * FROM `posted` WHERE name = '$q'";


$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Posting Date</th>
<th>Requisition Number</th>
<th>Recruiter Name</th>
<th>Position Title</th>
<th>Candidate Responses</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['post_date'] . "</td>";
    echo "<td>" . $row['req'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['position_title'] . "</td>";
    echo "<td>" . $row['responses'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>