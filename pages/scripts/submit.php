

<?php
$filename = $_POST['jreq'];

 $name = $_POST['jname'];
 $email = $_POST['jemailf'];
 $position_title = $_POST['jtitle'];
 $req = $_POST['jreq'];

 $companyname = $_POST['jcompanyname'];
 $companydescription = $_POST['jcompanydescription'];
 $jobcountry = $_POST['jjobcountry'];
 $jobstate = $_POST['jjobstate']; 
 $jobcity = $_POST['jjobcity'];
 $jobzip = $_POST['jjobzip'];
 $jobtype = $_POST['jjobtype']; 
 $jobtime = $_POST['jjobtime'];
 $compensationtype = $_POST['jcompensation'];
 $currency = $_POST['jcurrency']; 
 $jobskills = $_POST['jjobskills'];
 $jobskills =  preg_replace('/[^a-zA-Z0-9\s]/', '', strip_tags(html_entity_decode($jobskills)));
 // $clear = preg_replace('/[^a-zA-Z0-9\s]/', '', strip_tags(html_entity_decode($des)));
 $jobdescription = $_POST['jjobdescription'];
  $jobdescription =  preg_replace('/[^a-zA-Z0-9\s]/', '', strip_tags(html_entity_decode($jobdescription)));
 $jobbenefits = $_POST['jjobbenefits'];
  $jobbenefits =  preg_replace('/[^a-zA-Z0-9\s]/', '', strip_tags(html_entity_decode($jobbenefits)));
 $responseurl = $_POST['jresponseurl'];
 $responseemail = $_POST['jresponseemail'];
 $keywords = $_POST['keyword'];


 $boarda = $_POST['boarda'];
 $boardb = $_POST['boardb'];
 $boardc = $_POST['boardc'];

//sql time

$servername = "localhost";
$username = "fallnomega";
$password = "abc123";
$dbname = "jobs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "INSERT INTO posted (name, req, email, position_title, companyname, companydescription, jobcountry, jobstate, jobcity, jobzip, jobtype, jobtime, compensationtype, currency, jobskills, jobdescription, jobbenefits, responseurl, responseemail, keywords, boarda, boardb, boardc)
 VALUES ('$name', '$req', '$email', '$position_title', '$companyname',  '$companydescription', '$jobcountry', '$jobstate', '$jobcity', '$jobzip', '$jobtype', '$jobtime', '$compensationtype', '$currency', '$jobskills', '$jobdescription', '$jobbenefits', '$responseurl', '$responseemail', '$keywords', '$boarda', '$boardb', '$boardc')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




//create file locally to track jobs posted.
$myfile = fopen("../jobsposted/jobs/".$filename.".xml", "w") or die("Unable to open file!");
$post = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"../../scripts/jobs.xsl\"?>
<job>
<req>$req</req>
<name>$name</name>
<email>$email</email>
<position_title>$position_title</position_title>

<companyname>$companyname</companyname>
<companydescription>$companydescription</companydescription>
<jobcountry>$jobcountry</jobcountry>
<jobstate>$jobstate</jobstate>
<jobcity>$jobcity</jobcity>	
<jobzip>$jobzip</jobzip>	
<jobtype>$jobtype</jobtype>
<jobtime>$jobtime</jobtime>	
<compensationtype>$compensationtype</compensationtype>
<currency>$currency</currency>
<jobskills>$jobskills</jobskills>	
<jobdescription>$jobdescription</jobdescription>
<jobbenefits>$jobbenefits</jobbenefits>
<responseurl>$responseurl</responseurl>	
<responseemail>$responseemail</responseemail>

<boarda>$boarda</boarda>
<boardb>$boardb</boardb>
<boardc>$boardc</boardc>
<keywords>$keywords</keywords>
</job>";
fwrite($myfile,$post);
fclose($myfile);



/* Since I do not have access to a recruiter account to post jobs to, I am going 
to set it to write to the board if it was selected by the recruiter posting a job.
*/

