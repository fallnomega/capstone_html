<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Jobs Posted</title>
  <link rel="stylesheet" href=".style2.css">
  <link href="../style.css" rel="stylesheet"/>
<style type="text/css">
.auto-style1 {
  width: 100%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border: thick double black;
}
</style>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Jobs Posted</title>
</head>

<body>

  <div class="page">
<header class="banner">
  <img class="company_logo" alt="company logo" src="../company-logo.png" /></header>
</div>

<nav class="nav-bar">
<ul style="width: 144px">
<li><a href="../index.html">Home</a></li>
<li><a href=".index.php">Jobs Posted</a></li>
<li><a href="../post.html">Post a Job</a></li>
<li><a href="../responses/candidates.html">Candidate Responses</a></li>
<li>Sourcing</li>
</ul>
</nav>

<div class="content">
<!--   <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu ante euismod tortor consequat aliquet nec quis risus. Fusce et convallis augue, nec convallis lectus. Pellentesque pharetra, enim non sodales iaculis, enim enim molestie nisl, sit amet ornare erat tellus sed justo. Donec iaculis aliquam magna quis faucibus. Nulla eget erat enim. Curabitur vehicula, elit non imperdiet commodo, turpis lectus semper orci, sit amet tempor sem nisl venenatis diam. Fusce sed blandit ligula. Duis sed risus magna. Nam vel vulputate eros. Integer id nisi consectetur, lacinia est a, ultrices nunc. Morbi semper auctor nibh pharetra elementum. Cras sed nisi eget felis sagittis accumsan in nec ex. Sed convallis sit amet libero eget mollis.

</p>  
</div> -->


 
  <div id="container">
  
    <h1>Jobs Posted</h1>
    
    <table class="sortable">
      <thead>
        <tr>
          <th>Filename</th>
          <th>Type</th>
          <th>Size <small>(bytes)</small></th>
          <th>Date Modified</th>
        </tr>
      </thead>
      <tbody>
      <?php
        // Opens directory
        $myDirectory=opendir(".");
        
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
          $namehref=$dirArray[$index];
          
          // Gets Extensions 
          $extn=findexts($dirArray[$index]); 
          
          // Gets file size 
          $size=number_format(filesize($dirArray[$index]));
          
          // Gets Date Modified Data
          $modtime=date("M j Y g:i A", filemtime($dirArray[$index]));
          $timekey=date("YmdHis", filemtime($dirArray[$index]));
          
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
            <td><a href='./$namehref'>$name</a></td>
            <td><a href='./$namehref'>$extn</a></td>
            <td><a href='./$namehref'>$size</a></td>
            <td sorttable_customkey='$timekey'><a href='./$namehref'>$modtime</a></td>
          </tr>");
          }
        }
      ?>
      </tbody>
    </table>
  
    <h2><?php print("<a href='../index.html'>Back to Home page</a>"); ?></h2>
    
  </div>
  </div>
<footer class="footer">
    <br />
    
  </nav>
</footer>
</body>

</html>