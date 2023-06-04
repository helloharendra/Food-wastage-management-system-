<?php
include 'db.php';
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="head"></div>
<div id="menu">
<a href="viewadmin_message.php">View Message</a>
<a href="send_message.php">Send Message</a>
<a href="logout.php">Logout</a>
</div>
<div id="divf"><h2>Donator Requset Details</h2>
<table border=2>
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Message</th>
<?php
  $n=1;      
        $result=mysqli_query($conn,"SELECT * FROM admin_request");
         while($row = mysqli_fetch_array($conn,$result))
		 {	?>
		   <tr>
		   <td><?=$n++?></td>
		    <td><?=$row['name']?></td>
		    <td><?=$row['email']?></td>
           <td><?=$row['phone']?></td>
		    <td><?=$row['address']?></td>
			<td><?=$row['message']?></td>
			
			<?php
					  //echo "<pre>";
					  //print_r($row);
		    }?>
		 </tr>
		 </table>
		 </div>
		 </body>
		 </html>
		 