
<?php
session_start();

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../scripts/style.css" rel="stylesheet"/>
   <link rel="stylesheet" href="../scripts/nav-styles.css">
   <script src="../scripts/reportsJS.js"></script>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../scripts/nav-script.js"></script>
   <title>ATS: Reports</title>
</head>
<body>
   <div id="wrapper">
<div class="page">
<header class="banner">
   <img class="company_logo" alt="company logo" src="../scripts/images/company-logo.png" />
</header>
</div>
<?php echo "<div style='text-align:right; color:white;'><small>Signed in as: ". $_SESSION['user_name']."</small></div>"; ?>
<div id='cssmenu'>
<ul>
   <li class='last'><a href='../index.php'><span>Home</span></a></li>
   <li class='last'><a href='../post.php'><span>Post a Position</span></a></li>
   <li><a href='../jobsposted/.index.php'><span>Jobs Posted</span></a></li>
   <li><a href='../jobsposted/responses/candidates.php'><span>Candidate Responses</span></a></li>

   <li class='last'><a href='../../login.php'><span>Log in</span></a></li>
   <li class='last'><a href='#'><span>Boards</span></a>
   <ul>
      <li class='last fillme'><a href="../Boards/BoardA/boarda.html"><span>Board A</span></a></li>
      <li class='last  fillme'><a href="../Boards/BoardB/boardb.html"><span>Board B</span></a></li>
      <li class='last  fillme'><a href="../Boards/BoardC/boardc.html"><span>Board C</span></a></li>
   </ul>
   </li>
   <li class='active'><a href='reporting.php'><span>Reports</span></a></li>
</ul>
</div>

<div class="content">

<form id="report" name="report" method="post" >
	<label id="reportType" name="reportType">Please select the type of report to run:</label>
	<select id="reportList" name="reportList" form="report" onchange="location = this.options[this.selectedIndex].value;">
	<option selected disabled hidden value=''></option>
	<option value="individual.php">Search for a Job</option>
	<option value="monthly.php">Monthly Report</option>
	<option value="boardperformance.php">Board Performance Report</option>
	<option value="activity.php">Recruiter Activity Report</option>
</select>
<input name="Submit" id="Submit" name="Submit" type="submit"/>
</form>


</div>
</body>
<html>

