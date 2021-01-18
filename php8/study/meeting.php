<?php
$mysql = new mysqli('localhost','root','','patient');
$result = $mysql->query("SELECT * FROM `meeting` ");
$mysql->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meeting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">

</head>
<body>
<a href="index.html">Home screen</a>
<h1>Meetings</h1>
<div>
    <table class="table table-striped table-bordered" >
    <tr>
        <th>N</th><th>patient</th><th>doctor</th><th>date</th>
    </tr>
    <?php
    while($meeting = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $meeting['id']; ?></td><td><?php echo $meeting['patientName']; ?></td>
        <td><?php echo $meeting['doctorName']; ?></td><td><?php echo $meeting['dateMeet']; ?></td>
    </tr>
    <?php } ?>

</table>
</div>

</body>
</html>