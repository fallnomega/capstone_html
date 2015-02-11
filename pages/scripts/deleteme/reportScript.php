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
   <script src="reportsJS.js"></script>
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
        xmlhttp.open("GET","monthly.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>




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
   <li class='active'><a href='../reports/reporting.php'><span>Reports</span></a></li>
</ul>
</div>

<div class="content">
	<?php
	    if($_POST['reportList']=== "individual"){
	    	echo "Hi individual";
	    }
	    elseif ($_POST['reportList']=== "monthly") {
	    	echo "<form id=\"report\" name=\"report\" method=\"post\" action=\"\">
				<label id=\"reportMonth\" name=\"reportMonth\">Please select the month:</label>
				<select id=\"reportMonth\" name=\"reportMonth\" form=\"report\" onchange=\"showMonth(this.value)\">
					<option selected disabled hidden value=''></option>
					<option value=\"16\">January</option>
					<option value=\"February\">February</option>
					<option value=\"March\">March</option>
					<option value=\"April\">April</option>
					<option value=\"May\">May</option>
					<option value=\"June\">June</option>
					<option value=\"July\">July</option>
					<option value=\"August\">August</option>
					<option value=\"September\">September</option>
					<option value=\"October\">October</option>
					<option value=\"November\">November</option>
					<option value=\"December\">December</option>
				</select>
				<input name=\"Submit\" id=\"monthSubmit\" name=\"monthSubmit\" type=\"submit\" onclick=\"runReport();\"/>
				</form>";
	    }
	    elseif ($_POST['reportList']=== "boardperformance") {
	    	echo "Hi boardperformance";
	    }
	    else{
	    	echo "Hi activity";
	    }

	 ?>

</div>
</body>
<html>

