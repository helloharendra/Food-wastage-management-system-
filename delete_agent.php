<?php
$agent_id = $_GET['id'];
include 'db.php';

$rs=mysqli_query($conn,"delete from add_agent where agid=".$agent_id );
header("location:viewagent_admin.php");
?>