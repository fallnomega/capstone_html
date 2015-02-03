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
<meta content="en-us" http-equiv="Content-Language" /><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><title>Apply</title>

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

</ul>
</nav>

<div class="applied content" id="applied">
<form id="applied" onsubmit="updateForm();return false;">
    You are applying for requisitions <b ><?php echo $_POST['appreq'];?></b> <br/>
    <input type="hidden" id="jobreq" value="<?php echo $_POST['appreq'];?>" />
	<label>Name: </label><input type="text" id="name" value="Candidate Name Here"></input><br/>
	<label>Email: </label><input type="email" id="email" value="email@candidateresponse.com"></input><br/>
	<label>Paste your Resume here: </label><br/><textarea id="resume" style="width:600px;height:600px;resize:none;">CHRIS ATTWATER
567 Rosewood Lane
Colorado Springs, CO 81207
(960) 555-1212
cattw@somedomain.com

 
OBJECTIVE

Executive assistant position allowing for parlay of demonstrated organization, customer service, communication and project management skills proven by 13 years of successful, profitable self-employment. 
  PROFILE

Motivated, personable business professional with multiple college degrees and a successful 13-year track record of profitable small business ownership. Talent for quickly mastering technology -- recently completed Microsoft Office Suite certificate course. Diplomatic and tactful with professionals and nonprofessionals at all levels. Accustomed to handling sensitive, confidential records. Demonstrated history of producing accurate, timely reports meeting stringent HMO and insurance guidelines.

Flexible and versatile -- able to maintain a sense of humor under pressure. Poised and competent with demonstrated ability to easily transcend cultural differences. Thrive in deadline-driven environments. Excellent team-building skills.
  SKILLS SUMMARY

    Project Management
    Report Preparation
    Written Correspondence
    General Office Skills

	

    Computer Savvy
    Customer Service
    Scheduling
    Marketing and Sales

	

    Insurance Billing
    Accounting/Bookkeeping
    Front-Office Operations
    Professional Presentations

PROFESSIONAL EXPERIENCE

Communication: Reports/Presentations/Technology

    Prepare complex reports for managed-care organizations and insurance companies, ensuring full compliance with agency requirements and tight deadlines.
    Author professional correspondence to customers and vendors.
    Design and deliver series of classes for local businesses and associations, providing ergonomic counseling and educating employees on proper lifting techniques to avoid injury.
    Conduct small-group sessions on meditation/relaxation techniques.
    Communicate medical concepts to patients using layman's terms to facilitate understanding.
    Rapidly learn and master varied computer programs; recently completed Microsoft Office Suite certificate course.

Customer Service/Marketing/Problem Solving

    Oversee front-office operations and provide impeccable customer service:
    --Built a clientele supported by 60% referral business.
     
    Develop and implement strategic marketing plan for business:
    -- Launched a thriving private practice, building revenue from $0 to over $72K in first three years with minimal overhead.
    -- Create special promotions, write/design print and outdoor advertising and coordinate all media buying.
     
    Won over a highly skeptical medical community as the first chiropractor to target MDs for informative in-service demonstrations, classes and booths:
    -- Presentations resulted in standing-room-only crowds of 50+.
    -- Four MDs subsequently became patients and referred family members as well.
    -- Increased client base by one-third resulting from MD referrals.

Detail Mastery and Organization

    Manage all aspects of day-to-day operations as multisite owner and practitioner of Attwater Chiropractic:
    -- Facility rental/maintenance.
    -- Patient scheduling for busy office averaging 52 appointments weekly.
    -- Finances: accounts payable/receivable, invoicing, insurance billing, budgeting.
    -- Supervision of a total of eight medical receptionist interns.
    -- Compliance with all healthcare facility, HMO and insurance requirements. 

EMPLOYMENT HISTORY

ATTWATER CHIROPRACTIC -- Colorado Springs, CO; Pueblo, CO; Cheyenne, WY
Owner/Operator, 1997 to Present

LAKEVIEW RESTAURANT and CAFÉ -- Minneapolis, MN
Waitress, 1994 to 1997
  EDUCATION

NORTHWESTERN COLLEGE OF CHIROPRACTIC -- Minneapolis, MN
Doctor of Chiropractic Degree, 1997

    Four-year advanced degree requiring 30-34 credit hrs. per quarter.
    GPA: 3.89/4.0
    Licensed to practice chiropractic in Colorado, Minnesota, Wyoming and Montana.

BARTON COUNTY COMMUNITY COLLEGE -- Great Bend, KS
Associate's Degree in Pre-chiropractic, 1993

    GPA: 4.0/4.0

COMPUTER SKILLS

    Microsoft Word
    Microsoft Excel
    Microsoft PowerPoint

	

    Visio
    Microsoft Access
    Medisoft (Insurance Billing Software)

 
Available for relocation
567 Rosewood Lane | Colorado Springs, CO 81207 | (960) 555-1212 | cattw@somedomain.com</textarea>
	<input type="submit" id="respond" value="Apply" onClick="responds();"/>

</form>
</div>

<footer class="footer">
		<br />
		
	</nav>
</footer>
</body>

</html>
