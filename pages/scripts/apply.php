<?php
	$filename = $_POST['name']."_".$_POST['jobreq'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$resume = $_POST['resume'];
	$applied = date("m/d/Y");
	$jobreq = $_POST['jobreq'];


	$rank = 0;
	

	$keywordsfile = simplexml_load_file("../jobsposted/jobs/".$jobreq.".xml");
	$kwords = $keywordsfile->keywords;



	$constraint = preg_split('/\s+/', $kwords);



	$words = preg_split('/\s+/', $resume);


	foreach($words as $single){
		foreach($constraint as $straint){
			if(strcasecmp($single, $straint ) ==0 ) ++$rank;
		}
	}


$cand = "<p><b>Name: </b>$name</p>
	<p><b>Email:</b> $email</p>
	<p><b>Resume</b><hr/>$resume</p>
	<p><b>Applying to Job Requisition: </b>$jobreq</p>
	<p><b>Rank is: </b>$rank</p>
	<p>keywords is: $kwords</p>";



	$myfile = fopen("../jobsposted/responses/".$filename.".php", "w") or die("Unable to open file!");
	$post = "

$cand

    ";
	fwrite($myfile,$post);
	fclose($myfile);

	

	$xml = simplexml_load_file("../jobsposted/responses/responses.xml");
	$sxe = new SimpleXMLElement($xml->asXML());

	$applicant = $sxe->addChild("applicant");
	$applicant->addChild("name",$name);
	$applicant->addChild("email",$email);
	$applicant->addChild("resume_link",$filename.".php");
	$applicant->addChild("source",$_POST['boardsrc']);
	$applicant->addChild("date",$applied);
	$applicant->addChild("req",$jobreq);
	$applicant->addChild("rank",$rank);
	$sxe->asXML("../jobsposted/responses/responses.xml");

?>
