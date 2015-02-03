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
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Jobs</title>
</head>

<body>
<div class="page">
<header class="banner">
	<img class="company_logo" alt="company logo" src="company-logo.png" /></header>
</div>

<nav class="nav-bar">
<ul style="width: 144px">
	<?php echo "Signed in as: ". $_SESSION['user_name']; ?>
<li><a href="index.php">Home</a></li>
<li><a href="Boards/.index.php">Jobs Posted</a></li>
<li><a href="post.php">Post a Job</a></li>
<li><a href="responses/candidates.php">Candidate Responses</a></li>
<li>Sourcing</li>
</ul>
</nav>


</body>

</html>
