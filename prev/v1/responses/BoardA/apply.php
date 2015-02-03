<?php
	$filename = $_POST['name'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$resume = $_POST['resume'];

$cand = "<p><b>Name: </b>$name</p>
	<p><b>Email:</b> $email</p>
	<p><b>Resume</b><hr/>$resume</p>";



	$myfile = fopen("../".$filename.".php", "w") or die("Unable to open file!");
	$post = "

$cand

    ";
	fwrite($myfile,$post);
	fclose($myfile);



	//$myfile = fopen("../responses.xml", "r+") or die("Unable to open file!");


	

	$xml = simplexml_load_file("../responses.xml");
	$sxe = new SimpleXMLElement($xml->asXML());

	$applicant = $sxe->addChild("applicant");
	$applicant->addChild("name",$name);
	$applicant->addChild("email",$email);
	$applicant->addChild("resume_link",$filename.".php");
	$applicant->addChild("source","Board A");

	$sxe->asXML("../responses.xml");




	// $post = "
	// <candidate>
	// <name>$name</name>
	// <email>$email</email>
	// <resume>$resume</resume>
	// <source>Board A</source>
	// </candidate>
 //    ";
	// fwrite($myfile,$post);
	// fclose($myfile);









?>
