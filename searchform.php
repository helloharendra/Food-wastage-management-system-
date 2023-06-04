<?php
include 'db.php';
$uid2=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM food_details where uid=".$uid2);
$row = mysqli_fetch_array($conn,$result);

?>
<html>
<head>
<link href="astyle.css" rel="stylesheet">
</head>
<div class="spform">
<div class="spimage">
</div>
<form method="POST" action="searchagent.php">
<div class="spname"><label>Place</label><br>
<input name="searchtxt" type="text" id="search"><br></div>
<input type="submit" name="searchbtn" value="search">
<a href="searchagent.php?uid3=<?=$row['uid']?>"></a>

	</div>	
		</form>
		 </html>
