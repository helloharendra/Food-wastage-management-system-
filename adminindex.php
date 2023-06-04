<?php
session_start();
include_once 'db.php';

if (isset($_POST['btn_submit'])) {
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $upass = mysqli_real_escape_string($conn, $_POST['upass']);
  
  // Use the correct column names in the query
  $res = mysqli_query($conn, "SELECT * FROM admin WHERE aname='$uname' AND apass='$upass'");
  $row = mysqli_fetch_array($res);

  if ($row) { // Check if the row exists
    $_SESSION['user1'] = $row['uname'];
    header("Location: adminhome.php");
    exit(); // Add exit after redirecting to prevent further execution
  } else {
    // Display an error message using JavaScript alert
    echo '<script>alert("Wrong details");</script>';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <meta name="keywords" content="slideman, sliderman.js, javascript slider, jquery, slideshow, effects" />
  <meta name="description" content="Sliderman.js - will do all the sliding for you :)" />
  <style type="text/css">
    * { margin: 0; outline: none; }
    /* ... CSS styles ... */
  </style>
  <script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sliderman.css" />
  <link href="style.css" rel="stylesheet">
</head>
<body style="background-color: cyan;">
  <!-- ... HTML code ... -->
 <div style="margin-left: 200px; margin-top:200px">
 <form method="POST">
    <div id="lbackimage">
      <div id="loginback">
        <div id="loginhead">
          Login
        </div>
        <div id="loginarea">
          <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" required/><br><br>
          <label>Password</label> &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="upass" required/>
          <div id="dbutton1">
            <input type="submit" name="btn_submit" value="LOGIN">
          </div>
        </div>
      </div>
    </div>
  </form>
 </div>
</body>
</html>
