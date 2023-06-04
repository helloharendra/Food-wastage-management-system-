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
<div id="donorhead">
View Donator Details
</div>
<div id="divadonor">
<table border="2">
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>View</th>

<?php
$n = 1;
$result = mysqli_query($conn, "SELECT * FROM registeration");
if (!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?=$n++?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['phone']?></td>
        <td><a href="view_donator.php?uid=<?=$row['uid']?>">View Request</a></td>
        </tr>
        <?php
    }
}
mysqli_close($conn);
?>
</table>
</div>
</div>

</body>
</html>
