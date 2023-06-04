<?php
session_start();
include 'db.php';
include 'agentheader.php';
?>

<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
	<div id="ahead">
		Message From Admin
	</div>
	<div id="atable">
		<?php    
		$result = mysqli_query($conn, "SELECT * FROM admin_request where agid=".$_SESSION['user']);
		while($row = mysqli_fetch_array($result)) {
		?>
			Donor Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['name']?><br>	
			Donor Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['email']?><br>
			Donor Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['phone']?><br>
			Donor Address&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['address']?><br>
			Food Quantity&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['food']?><br>
			Admin Message :&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['message']?><br>
			status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;<a href="status.php?mid=<?=$row['uid']?>"><?=$row['status']?></a><br></div>
			<div id="atablelink"><a href="sendmessage_toadmin.php?mid=<?=$row['uid']?>">Send Message</a><br></div>
		<?php
		}
		?>
</body>
</html>
