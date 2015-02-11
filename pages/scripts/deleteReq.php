<?php
	$req = $_POST["deletion"];
	$servername = "localhost";
    $username = "fallnomega";
    $password="abc123";
    $dbname = "jobs";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }
    $boarddelete= "SELECT boarda, boardb, boardc FROM posted WHERE req=".$req;
    $result = $conn->query($boarddelete);
    while($row = $result->fetch_assoc()){
    	$boarda = $row["boarda"];
    	$boardb = $row["boardb"];
    	$boardc = $row["boardc"];
     	if(strcasecmp($boarda, "Yes") ==0){
	 		unlink("../Boards/BoardA/".$req.".xml");

	 	}
	 	if(strcasecmp($boardb, "Yes") ==0){
	 		unlink("../Boards/BoardB/".$req.".xml");

	 	}
	 	if(strcasecmp($boardc, "Yes") ==0){
	 		unlink("../Boards/BoardC/".$req.".xml");

	 	}
	}
    //delete entry
    $deletesql = "DELETE FROM posted WHERE req=".$req;
    if($conn->query($deletesql) === TRUE){
      echo "Record Deleted Successfully,return to previous page <a href=\"../jobsposted/.index.php\">Return</a>";
    }
    else{
      echo "Error deleting record: " .$conn->error." ,return to previous page <a href=\"../jobsposted/.index.php\">Return</a>";
    }
    $conn->close();
?>