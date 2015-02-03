<?php
	$filename = $_POST['name'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$resume = $_POST['resume'];

	$myfile = fopen($filename.".xml", "w") or die("Unable to open file!");
	$post = "
	<candidate>
	<name>$name</name>
	<email>$email</email>
	<resume>$resume</resume>
	</candidate>
    ";
	fwrite($myfile,$post);
	fclose($myfile);



?>
