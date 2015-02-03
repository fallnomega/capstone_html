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
<link href="../../scripts/style.css" rel="stylesheet"/>
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
<meta content="en-us" http-equiv="Content-Language" /><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Candidate Responses</title>

<script src="../../scripts/jquery.min.js">    </script>
<script src="../../scripts/respond.js"></script>

</head>

<body>
<div class="page">
<header class="banner">
	<img class="company_logo" alt="company logo" src="../company-logo.png" /></header>
</div>

<nav class="nav-bar">
<ul style="width: 144px">
  <?php echo "Signed in as: ". $_SESSION['user_name']; ?>
<li><a href="../../index.php">Home</a></li>
<li id="navs">
  <a id="navs" href="../.index.php">Jobs Posted</a>
  <ul>
    <li><a href="candidates.php">Candidate Responses</a></li>
  </ul>
</li>
<li><a href="../../post.php">Post a Job</a></li>

<li>Sourcing</li>
<li id="navs" ><a href="../../../login.php">Log in</a></li>
</ul>
</nav>

<div class="applied content" id="applied">



    <table class="sortable">
      <thead>
        <tr>
          <th>Requisition Number</th>
          <th>Posted by</th>
          <th>Posted on</th>
        </tr>
      </thead>
      <tbody>
      <?php
        // Opens directory
        $dire = "../jobs/";
        $myDirectory=opendir($dire);
        
        // Gets each entry
        while($entryName=readdir($myDirectory)) {
          $dirArray[]=$entryName;
        }
        
        // Finds extensions of files
        function findexts ($filename) {
          $filename=strtolower($filename);
          $exts=split("[/\\.]", $filename);
          $n=count($exts)-1;
          $exts=$exts[$n];
          return $exts;
        }
        
        // Closes directory
        closedir($myDirectory);
        
        // Counts elements in array
        $indexCount=count($dirArray);
        
        // Sorts files
        sort($dirArray);
        
        // Loops through the array of files
        for($index=0; $index < $indexCount; $index++) {
        
          // Allows ./?hidden to show hidden files
          if($_SERVER['QUERY_STRING']=="hidden")
          {$hide="";
          $ahref="./";
          $atext="Hide";}
          else
          {$hide=".";
          $ahref="./?hidden";
          $atext="Show";}
          if(substr("$dirArray[$index]", 0, 1) != $hide) {
          
          // Gets File Names
          $name=$dirArray[$index];
          $namehref="jobs/".$dirArray[$index];
          
          // Gets Extensions 
          $extn=findexts($dirArray[$index]); 
          
        
          // Gets Date Modified Data
          $modtime=date("M j Y g:i A", filemtime("../jobs/".$dirArray[$index]));
          $timekey=date("YmdHis", filemtime("../jobs/".$dirArray[$index]));

          //get recruiter name

          if(file_exists('../jobs/'.$name))
          {
            $xml = simplexml_load_file("../jobs/".$name) or die("Error:Cannot find file");
            $recruiterName= $xml->name;
          }
          else
          {
            $recruiterName = "N/A";
            echo "File not found!";
          }

          
          // Prettifies File Types, add more to suit your needs.
          switch ($extn){
            case "png": $extn="PNG Image"; break;
            case "jpg": $extn="JPEG Image"; break;
            case "svg": $extn="SVG Image"; break;
            case "gif": $extn="GIF Image"; break;
            case "ico": $extn="Windows Icon"; break;
            
            case "txt": $extn="Text File"; break;
            case "log": $extn="Log File"; break;
            case "htm": $extn="HTML File"; break;
            case "php": $extn="PHP Script"; break;
            case "js": $extn="Javascript"; break;
            case "css": $extn="Stylesheet"; break;
            case "pdf": $extn="PDF Document"; break;
            
            case "zip": $extn="ZIP Archive"; break;
            case "bak": $extn="Backup File"; break;
            
            default: $extn=strtoupper($extn)." File"; break;
          }
          
          // Separates directories
          if(is_dir($dirArray[$index])) {
            $extn="&lt;Directory&gt;"; 
            $size="&lt;Directory&gt;"; 
            $class="dir";
          } else {
            $class="file";
          }
          
          // Cleans up . and .. directories 
          if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;";}
          if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
          
          // Print 'em
          print("
          <tr class='$class'>
            <td><a href='candidates_old.php?varname=$name'>$name</a></td>
            <td><a href='../$namehref'>$recruiterName</a></td>
            <td sorttable_customkey='$timekey'><a href='../$namehref'>$modtime</a></td>
          </tr>");
          }
        }
      ?>
      </tbody>
    </table>


</div>

<footer class="footer">
		<br />
		
	</nav>
</footer>
</body>

</html>
