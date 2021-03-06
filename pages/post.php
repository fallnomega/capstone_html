﻿<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="scripts/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="scripts/nav-styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="scripts/nav-script.js"  rel="stylesheet"></script>
    <!--<script src="scripts/jquery.min.js"> </script> -->
    <script src="scripts/jquery.validate.min.js"></script>
    <script src="scripts/form.js"></script>
    
  
    <script language="JavaScript" type="text/JavaScript">
        function unique_job_number()
        {
            document.post_form.req.value = Math.round(999999/Math.random());
        }
    </script>
   <title>ATS: Post Job</title>
</head>
<body>
   <div id="wrapper">
<div class="page">
<header class="banner">
   <img class="company_logo" alt="company logo" src="scripts/images/company-logo.png" />
</header>
</div>
<?php echo "<div style='text-align:right; color:white;'><small>Signed in as: ". $_SESSION['user_name']."</small></div>"; ?>
<div id='cssmenu'>
<ul>
   <li class='last'><a href='index.php'><span>Home</span></a></li>
   <li class='active'><a href='post.php'><span>Post a Position</span></a></li>
   <li><a href='jobsposted/.index.php'><span>Jobs Posted</span></a></li>
   <li><a href='jobsposted/responses/candidates.php'><span>Candidate Responses</span></a></li>

   <li class='last'><a href='../login.php'><span>Log in</span></a></li>
      <li class='last'><a href='#'><span>Boards</span></a>
    <ul>
      <li class='last fillme'><a href="Boards/BoardA/boarda.html"><span>Board A</span></a></li>
      <li class='last  fillme'><a href="Boards/BoardB/boardb.html"><span>Board B</span></a></li>
      <li class='last  fillme'><a href="Boards/BoardC/boardc.html"><span>Board C</span></a></li>
    </ul>
   </li>
   <li class='last'><a href='reports/reporting.php'><span>Reports</span></a></li>
</ul>
</div>
<div class="content reg_form" id="post_formdiv" name="post_formdiv">
<form id="post_form" name="post_form" method="POST" onsubmit="updateForm();return false;">

<label id="Req">Requisition Number</label> <input type="text" name="req" id="req" />
<button name="unique_id" value="Unique Id" onClick="unique_job_number();return false"
    accesskey="u">Unique Id</button><br/>

<label id="Recruiter_Name">Recruiter ID</label> <input class="text" id ="recruiter_name" name="recruiter_name" type="text" value="<?php echo $_SESSION['user_name'];?>" /><br/>

<label id="Recruiter_Email">Recruiter Email</label> <input class="text" name="recruiter_email" id="recruiter_email" type="text" value="recruiter@emailwebsite.com"/><br/>

<label id="Position_Title">Position_Title</label> <input class="text" name="position_title" type="text" id="position_title" value="POSITION TITLE"/><br/>

<label id="Companyname">Company Name</label> <input class="text" id ="companyname" name="companyname" type="text" value="Test ABC" /><br/>

<label id="Companydescription">Company Description</label> <textarea name="companydescription" id="companydescription" type="text" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis dolor at nibh condimentum, eget finibus diam pharetra. Cras vehicula, velit ut pellentesque consectetur, augue dui faucibus orci, ut condimentum enim risus sit amet nibh. In ac sollicitudin nunc. Fusce at dolor dictum, fringilla mi a, tincidunt est. Fusce facilisis ante sed bibendum tristique. Pellentesque at mollis lacus. Sed finibus pretium augue et bibendum. Nulla facilisi. Curabitur sollicitudin tellus lectus, ac dictum ante lacinia ac. Vivamus cursus sed justo at fringilla. Nam iaculis magna nec urna vestibulum, sagittis blandit nisl semper. </textarea><br/>

<label id="Jobcountry">Job Country</label> <input class="text" name="jobcountry" type="text" id="jobcountry" value="United States"/><br/>

<label id="Jobstate">Job State/Province</label> <input class="text" id ="jobstate" name="jobstate" type="text" value="California" /><br/>

<label id="Jobcity">Job City</label> <input class="text" name="jobcity" id="jobcity" type="text" value="Los Angeles"/><br/>

<label id="Zipcode">Job Zip/Postal Code</label> <input class="text" name="zipcode" type="text" id="zipcode" value="12345"/><br/>

<label id="Jobtype">Job Type Classification</label> <input class="text" id ="jobtype" name="jobtype" type="text" value="Permanent" /><br/>

<label id="Jobtime">Job Time Classification</label> <input class="text" name="jobtime" id="jobtime" type="text" value="Full Time"/><br/>

<label id="Compensationtype">Compensation Type</label> <input class="text" name="compensationtype" type="text" id="compensationtype" value="Salary"/><br/>

