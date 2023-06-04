<?php
session_start();
include 'db.php';
include 'header.php';
?>

<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body id="slider_container_1"  style="margin-left: 18%; margin-right:15%">
	
<div style="margin-left: 200px;">

<div id="mhead">
		Message From Admin
	</div>
	<div id="divf1">
		<?php    
		$result = mysqli_query($conn, "SELECT * FROM send_donator where uid=".$_SESSION['user']);
		while($row = mysqli_fetch_array($result)) {
		?>
			<div id="divf1c">
				Agent Name&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agname']?><br>
				Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agemail']?><br>
				Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agphone']?><br>
				Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agplace']?><br>
			</div>
		<?php
		}
		?>
	</div>
</div>
</body>
</html>
