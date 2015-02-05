<?php
	$req = $_POST["deletion"];
	if(file_exists("../jobsposted/jobs/".$req.".xml")){
		$boards = array();
		$postedboard = simplexml_load_file("../jobsposted/jobs/".$req.".xml");
		$boarda = $postedboard->boarda;
		$boardb = $postedboard->boardb;
		$boardc = $postedboard->boardc;

		if(strcasecmp($boarda, "Yes") ==0){
			unlink("../Boards/BoardA/".$req.".xml");

		}
		if(strcasecmp($boardb, "Yes") ==0){
			unlink("../Boards/BoardB/".$req.".xml");

		}
		if(strcasecmp($boardc, "Yes") ==0){
			unlink("../Boards/BoardC/".$req.".xml");

		}






		unlink("../jobsposted/jobs/".$req.".xml");
		echo "$req has been deleted, return to previous page <a href=\"../jobsposted/.index.php\">Return</a>";
	}
	else{
		echo "$req does not exist, please return to previous page <a href=\"../jobsposted/.index.php\">Return</a>";
	}


	




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