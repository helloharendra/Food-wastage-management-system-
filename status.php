<?php
session_start();
include 'db.php';
include 'agentheader.php';
$m1id=$_GET['mid'];
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>

<div id="shead">Work Status</div>
<div id="divf">

<?php
  $n=1;      
        $result=mysqli_query($conn,"SELECT * FROM admin_request where uid=".$m1id);
         while($row = mysqli_fetch_array($conn,$result))
		 {	?>
		  
		    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['name']?><br>
		    Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['email']?><br>
           Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['phone']?><br>
		    Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['address']?><br>
			Food Quantity&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['food']?><br>
			Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['message']?><br>
			status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['status']?><br>
			<div id="stbut"><a href="status_ok.php?usernam=<?=$row['name'] ?>">Ok</a>
          <a href="status_cancel.php?usernam=<?php echo $row['name']; ?>">Cancel</a></div>
			<?php
					  //echo "<pre>"; 
					  //print_r($row);
		    }?>
		 </div>
		 </div>
		 </div>
		 </body>
		 </html>
		 