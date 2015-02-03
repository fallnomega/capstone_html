<?php
	$filename = $_POST['name']."_".$_POST['jobreq'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$resume = $_POST['resume'];
	$applied = date("m/d/Y");

$cand = "<p><b>Name: </b>$name</p>
	<p><b>Email:</b> $email</p>
	<p><b>Resume</b><hr/>$resume</p>";



	$myfile = fopen("../".$filename.".php", "w") or die("Unable to open file!");
	$post = "

$cand

    ";
	fwrite($myfile,$post);
	fclose($myfile);

	

	$xml = simplexml_load_file("../responses.xml");
	$sxe = new SimpleXMLElement($xml->asXML());

	$applicant = $sxe->addChild("applicant");
	$applicant->addChild("name",$name);
	$applicant->addChild("email",$email);
	$applicant->addChild("resume_link",$filename.".php");
	$applicant->addChild("source",$_POST['boardsrc']);
	$applicant->addChild("date",$applied);
	$sxe->asXML("../responses.xml");

?>
