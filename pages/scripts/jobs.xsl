<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

    <html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1"/>
   <link href="../../scripts/style.css" rel="stylesheet"/>
   <link rel="stylesheet" href="../../scripts/nav-styles.css"/>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../../scripts/nav-script.js"></script>
   <title>ATS: Home</title>
</head>
<body>
   <div id="wrapper">
<div class="page">
<header class="banner">
   <img class="company_logo" alt="company logo" src="../../scripts/images/company-logo.png" />
</header>
</div>
<?php echo "<div style='text-align:right; color:white;'><small>Signed in as: ". $_SESSION['user_name']."</small></div>"; ?>
<div id='cssmenu'>
<ul>
   <li class='last'><a href='../../index.php'><span>Home</span></a></li>
   <li class='last'><a href='../../post.php'><span>Post a Position</span></a></li>
   <li class='active'><a href='../../jobsposted/.index.php'><span>Jobs Posted</span></a></li>
   <li><a href='../../jobsposted/responses/candidates.php'><span>Candidate Responses</span></a></li>

   <li class='last'><a href='../login.php'><span>Log in</span></a></li>
   <li class='last'><a href='#'><span>Boards</span></a>
   <ul>
      <li class='last fillme'><a href="../../Boards/BoardA/boarda.html"><span>Board A</span></a></li>
      <li class='last  fillme'><a href="../../Boards/BoardB/boardb.html"><span>Board B</span></a></li>
      <li class='last  fillme'><a href="../../Boards/BoardC/boardc.html"><span>Board C</span></a></li>
   </ul>
   </li>
   <li class='last'><a href='#'><span>Placeholder</span></a></li>
</ul>
</div>
<div class="content">
    <xsl:for-each select="job">
        <p><label><b>Requisition Number:</b> </label><xsl:value-of select="req"/><br/></p>
        <p><label><b>Recruiter Name:</b> </label><xsl:value-of select="name"/><br/></p>
        <p><label><b>Recruiter Email:</b> </label><xsl:value-of select="email"/><br/></p>
        <p><label><b>Position Title:</b> </label><xsl:value-of select="position_title"/><br/></p>
        <p><label><b>Company Name: </b></label><xsl:value-of select="companyname"/><br/></p>
        <p><label><b>Company Description:</b> </label><xsl:value-of select="companydescription"/><br/></p>
        <p><label><b>Job Location</b>: </label><xsl:value-of select="jobcountry"/> -> <xsl:value-of select="jobstate"/> -> <xsl:value-of select="jobcity"/><br/></p>
        <p><label><b>Postal Code: </b></label><xsl:value-of select="jobzip"/><br/></p>
        <p><label><b>Job Type:</b> </label><xsl:value-of select="jobtype"/><br/></p>
        <p><label><b>Employment Type:</b> </label><xsl:value-of select="jobtime"/><br/></p>
        <p><label><b>Compensation:</b> </label><xsl:value-of select="compensationtype"/><br/></p>
        <p><label><b>Currency:</b> </label><xsl:value-of select="currency"/><br/></p>
        <p><label><b>Desired Skills:</b> </label><xsl:value-of select="jobskills"/><br/></p>
        <p><label><b>Description of the Position:</b> </label><xsl:value-of select="jobdescription"/><br/></p>
        <p><label><b>Benefits: </b></label><xsl:value-of select="jobbenefits"/><br/></p>
        <p><label><b>Candidate Response URL:</b> </label><xsl:value-of select="responseurl"/><br/></p>
        <p><label><b>Candidate Response Email: </b></label><xsl:value-of select="responseemail"/><br/></p>
        <p><label><b>Posted to Board A ? : </b></label><xsl:value-of select="boarda"/><br/></p>
        <p><label><b>Posted to Board B ? :</b> </label><xsl:value-of select="boardb"/><br/></p>
        <p><label><b>Posted to Board C ? :</b> </label><xsl:value-of select="boardc"/><br/></p>
        <p><label><b>Resume Keywords:</b> </label><xsl:value-of select="keywords"/><br/></p>



    </xsl:for-each>

</div>
<footer class="footer" id="footer">
<br/>

</footer>
</div>
</body>
</html>


</xsl:template>

</xsl:stylesheet>


