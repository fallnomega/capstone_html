
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="../../style.css" rel="stylesheet"/>
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

<script src="jquery.min.js">    </script>
<script src="respond.js"></script>

</head>

<body>
<div class="page">
<header class="banner">
    <img class="company_logo" alt="company logo" src="../../company-logo.png" /></header>
</div>

<nav class="nav-bar">
<ul style="width: 144px">
<li><a href="../index.html">Home</a></li>
<li><a href="../jobsposted/.index.php">Jobs Posted</a></li>
<li><a href="../post.html">Post a Job</a></li>
<li><a href="candidates.html">Candidate Responses</a></li>
<li>Sourcing</li>
</ul>
</nav>

<div class="applied content" id="applied">


<?php
$myfile = fopen("carbon.php", "r") or die("Unable to open file!");
$str = fread($myfile,filesize("carbon.php"));
$str = nl2br($str);
echo $str;
fclose($myfile);
?>

    </div>

<footer class="footer">
        <br />
        
    </nav>
</footer>
</body>

</html>