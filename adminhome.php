<?php
session_start();
include_once 'db.php';
include 'adminheader.php';
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
		header("location:adminhome.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head >
<body id="back" style="width: 100%; height:100%; padding-bottom:20px" >


      
</body>
</html>

<body id="back" style="width: 100%; height:100%; padding-bottom:20px" >

<div style="padding-left: 200px;">
<div id="adivhead">Add Agent Details</div>
<form method="POST">
<div id="agent">
<label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"><br><br>
<label>Agent Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="agname"><br><br>
   <label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="password"><br><br>
   <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email"><br><br>
   <label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone"><br><br>
   <label>Working Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="place"><br><br></div>
   <div id="agentadd"><input type="submit" name="add_agent" Value="Add Agent"></div>
   </form></div>
	</body>
	</html>
	
	
	
	
	