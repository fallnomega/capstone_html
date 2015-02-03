

<?php
$filename = $_POST['req'];

$name=$_POST['jobs.name'];
$email = $_POST['emailf'];
$position_title = $_POST['title'];
$req = $_POST['req'];
$boards = $_POST['myCheckboxes'];





$myfile = fopen("Boards/".$filename.".xml", "w") or die("Unable to open file!");
$post = "
<job>
<req>$req</req>
<name>$name</name>\n
<email>$email</email>\n
<position_title>$position_title</position_title>\n
$boards[0]
</job>";
fwrite($myfile,$post);
fclose($myfile);
?>


