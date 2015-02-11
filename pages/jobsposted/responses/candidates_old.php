<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../../scripts/style.css" rel="stylesheet"/>
   <link rel="stylesheet" href="../../scripts/nav-styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
   </script>
   <script src="../../scripts/jquery.min.js"></script>
   <script src="../../scripts/respond.js"></script>
   <script src="../../scripts/nav-script.js"></script>
   <script type="text/javascript" src="../../scripts/jquery.tablesorter.js"></script>
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
   <title>ATS: Candidate Responses</title>

</head>

<body>
  <div id="wrapper">
<div class="page">
<header class="banner">
	<img class="company_logo" alt="company logo" src="../company-logo.png" /></header>
</div>
<?php echo "<div style='text-align:right; color:white;'><small>Signed in as: ". $_SESSION['user_name']."</small></div>"; ?>
<div id='cssmenu'>
<ul>
   <li class='last'><a href='../../index.php'><span>Home</span></a></li>
   <li class='last'><a href='../../post.php'><span>Post a Position</span></a></li>
   <li class='last'><a href='../.index.php'><span>Jobs Posted</span></a></li>
   <li class='active'><a href='../responses/candidates.php'><span>Candidate Responses</span></a></li>

   <li class='last'><a href='../../../login.php'><span>Log in</span></a></li>
      <li class='last'><a href='#'><span>Boards</span></a>
    <ul>
      <li class='last fillme'><a href="../../Boards/BoardA/boarda.html"><span>Board A</span></a></li>
      <li class='last  fillme'><a href="../../Boards/BoardB/boardb.html"><span>Board B</span></a></li>
      <li class='last  fillme'><a href="../../Boards/BoardC/boardc.html"><span>Board C</span></a></li>
    </ul>
   </li>
   <li class='last'><a href='../../reports/reporting.php'><span>Reports</span></a></li>
</ul>
</div>
<div class="applied content" id="applied">

<!--fopen used incase the file does not exist. creates file names responses.xml if it doesnt exists -->
<?php $response = fopen("responses.xml", "a") or die("Unable to open file!");fclose($response);?>



<script>
 function gup (name) {
  name = RegExp ('[?&]' + name.replace (/([[\]])/, '\\$1') + '=([^&#]*)');
  return (window.location.href.match (name) || ['', ''])[1];
}

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

document.write("<table id=\"myTable\" class=\"tablesorter\"><thead><tr><th>Name<small>  sort</small></th><th>Applying for</th><th>Email</th><th>Resume Link</th><th>Source<small>  sort</small></th><th>Rank<small>  sort</small></th></tr></thead><tbody>");
var x=xmlDoc.getElementsByTagName("applicant");
var forJob= gup('varname');

for (i=0;i<x.length;i++){
  if(forJob==x[i].getElementsByTagName("req")[0].childNodes[0].nodeValue+".xml"){
    document.write("<tr><td>");
    document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
    document.write("</td><td>");
    var testing= gup('varname');
    document.write(testing);
    document.write("</td><td>");
    document.write(x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue);
    document.write("</td><td><a href=\"");
    document.write(x[i].getElementsByTagName("resume_link")[0].childNodes[0].nodeValue);
    document.write("\">Resume</a></td><td>");
    document.write(x[i].getElementsByTagName("source")[0].childNodes[0].nodeValue);
    document.write("</td><td>");
    document.write(x[i].getElementsByTagName("rank")[0].childNodes[0].nodeValue);
    document.write("</td></tr>");
  }
}
document.write("</tbody></table>");

$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
);
$(document).ready(function() 
    { 
        $("#myTable").tablesorter( {sortList: [[0,5], [0,0]]} ); 
    } 
);

</script>
<center>
  <a href='../responses/candidates.php'/><input type="button" value="Back"/></a>
  </center>
</div>

<footer class="footer" id="footer">
<br/>

</footer>
</div>
</body>
<html>
