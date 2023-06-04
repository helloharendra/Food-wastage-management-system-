<?php
include 'db.php';
include 'adminheader.php';
$uid = $_GET['id'];
$result = mysqli_query($conn, "select uid from food_details where uid=" . $uid);
$userRow = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div id="divahead">
        View Agent Details
    </div>
    <div id="divagent">
        <table border="2">
            <th>S.NO</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
            <th>Action</th>

            <?php
            $n = 1;
            $result = mysqli_query($conn, "SELECT agid, agname, agemail, agphone, agplace FROM add_agent");
            while ($row = mysqli_fetch_array($result)) {
                $userid = mysqli_query($conn, "SELECT uid FROM food_details");
                ?>
                <tr>
                    <td><?= $n++ ?></td>
                    <td><?= $row['agname'] ?></td>
                    <td><?= $row['agemail'] ?></td>
                    <td><?= $row['agphone'] ?></td>
                    <td><?= $row['agplace'] ?></td>
                    <td><a href="add_requestag.php?uid2=<?= $userRow['uid'] ?>">send request to agent</a></td>
                    <td><a href="sendmessage_todonator.php?uid3=<?= $row['agid'] ?>">Send Message to Donator</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
