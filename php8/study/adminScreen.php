<?php
$mysql = new mysqli('localhost','root','','patient');
$result = $mysql->query("SELECT * FROM `users` ");
$mysql1 = new mysqli('localhost','root','','patient');
$result1 = $mysql1->query("SELECT * FROM `doctors` ");
$mysql1->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <title>Admin Screen</title>
</head>
<body>
<div class="container mt-4">
<a href="index.html">Home screen</a>


<h1>Here you can  make meeting parients with doctors. </h1>

    <form action="adminMakeMeet.php" method="get">
        <button class="btn btn-success">make meeting</button><br><br>

        <select name="patientName" id="patientName" >
            <option disabled>choose patient</option>
            <?php while ($user = $result->fetch_assoc()) { ?>
                <option value ="<?php echo $user['name']; ?>"><?php echo $user['name'];  ?></option>
            <?php } ?>
            <br>
        </select ></p>

        <select name="doctorName" id="doctorName">
            <option disabled>choose doctor</option>
            <?php while ($user1 = $result1->fetch_assoc()) { ?>
                <option value ="<?php echo $user1['specialization']; ?>"><?php echo $user1['specialization'];  ?></option>
            <?php } ?>
        </select></p>
        <input name="date" id="date" type="date" >
        </form>
    <br>
    <h6>new requests for a visit</h6>
    <?php


    $mysql = new mysqli('localhost','root','','patient');
    $result = $mysql->query("SELECT * FROM `problems` ");
    $user = $result->fetch_assoc();
    $mysql->close();

    if ($user == false){
        echo "you don't have request.";
    }
    else {
        echo "From" . " " . $user['patient'] . "." . " Request for a meeting with" . " " . $user['doctor'].
            " ".". Problem with" . " " . "\"" . $user['problem'] . "\"";
    }
    ?>



    <br><br>
    <h1>Here you can  delete patients. </h1>

    <?php
    $mysql = new mysqli('localhost','root','','patient');
    $result = $mysql->query("SELECT * FROM `users` ");
    $mysql->close();
    ?>

    <form action="deletePatient.php" method="get">
            <button class="btn btn-success">delete patient</button>
            <br><br>

            <select name="deletePatient" id="deletePatient" size="1">
                <option disabled>choose patient</option>
                <?php while ($user = $result->fetch_assoc()) { ?>
                    <option value ="<?php echo $user['name']; ?>"><?php echo $user['name'];  ?></option>
                <?php } ?>
            </select></p>

    </form>




    <br><br>
    <h1>Here you can  make meeting parients with doctors. </h1>
    <form action="registration.html">
        <button class="btn btn-success"> add pateient</button>
    </form>

    <br>








</div>
</body>
</html>