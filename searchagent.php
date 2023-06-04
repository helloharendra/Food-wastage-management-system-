<?php
include 'db.php';
$uid4=$_GET['uid3'];
 $result=mysqli_query($conn,"SELECT * FROM food_details where uid=".$uid4);
 $row1 = mysqli_fetch_array($conn,$result);
?>
<html>
<table border=2>
	<?php
if(isset($_POST['searchbtn']))
		 {
			 $searchProduct=$_POST["searchtxt"];
			 $test="agplace like '%$searchProduct%'";
		 } else {
			$test = ""; 
		 }
		 
		 $result=mysql_query("SELECT * FROM add_agent where $test");
		  //$mdValue = 3;?>
		  <th>S.no</th>
		  <th>Agent Name</th>
		  <?php
		 $n=1;
         while($row = mysql_fetch_array($result))
          {	?>
		    <tr>
			<td><?=$n++?></td>
			<td><?=$row['uname']?></a></td>
			<td><a href="add_requestag.php?uid4=<?=$row1['uid']?>">Request</a></td>
		 </tr>
		 <?php
		  }?>
</table>
</html>