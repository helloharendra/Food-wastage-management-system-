<?php
session_start();
include 'header.php';
include_once 'db.php';
$res=mysqli_query($conn,"select uid,name,email,phone from registeration where uid=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
if(isset($_POST['send_request']))
{
 $uid=$_POST['uid'];
 $uname = mysqli_real_escape_string($conn,$_POST['username']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $phone=mysqli_real_escape_string($conn,$_POST['phone']);
 $address=mysqli_real_escape_string($conn,$_POST['address']);
 $food=mysqli_reali_escape_string($conn,$_POST['food']);
 
 
 if(mysqli_query($conn,"INSERT INTO food_details(uid,name,email,phone,address,av_food) VALUES('$uid','$uname','$email','$phone','$address','$food')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:add_fdetails.php");
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
<body id="back" style="width: 100%; height:100%; padding-bottom:20px">
<div style="margin-left: 200px;">
<div id="divback">
      
<div id="divhead">Donate Food</div>
<form method="POST">
<div id="divfood">
<input type="hidden" name="uid" value="<?php echo $userRow['uid'];?>"><br>
<label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"  value="<?php echo $userRow['name'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['email'];?>"><br><br>
<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone" value="<?php echo $userRow['phone'];?>"><br><br>
<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address"><br><br>
<label>Food Quantity&nbsp;&nbsp;</label><input type="text" name="food"><br><br></div> <div id="fooddiv"><input type="submit" name="send_request" Value="Send Request"></div>
</form>
</div></div>
</body>
</html>