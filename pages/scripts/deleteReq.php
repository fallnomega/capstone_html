<?php
	$req = $_POST["deletion"];

	unlink("../jobsposted/jobs/".$req.".xml");

	echo "$req has been deleted, return to previous page <a href=\"../jobsposted/.index.php\">Return</a>";


//   $xmlfile = "../jobsposted/jobs/".$req.".xml";
// $xmlstr = file_get_contents("$xmlfile"); 
// $xml = new SimpleXMLElement($xmlstr);

// $count = 0; 
// foreach ($xml as $user){ 
// if ($user->userid == "02345678"){ 
// unset($xml->user[$count]); break; 
// } 
// $count++; 
// } 
// echo $xml->asXML();

// $handle = fopen("$xmlfile", "w"); 
// fwrite($handle, $xml->asXML()); 
// fclose($handle);


?>