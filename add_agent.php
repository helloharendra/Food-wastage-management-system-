<?php
session_start();
include_once 'db.php';
if(isset($_POST['add_agent']))
{
 print_r($_POST);
$uname = mysqli_real_escape_string($conn,$_POST['username']);
 $agname=mysqli_real_escape_string($conn,$_POST['agname']);
 $upass = mysqli_real_escape_string($conn,$_POST['password']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $phone=mysqli_real_escape_string($conn,$_POST['phone']);
 $place=mysqli_real_escape_string($conn,$_POST['place']);
 
 
 if(mysqli_query($conn,"INSERT INTO add_agent(uname,agname,password,agemail,agphone,agplace) VALUES('$uname','$agname','$upass','$email','$phone','$place')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:add_agent.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div  id="head">
</div>
<div id="menu">
<a href="add_agent.php">Add Agent</a>
<a href="view_amessage.php">View agent Message</a>
<a href="view_drequest.php">View Donator request</a>
<a href="view_feedback.php">View Feedback</a>
</div>
<form method="POST">

<label>Username&nbsp;</label><input type="text" name="username"><br><br>
<label>Agent Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="agname"><br><br>
   <label>Password&nbsp;</label><input type="password" name="password"><br><br>
   <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email"><br><br>
   <label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone"><br><br>
   <label>Working Place&nbsp;</label><input type="text" name="place"><br><br>
   <div id="regdiv"><input type="submit" name="add_agent" Value="ADD"></div>
   </form>
</body>
</html>