<label id="Currency">Compensation Currency</label> <input class="text" id ="currency" name="currency" type="text" value="US Dollars" /><br/>

<label id="Jobskills">Job Skills Description</label> <textarea class="text" name="jobskills" id="jobskills" type="text">Knowledge of programming skills is a prerequisite. However, the particular language will depend on the requirements of the specific company. Among the skills employers will look for are:

Knowledge of programming skills are a given if you want to get into software development. You'll need to be comfortable with web-based programs, as well as traditional programs like Java and Visual Basic.

The key skills to play up when you're looking for a job as a software developer are as follows:

• Expertise in current computer hardware and software
• Ability to use one or more development language (C++, PHP, HTML, etc.)
• Strong communication skills
• Ability to work in a team
• Eye for detail and identifying problems
• An understanding of business
• Analytical and commercial experience</textarea><br/>

<label id="Jobdescription">Job Description</label> <textarea class="text" name="jobdescription" type="text" id="jobdescription" >At Test ABC Customer Care, we are Agents of Change. We influence and enable a customer centric experience through building effective business relationships and passionately advocating for the customer. Our team is chartered with the development of the future state for service and support by driving innovation, improved customer experiences and enabling the better games through Service and Support at Test ABC

Primary Responsibilities

This role is accountable for defining and evangelizing our service and support strategy, ensuring capability enablement and adoption across our customer and support ecosystem and to help reduce support costs via live service, social, community and online. Drive cross-organizational impact through people, process and technology to improve the customer experience.

 

Role requires direct interaction and partnership with all facets of Test ABC.

Specific Responsibilities:

 

·         Further develop and grow our support strategy to drive long-term end to end service experience improvements.

·         Lead leadership engagement focused on support cost reduction, ongoing service and customer experience improvement without sacrificing quality of service. 

·         Ensure aggressive execution and adoption of our supportability strategy through others – serviceability specialists, operations, Studio and Senior Leadership

·         Ensure product quality and serviceability is built into the service experience and enabled via all future service releases to avoid significant customer satisfaction impact and cost increases.

·         Understand new releases and partner with release management to ensure the entire support organization is ready to support at launch.

·         Influence studio teams to make key decisions that benefit the customer while balancing the critical needs of the business. Develop improved communication, presentation and measurement mechanisms to improve messaging and communication of key priorities and recommendations to leadership.

·         Drive product integration with support tools to provide better support experiences for our customers.

·         Lead the gathering and analyzing of top support call drivers; working collaboratively with technical leads and management to drive changes in products, taxonomy, services and process

 

Qualifications:

 

    Bachelor's degree or equivalent experience

     
    5 years or more team management (or virtual team) related working experience.

     
    Have gaming industry insights and experience or passion

     
    8+ years project/program management experience.

     
    Understanding of support ecosystem and key metrics that drive supportability and using this data to drive improvements. A strong ability to analyze data.

     
    Strong business analysis, strategic thinking, problem solving, collaboration, presentation, influencing and communications skills. Must be able to work effectively in an unstructured environment where success is predicated on influencing others without having direct authority over them.

     

·         A minimum of 5 years of product support experience or the equivalent in work experience. </textarea><br/>

<label id="Jobbenefits">Job Benefits Description</label> <textarea class="text" id ="jobbenefits" name="jobbenefits" type="text" >Advancement and bonus opportunities
    Health Insurance – including Dental and Vision
    Vacation, Holiday, and Sick Pay
    Retirement planning with fully vested company match
    On site parking
    Casual dress environment
    Memberships to area professional, civic, and social organizations like OVConnect
    Employee recognition days with community service and activities</textarea><br/>

<label id="Responseurl">Candidate Response URL</label> <input class="text" name="responseurl" id="responseurl" type="text" value="http://careers.companyname.com/req/1234567890.html"/><br/>

<label id="Responseemail">Candidate Response Email</label> <input class="text" name="responseemail" type="text" id="responseemail" value="response@emailrecruiter.com"/><br/>

Key words for this job (comma or space deliminated): <input type="text" name="keywords" id="keywords"/><br/>
Select a job board to post to: <br />
Board A:
<select id="BoardA">
<option value="No">No</option>
<option value="Yes">Yes</option>
</select><br/>
Board B:
<select id="BoardB">
<option value="No">No</option>
<option value="Yes">Yes</option>
</select><br/>
Board C: 
<select id="BoardC">
<option value="No">No</option>
<option value="Yes">Yes</option>
</select><br/>


   <input name="Submit" id="Submit" name="Submit" type="submit" value="Submit" onClick="formSubmit();" />
</form>
<br/>
</div>
<footer class="footer" id="footer">
<br/>

</footer>
</div>
</body>
<html>
