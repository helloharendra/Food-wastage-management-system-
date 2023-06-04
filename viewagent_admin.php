<?php
include 'db.php';
include 'adminheader.php';
?>

<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>

<div style="margin-left: 200px;">
<div id="divvhead" ">
View Agent Details
</div  >
  <div id="divvagent" >
<table border="2">
  <tr>
    <th>S.NO</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Action</th>
  </tr>

<?php
$n = 1;
// Fetch data from the "add_agent" table
$result = mysqli_query($conn, "SELECT * FROM add_agent");
while ($row = mysqli_fetch_array($result)) {
?>
  <tr>
    <td><?php echo $n++; ?></td>
    <td><?php echo $row['agname']; ?></td>
    <td><?php echo $row['agemail']; ?></td>
    <td><?php echo $row['agphone']; ?></td>
    <td><?php echo $row['agplace']; ?></td>
    <td><a href="delete_agent.php?id=<?php echo $row['agid']; ?>">Delete</a></td>
  </tr>
<?php
}
?>
</table>
</div>
</div>
</body>
</html>
