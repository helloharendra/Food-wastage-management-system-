<?php
include 'db.php';

$usernam=mysqli_real_escape_string($conn,$_GET['usernam']);
$pending = "Cancel";
mysqli_query($conn,"UPDATE admin_request SET status= '$pending' WHERE name='".mysqli_real_escape_string($conn,$_REQUEST["usernam"])."'");
echo("<script type='text/javascript'>
	alert('The work is not completed')		
	window.location='viewadmin_message.php';
	  </script>");
?>