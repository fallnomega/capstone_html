<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../scripts/style.css" rel="stylesheet"/>
   <link rel="stylesheet" href=".style2.css">
   <link rel="stylesheet" href="../scripts/nav-styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../scripts/nav-script.js"></script>
   <title>ATS: Jobs Posted</title>
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
   <li class='active'><a href='.index.php'><span>Jobs Posted</span></a></li>
   <li class='last'><a href='responses/candidates.php'><span>Candidate Responses</span></a></li>

   <li class='last'><a href='../../login.php'><span>Log in</span></a></li>
      <li class='last'><a href='#'><span>Boards</span></a>
    <ul>
      <li class='last fillme'><a href="../Boards/BoardA/boarda.html"><span>Board A</span></a></li>
      <li class='last  fillme'><a href="../Boards/BoardB/boardb.html"><span>Board B</span></a></li>
      <li class='last  fillme'><a href="../Boards/BoardC/boardc.html"><span>Board C</span></a></li>
    </ul>
   </li>
   <li class='last'><a href='../reports/reporting.php'><span>Reports</span></a></li>
</ul>
</div>

<div class="content">
 <div id="container">
  
    <h1>Jobs Posted</h1>
    
    <table class="sortable">
      <thead>
        <tr>
          <th><center>ID</center></th>
          <th><center>Requisition Number</center></th>
          <th><center>Posted by</center></th>
          <th><center>Responses</center></th>
          <th><center>Date Posted</center></th>
        </tr>
      </thead>
      <tbody>
      <?php
      //values for connecting to sql db
      $servername = "localhost";
      $username = "fallnomega";
      $password="abc123";
      $dbname = "jobs";

      //create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      //check connection
      if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT id, name, req, post_date, responses FROM posted";
      $result = $conn->query($sql);

      if($result->num_rows > 0){
        //output data of each row
        while($row = $result->fetch_assoc()){
          $id = $row["id"];
          $req = $row["req"];
          $name = $row["name"];
          $responses = $row["responses"];
          $postdate = $row["post_date"];
          $namehref="jobs/".$req.".xml";
          print("
          <tr>
            <td><center><a href='./$namehref'>$id</a></center></td>
            <td><center><a href='./$namehref'>$req</a></center></td>
            <td><center><a href='./$namehref'>$name</a></center></td>
            <td><center><a href='./$namehref'>$responses</a></center></td>
            <td><center><a href='./$namehref'>$postdate</a></center></td>
          </tr>");
        }
      }
      else{
        echo "0 results";
      }
      $conn->close();
      ?>
      </tbody>
    </table>
    <form action="../scripts/deleteReq.php" method="post">
    To delete a job posting, please entere the requisition number: <input type="text" id="deletion" name="deletion"/>   <input type="submit" value="Delete"/>
  </form><br/><br/><br/>
  
    <h2><a href='../index.php'>Back to Home page</a></h2>
    
  </div>

</div>
<footer class="footer" id="footer">
<br/>

</footer>
</div>
</body>
<html>