if($boarda=="Yes"){
	$board = fopen("../Boards/BoardA/".$filename.".xml", "w") or die("Unable to open file!");
$post = "
<job>
<req>$req</req>
<name>$name</name>
<email>$email</email>
<position_title>$position_title</position_title>
<companyname>$companyname</companyname>
<companydescription>$companydescription</companydescription>
<jobcountry>$jobcountry</jobcountry>
<jobstate>$jobstate</jobstate>
<jobcity>$jobcity</jobcity>	
<jobzip>$jobzip</jobzip>	
<jobtype>$jobtype</jobtype>
<jobtime>$jobtime</jobtime>	
<compensationtype>$compensationtype</compensationtype>
<currency>$currency</currency>
<jobskills>$jobskills</jobskills>	
<jobdescription>$jobdescription</jobdescription>
<jobbenefits>$jobbenefits</jobbenefits>
<responseurl>$responseurl</responseurl>	
<responseemail>$responseemail</responseemail>
</job>";
	fwrite($board,$post);
	fclose($board);


$myfile = fopen("../careersite/".$filename."BoardA.php", "w") or die("Unable to open file!");
$template="<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
<link href=\"../scripts/style.css\" rel=\"stylesheet\"/>
<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
<title id=\"title\">$req: $position_title</title>

	<script src=\"../scripts/jquery.min.js\">	</script>
	<script src=\"../scripts/jquery.validate.min.js\"></script>
	<script src=\"../scripts/form.js\"></script>


</head>
<body>
<div class=\"page\">
<header class=\"banner\">
	<img class=\"company_logo\" alt=\"company logo\" src=\"../scripts/images/company-logo.png\" /></header>
</div>



<div class=\"content\" id=\"content\" name=\"jobcontent\">


<label id=\"Req\"><u><b>Requisition Number</b></u></label><p>$req</p>


<label id=\"Position_Title\"><u><b>Position Title</b></u></label><p>$position_title</p>

<label id=\"Companyname\"><u><b>Company Name</b></u></label><p>$companyname</p>

<label id=\"Companydescription\"><u><b>Company Description</b></u></label><p>$companydescription</p>

<label id=\"Jobcountry\"><u><b>Job Country :</b></u></label><p>$jobcountry</p> 

<label id=\"Jobstate\"><u><b>Job State/Province :</b></u></label><p>$jobstate</p> 

<label id=\"Jobcity\"><u><b>Job City :</b></u></label><p>$jobcity</p>

<label id=\"Zipcode\"><u><b>Job Zip/Postal Code :</b></u></label><p>$jobzip</p>

<label id=\"Jobtype\"><u><b>Job Type Classification :</b></u></label><p>$jobtype</p>

<label id=\"Jobtime\"><u><b>Job Time Classification :</b></u></label><p>$jobtime</p>

<label id=\"Compensationtype\"><u><b>Compensation Type :</b></u></label><p>$compensationtype</p>

<label id=\"Currency\"><u><b>Compensation Currency :</b></u></label><p>$currency</p>

<label id=\"Jobskills\"><u><b>Job Skills Description :</b></u></label><p>$jobskills</p> 

<label id=\"Jobdescription\"><u><b>Job Description :</b></u></label><p>$jobdescription</p> 

<label id=\"Jobbenefits\"><u><b>Job Benefits Description :</b></u></label>
<p>$jobbenefits</p>
<form action=\"../jobsposted/responses/BoardA/response.php\" method=\"post\">
<input type=\"hidden\" name=\"appreq\" value=\"$req\"/>
<input type=\"hidden\" name=\"boardsrc\" value=\"BoardA\"/>
    <input type=\"submit\" value=\"Apply\">
</form>
</div>



<!--FOOTER -->
<footer class=\"footer\">
		<br />
		
	</nav>
</footer>

			
</body>

</html>

";
fwrite($myfile,$template);
fclose($myfile);


}
if($boardb=="Yes"){
	$board = fopen("../Boards/BoardB/".$filename.".xml", "w") or die("Unable to open file!");
$post = "
<job>
<req>$req</req>
<name>$name</name>
<email>$email</email>
<position_title>$position_title</position_title>
<companyname>$companyname</companyname>
<companydescription>$companydescription</companydescription>
<jobcountry>$jobcountry</jobcountry>
<jobstate>$jobstate</jobstate>
<jobcity>$jobcity</jobcity>	
<jobzip>$jobzip</jobzip>	
<jobtype>$jobtype</jobtype>
<jobtime>$jobtime</jobtime>	
<compensationtype>$compensationtype</compensationtype>
<currency>$currency</currency>
<jobskills>$jobskills</jobskills>	
<jobdescription>$jobdescription</jobdescription>
<jobbenefits>$jobbenefits</jobbenefits>
<responseurl>$responseurl</responseurl>	
<responseemail>$responseemail</responseemail>
</job>";
	fwrite($board,$post);
	fclose($board);



	$myfile = fopen("../careersite/".$filename."BoardB.php", "w") or die("Unable to open file!");
$template="<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
<link href=\"../scripts/style.css\" rel=\"stylesheet\"/>
<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
<title id=\"title\">$req: $position_title</title>

	<script src=\"../scripts/jquery.min.js\">	</script>
	<script src=\"../scripts/jquery.validate.min.js\"></script>
	<script src=\"../scripts/form.js\"></script>


</head>
<body>
<div class=\"page\">
<header class=\"banner\">
	<img class=\"company_logo\" alt=\"company logo\" src=\"../scripts/images/company-logo.png\" /></header>
</div>



<div class=\"content\" id=\"content\" name=\"jobcontent\">


<label id=\"Req\"><u><b>Requisition Number</b></u></label><p>$req</p>


<label id=\"Position_Title\"><u><b>Position Title</b></u></label><p>$position_title</p>

<label id=\"Companyname\"><u><b>Company Name</b></u></label><p>$companyname</p>

<label id=\"Companydescription\"><u><b>Company Description</b></u></label><p>$companydescription</p>

<label id=\"Jobcountry\"><u><b>Job Country :</b></u></label><p>$jobcountry</p> 

<label id=\"Jobstate\"><u><b>Job State/Province :</b></u></label><p>$jobstate</p> 

<label id=\"Jobcity\"><u><b>Job City :</b></u></label><p>$jobcity</p>

<label id=\"Zipcode\"><u><b>Job Zip/Postal Code :</b></u></label><p>$jobzip</p>

<label id=\"Jobtype\"><u><b>Job Type Classification :</b></u></label><p>$jobtype</p>

<label id=\"Jobtime\"><u><b>Job Time Classification :</b></u></label><p>$jobtime</p>

<label id=\"Compensationtype\"><u><b>Compensation Type :</b></u></label><p>$compensationtype</p>

<label id=\"Currency\"><u><b>Compensation Currency :</b></u></label><p>$currency</p>

<label id=\"Jobskills\"><u><b>Job Skills Description :</b></u></label><p>$jobskills</p> 

<label id=\"Jobdescription\"><u><b>Job Description :</b></u></label><p>$jobdescription</p> 

<label id=\"Jobbenefits\"><u><b>Job Benefits Description :</b></u></label>
<p>$jobbenefits</p>
<form action=\"../jobsposted/responses/BoardB/response.php\" method=\"post\">
<input type=\"hidden\" name=\"appreq\" value=\"$req\"/>
<input type=\"hidden\" name=\"boardsrc\" value=\"BoardB\"/>
    <input type=\"submit\" value=\"Apply\">
</form>
</div>

<!--FOOTER -->
<footer class=\"footer\">
		<br />
		
	</nav>
</footer>

			
</body>

</html>

";
fwrite($myfile,$template);
fclose($myfile);
}
if($boardc=="Yes"){
	$board = fopen("../Boards/BoardC/".$filename.".xml", "w") or die("Unable to open file!");
$post = "
<job>
<req>$req</req>
<name>$name</name>
<email>$email</email>
<position_title>$position_title</position_title>
<companyname>$companyname</companyname>
<companydescription>$companydescription</companydescription>
<jobcountry>$jobcountry</jobcountry>
<jobstate>$jobstate</jobstate>
<jobcity>$jobcity</jobcity>	
<jobzip>$jobzip</jobzip>	
<jobtype>$jobtype</jobtype>
<jobtime>$jobtime</jobtime>	
<compensationtype>$compensationtype</compensationtype>
<currency>$currency</currency>
<jobskills>$jobskills</jobskills>	
<jobdescription>$jobdescription</jobdescription>
<jobbenefits>$jobbenefits</jobbenefits>
<responseurl>$responseurl</responseurl>	
<responseemail>$responseemail</responseemail>
</job>";
	fwrite($board,$post);
	fclose($board);





	$myfile = fopen("../careersite/".$filename."BoardC.php", "w") or die("Unable to open file!");
$template="<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
<link href=\"../scripts/style.css\" rel=\"stylesheet\"/>
<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
<title id=\"title\">$req: $position_title</title>

	<script src=\"../scripts/jquery.min.js\">	</script>
	<script src=\"../scripts/jquery.validate.min.js\"></script>
	<script src=\"../scripts/form.js\"></script>


</head>
<body>
<div class=\"page\">
<header class=\"banner\">
	<img class=\"company_logo\" alt=\"company logo\" src=\"../scripts/images/company-logo.png\" /></header>
</div>



<div class=\"content\" id=\"content\" name=\"jobcontent\">


<label id=\"Req\"><u><b>Requisition Number</b></u></label><p>$req</p>


<label id=\"Position_Title\"><u><b>Position Title</b></u></label><p>$position_title</p>

<label id=\"Companyname\"><u><b>Company Name</b></u></label><p>$companyname</p>

<label id=\"Companydescription\"><u><b>Company Description</b></u></label><p>$companydescription</p>

<label id=\"Jobcountry\"><u><b>Job Country :</b></u></label><p>$jobcountry</p> 

<label id=\"Jobstate\"><u><b>Job State/Province :</b></u></label><p>$jobstate</p> 

<label id=\"Jobcity\"><u><b>Job City :</b></u></label><p>$jobcity</p>

<label id=\"Zipcode\"><u><b>Job Zip/Postal Code :</b></u></label><p>$jobzip</p>

<label id=\"Jobtype\"><u><b>Job Type Classification :</b></u></label><p>$jobtype</p>

<label id=\"Jobtime\"><u><b>Job Time Classification :</b></u></label><p>$jobtime</p>

<label id=\"Compensationtype\"><u><b>Compensation Type :</b></u></label><p>$compensationtype</p>

<label id=\"Currency\"><u><b>Compensation Currency :</b></u></label><p>$currency</p>

<label id=\"Jobskills\"><u><b>Job Skills Description :</b></u></label><p>$jobskills</p> 

<label id=\"Jobdescription\"><u><b>Job Description :</b></u></label><p>$jobdescription</p> 

<label id=\"Jobbenefits\"><u><b>Job Benefits Description :</b></u></label>
<p>$jobbenefits</p>
<form action=\"../jobsposted/responses/BoardC/response.php\" method=\"post\">
<input type=\"hidden\" name=\"appreq\" value=\"$req\"/>
<input type=\"hidden\" name=\"boardsrc\" value=\"BoardC\"/>
    <input type=\"submit\" value=\"Apply\">
</form>
</div>

<!--FOOTER -->
<footer class=\"footer\">
		<br />
		
	</nav>
</footer>

			
</body>

</html>

";
fwrite($myfile,$template);
fclose($myfile);
}


?>


