<?php
include_once 'db.php';
include 'agentheader.php';
$usid=$_GET['mid'];
$res=mysqli_query($conn,"select uid,agid,name,email,phone,address,food,status from admin_request where uid=".$usid);
$userRow=mysqli_fetch_array($conn,$res);
if(isset($_POST['send_request']))
{
	
 $uid=$_POST['uid'];
 $agid=$_POST['agid'];
 $uname = mysqli_real_escape_string($conn,$_POST['username']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $phone=mysqli_real_escape_string($conn,$_POST['phone']);
 $address=mysqli_real_escape_string($conn,$_POST['address']);
 $food=mysqli_real_escape_string($conn,$_POST['food']);
 $status=mysqli_real_escape_string($conn,$_POST['status']);
 if(mysqli_query($conn,"INSERT INTO send_message(uid,agid,name,email,phone,address,food,status) VALUES('$uid',' $agid','$uname','$email','$phone','$address','$food','$status')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:agenthome.php");
 }
 else
 {
  ?>
        <script>alert('error occur...');</script>
        <?php
 }
}
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>

	<div id="ahead">
	Send Message To Admin
	</div>
	<div id="admin">
<form method="POST">
<input type="hidden" name="uid" value="<?php echo $userRow['uid'];?>"><br>
<input type="hidden" name="agid" value="<?php echo $userRow['agid'];?>"><br>
<label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"  value="<?php echo $userRow['name'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['email'];?>"><br><br>
<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone" value="<?php echo $userRow['phone'];?>"><br><br>
<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address" value="<?php echo $userRow['address'];?>"><br><br>
<label>Food Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="food" value="<?php echo $userRow['food'];?>"><br><br>
<label>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="status" value="<?php echo $userRow['status'];?>"><br><br></div>
<div id="regdiv1"><input type="submit" name="send_request" Value="Send Request"></div>
 
   
  
   </form>
   </div>
   </div>
</body>
</html>