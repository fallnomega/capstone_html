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
<link href="style.css" rel="stylesheet"/>
<style type="text/css">
.auto-style1 {
	width: 100%;
	display: block;
	margin-left: auto;
	margin-right: auto;
	border: thick double black;
}
</style>
<meta content="en-us" http-equiv="Content-Language" /><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><title>Applicant Tracking System</title>
</head>

<body>
	<div id="wrapper">
<div class="page">
<header class="banner">
	<img class="company_logo" alt="company logo" src="company-logo.png" /></header>
</div>

<nav class="nav-bar">
<ul style="width: 144px">
	<?php echo "Signed in as: ". $_SESSION['user_name']; ?>
<li id="navs"><a id="navs" href="index.php">Home</a></li>
<li id="navs">
	<a id="navs" href="jobsposted/.index.php">Jobs Posted</a>
	<ul>
		<li><a href="jobsposted/responses/candidates.php">Candidate Responses</a></li>
	</ul>
</li>
<li id="navs"><a id="navs" href="post.php">Post a Job</a></li>

<li id="navs" >Sourcing</li>
<li id="navs" ><a href="../login.php">Log in</a></li>
</ul>
</nav>

<div class="content">
<p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu ante euismod tortor consequat aliquet nec quis risus. Fusce et convallis augue, nec convallis lectus. Pellentesque pharetra, enim non sodales iaculis, enim enim molestie nisl, sit amet ornare erat tellus sed justo. Donec iaculis aliquam magna quis faucibus. Nulla eget erat enim. Curabitur vehicula, elit non imperdiet commodo, turpis lectus semper orci, sit amet tempor sem nisl venenatis diam. Fusce sed blandit ligula. Duis sed risus magna. Nam vel vulputate eros. Integer id nisi consectetur, lacinia est a, ultrices nunc. Morbi semper auctor nibh pharetra elementum. Cras sed nisi eget felis sagittis accumsan in nec ex. Sed convallis sit amet libero eget mollis.

</p>
<p>
Pellentesque vulputate velit in pretium vulputate. Maecenas molestie, magna vel congue egestas, ex enim cursus nunc, vel faucibus leo felis at purus. Fusce auctor efficitur efficitur. Nunc eleifend libero ut quam aliquet scelerisque. Praesent egestas volutpat viverra. Nulla posuere odio ligula, non iaculis justo semper a. Nam id vehicula sem, vitae luctus nunc. Vivamus vel scelerisque odio. Suspendisse at diam vel urna luctus pulvinar. Morbi dictum, eros a vehicula eleifend, quam ante imperdiet diam, a placerat magna lorem in eros. Nunc consequat euismod dictum. In non massa quis neque pharetra sollicitudin et cursus magna. Morbi rhoncus quam vitae est rhoncus facilisis. Suspendisse tincidunt quam molestie odio sollicitudin, vel fringilla neque placerat.
</p>
<p>
Cras sagittis venenatis venenatis. Nam ante leo, dapibus pharetra tempus a, sodales at lacus. Pellentesque hendrerit congue laoreet. Donec eget malesuada eros, eget suscipit sem. Aliquam tempor porta volutpat. Integer mi lectus, fringilla sed facilisis eu, varius a elit. Nam at odio volutpat, elementum enim at, consequat neque. Donec bibendum varius tempus. Proin laoreet nisl eget lacinia sagittis. In consectetur turpis nibh, eleifend convallis nunc mattis sit amet. Vivamus dictum non purus eget blandit. Praesent mattis massa odio, a ultricies nisl elementum quis. Donec ultrices accumsan mauris, et aliquet lacus imperdiet id. Vestibulum vulputate mi quis dolor condimentum, id aliquet quam eleifend. Donec vehicula, velit eget consectetur porttitor, dui sem tincidunt dolor, ut bibendum ex elit quis libero.
</p>
<p>
Phasellus at venenatis ante. In hac habitasse platea dictumst. Morbi elementum, lacus ac semper dictum, erat tellus blandit tortor, id condimentum ligula metus sed nibh. Aliquam dictum turpis vitae velit facilisis hendrerit. Aenean vel suscipit massa, in bibendum quam. Integer pretium quis sapien id molestie. Vestibulum elementum arcu sed turpis suscipit, in condimentum risus mattis. Curabitur euismod feugiat ante vitae interdum. Mauris leo ipsum, suscipit vitae lobortis non, laoreet eget mi. Nam eget pellentesque velit.
</p>
<p>
Phasellus pulvinar ut sapien eget iaculis. Fusce eleifend tortor at tortor eleifend, vitae elementum ligula imperdiet. Mauris vitae odio dolor. Nulla varius, nunc a elementum rutrum, lacus metus fringilla tortor, sed sodales eros lacus vitae risus. Sed luctus viverra diam vel congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et imperdiet lorem. Cras ut volutpat dui. Pellentesque nec elementum nibh, a consequat magna. Sed a tincidunt lacus. Etiam vitae rutrum tortor. Nulla ligula odio, aliquam vitae congue sed, feugiat quis lacus. Nulla lobortis nibh neque, eget blandit erat sollicitudin a. Aliquam dui ligula, varius eget velit ut, porttitor finibus dui. Duis mollis lorem id nulla volutpat sollicitudin.
</p>
<p>
Phasellus pulvinar ut sapien eget iaculis. Fusce eleifend tortor at tortor eleifend, vitae elementum ligula imperdiet. Mauris vitae odio dolor. Nulla varius, nunc a elementum rutrum, lacus metus fringilla tortor, sed sodales eros lacus vitae risus. Sed luctus viverra diam vel congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et imperdiet lorem. Cras ut volutpat dui. Pellentesque nec elementum nibh, a consequat magna. Sed a tincidunt lacus. Etiam vitae rutrum tortor. Nulla ligula odio, aliquam vitae congue sed, feugiat quis lacus. Nulla lobortis nibh neque, eget blandit erat sollicitudin a. Aliquam dui ligula, varius eget velit ut, porttitor finibus dui. Duis mollis lorem id nulla volutpat sollicitudin.
</p>
</div>

<footer class="footer" id="footer">
		<br />
		
	</nav>
</footer>
</div>
</body>

</html>
