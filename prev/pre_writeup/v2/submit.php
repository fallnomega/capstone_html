

<?php
$filename = $_POST['req'];

 $name = $_POST['name'];
 $email = $_POST['emailf'];
 $position_title = $_POST['title'];
 $req = $_POST['req'];



$myfile = fopen("Boards/".$filename.".xml", "w") or die("Unable to open file!");
$post = "
<job>
<req>$req</req>
<name>$name</name>\n
<email>$email</email>\n
<position_title>$position_title</position_title>\n
</job>";
fwrite($myfile,$post);
fclose($myfile);
// print_r($_POST); // this will be echoed back to you upon success.
//     echo "This one too, will be echoed back to you"
?>


