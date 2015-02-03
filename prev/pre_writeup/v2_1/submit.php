

<?php
$filename = $_POST['req'];

 $name = $_POST['name'];
 $email = $_POST['emailf'];
 $position_title = $_POST['title'];
 $req = $_POST['req'];
 $boarda = $_POST['boarda'];
 $boardb = $_POST['boardb'];
 $boardc = $_POST['boardc'];

//create file locally to track jobs posted.
$myfile = fopen("Boards/".$filename.".xml", "w") or die("Unable to open file!");
$post = "
<job>
<req>$req</req>
<name>$name</name>
<email>$email</email>
<position_title>$position_title</position_title>
<boarda>$boarda</boarda>
<boardb>$boardb</boardb>
<boardc>$boardc</boardc>
</job>";
fwrite($myfile,$post);
fclose($myfile);


/* Since I do not have access to a recruiter account to post jobs to, I am going 
to set it to write to the board if it was selected by the recruiter posting a job.
*/

if($boarda=="Yes"){
	$board = fopen("Boards/BoardA/".$filename.".xml", "w") or die("Unable to open file!");
	$post = "
	<job>
	<req>$req</req>
	<name>$name</name>
	<email>$email</email>
	<position_title>$position_title</position_title>
	</job>";
	fwrite($board,$post);
	fclose($board);
}
if($boardb=="Yes"){
	$board = fopen("Boards/BoardB/".$filename.".xml", "w") or die("Unable to open file!");
	$post = "
	<job>
	<req>$req</req>
	<name>$name</name>
	<email>$email</email>
	<position_title>$position_title</position_title>
	</job>";
	fwrite($board,$post);
	fclose($board);
}
if($boardc=="Yes"){
	$board = fopen("Boards/BoardC/".$filename.".xml", "w") or die("Unable to open file!");
	$post = "
	<job>
	<req>$req</req>
	<name>$name</name>
	<email>$email</email>
	<position_title>$position_title</position_title>
	</job>";
	fwrite($board,$post);
	fclose($board);
}

?>


