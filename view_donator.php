<?php
include 'db.php';
include 'adminheader.php';
$usid = $_GET['uid'];
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div style="margin-left: 200px;">
<div id="donorhead">
Donator Request Details
</div>
<div id="donorrequest">
<table border="2">
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Food Quantity</th>

<?php
$n = 1;
$result = mysqli_query($connection, "SELECT * FROM food_details WHERE uid = '$usid'");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $n++ . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['av_food'] . "</td>";
        echo "<td><a href='view_agent.php?id=" . $row['uid'] . "'>View Agent</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No requests found</td></tr>";
}
?>
</table>
</div></div>
</body>
</html>
