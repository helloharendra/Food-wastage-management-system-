<?php
include 'db.php';
include 'adminheader.php';
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>

<div style="margin-left: 200px;" >
<div id="madhead">
Agent Message Details
</div>
<div id="madmin">
<table border=2>
<th>S.NO</th>
<th>Agent id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Food</th>
<th>Status</th>
<?php
$n = 1;
$result = mysqli_query($conn, "SELECT * FROM send_message");
while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $n++; ?></td>
        <td><?php echo $row['agid']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['food']; ?></td>
        <td><?php echo $row['status']; ?></td>
    </tr>
    <?php
}
?>
</table>
</div>
</div>

</body>
</html>
