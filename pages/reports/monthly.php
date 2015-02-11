<?php
session_start();
$servername = "localhost";
$username = "fallnomega";
$password = "abc123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../scripts/style.css" rel="stylesheet"/>
   <link rel="stylesheet" href="../scripts/nav-styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../scripts/nav-script.js"></script>
   <script>
function showMonth(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","../scripts/month.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>




   <title>ATS: Monthly Report</title>
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
   <li class='active'><a href='../reports/reporting.php'><span>Reports</span></a></li>
</ul>
</div>

<div class="content">
<form id="report" name="report" method="post" action="">
				<label id="reportMonth" name="reportMonth">Please select the month:</label>



				<select id=\"reportMonth\" name=\"reportMonth\" form=\"report\" onchange="showMonth(this.value)">
					<option selected disabled hidden value=''></option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				</form>
        <br />
        <div id="txtHint"><b>The info will be listed here...</b></div>


</div>
</body>
<html>
