<?php
include_once 'db.php';
include 'adminheader.php';
$uid=$_GET['uid3'];
$res=mysqli_query($conn,"select agid,agname,agemail,agphone,agplace from add_agent where agid=".$uid );
$userRow=mysqli_fetch_array($conn,$res);
if(isset($_POST['send_request']))
{	
$uid=$_POST['get_option'];
 $agid=$_POST['agid'];
 $uname = mysqli_real_escape_string($conn,$_POST['username']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $phone=mysqli_real_escape_string($conn,$_POST['phone']);
 $address=mysqli_real_escape_string($conn,$_POST['address']);
 
 if(mysqli_query($conn,"INSERT INTO send_donator(uid,agid,agname,agemail,agphone,agplace) VALUES('$uid',' $agid','$uname','$email','$phone','$address')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:adminhome.php");
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
<div id="admindonor">
Send Message To Donor</div>
<div id="donorform">
<form method="POST">
<label>User name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<?php $rs_new = mysqli_query($conn,"SELECT * from food_details"); ?>
<select onchange="fetch_select(this.value);" name="get_option">
  <option value="">Select a User:</option>
  <?php while($row1=mysqli_fetch_array($conn,$rs_new)) { ?>
  <option value="<?= $row1['uid'] ?>"><?= $row1['name']?></option>
  <?php  } ?>
  </select><br>
<input type="hidden" name="agid" value="<?php echo $userRow['agid'];?>"><br>
<label>Agent Name&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"  value="<?php echo $userRow['agname'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['agemail'];?>"><br><br>
<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" name="phone" value="<?php echo $userRow['agphone'];?>"><br><br>
<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address" value="<?php echo $userRow['agplace'];?>"><br><br></div>
<div id="donordiv"><input type="submit" name="send_request" Value="Send Request"></div>
 
   
  
   </form>
</body>
</html>