<?php
include 'db.php';

$usernam=mysqli_real_escape_string($conn,$_GET['usernam']);
$pending = "completed";
mysqli_query($conn,"UPDATE admin_request SET status = '$pending' WHERE name='".mysqli_real_escape_string($conn,$_REQUEST["usernam"])."'");
echo("<script type='text/javascript'>
	alert('successfully Completed')		
	window.location='viewadmin_message.php';
	  </script>");
?>