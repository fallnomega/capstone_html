<?php
session_start();
$timeout=600;//number of seconds until it times out

//check if timeout field exists
if(isset($_SESSION['timeout'])){
  //see if the number of seconds since the last
  //visit is larger than the time out period.
  $duration = time() - (int) $_SESSION['timeout'];
  if($duration > $timeout){
    //destroy the session and point to login
    $_SESSION['user_name'] = "Unknown";
    session_destroy();

    echo "<a href='../login.php'>Log back in</a>";
  }
}

$_SESSION['timeout'] = time();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="../../scripts/style.css" rel="stylesheet"/>
<link href=".style2.css" rel="stylesheet"/>
<style type="text/css">
.auto-style1 {
	width: 100%;
	display: block;
	margin-left: auto;
	margin-right: auto;
	border: thick double black;
}
</style>
<meta content="en-us" http-equiv="Content-Language" /><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Candidate Responses</title>

<script src="../../scripts/jquery.min.js">    </script>
<script src="../../scripts/respond.js"></script>

</head>

<body>
<div class="page">
<header class="banner">
	<img class="company_logo" alt="company logo" src="../company-logo.png" /></header>
</div>

<nav class="nav-bar">
<ul style="width: 144px">
  <?php echo "Signed in as: ". $_SESSION['user_name']; ?>
<li><a href="../../index.php">Home</a></li>
<li id="navs">
  <a id="navs" href="../.index.php">Jobs Posted</a>
  <ul>
    <li><a href="candidates.php">Candidate Responses</a></li>
  </ul>
</li>
<li><a href="../../post.php">Post a Job</a></li>

<li>Sourcing</li>
<li id="navs" ><a href="../../../login.php">Log in</a></li>
</ul>
</nav>

<div class="applied content" id="applied">

<!--fopen used incase the file does not exist. creates file names responses.xml if it doesnt exists -->
<?php $response = fopen("responses.xml", "a") or die("Unable to open file!");fclose($response);?>

<script>

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","responses.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;

document.write("<table><tr><th>Name</th><th>Email</th><th>Resume Link</th><th>Source</th></tr>");
var x=xmlDoc.getElementsByTagName("applicant");
for (i=0;i<x.length;i++)
  {
  document.write("<tr><td>");
  document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue);
  document.write("</td><td><a href=\"");
  document.write(x[i].getElementsByTagName("resume_link")[0].childNodes[0].nodeValue);
    document.write("\">Resume</a></td><td>");
  document.write(x[i].getElementsByTagName("source")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table>");
</script>

</div>

<footer class="footer">
		<br />
		
	</nav>
</footer>
</body>

</html>
