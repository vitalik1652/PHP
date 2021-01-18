
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
<a href="index.html">Home screen</a>
<h1> Hi! It's your account</h1>
<h1>write simptoms and choose a doctor  </h1>

<form action="selectDoctor.php" method="get">

    <input type="text" class="form-control" name="problem" id="problem"
           placeholder="write your problem" size="20"> <br><br>

    <select type="text" name="chooseDoctor" class="select_option input_form" id="chooseDoctor" size="">
        <option disabled>choose a doctor</option>
        <option value="okulist">dermatolog</option>
        <option value="trerapist">okulista</option>
        <option value="dentist">ortopedia</option>
        <option value="proctologist">psychologia</option>
    </select>

    <button  class="btn btn-success">send</button> <br><br>
   </form>
<h1> request for a visit</h1><br>

<?php
$patient=$_COOKIE['user'];
$mysql = new mysqli('localhost','root','','patient');
$result = $mysql->query("SELECT * FROM `problems` WHERE `patient` = '$patient' ");
$user = $result->fetch_assoc();
$mysql->close();

if ($user == false){
    echo "you don't have a request.";
}
else {
    echo "Hi" . " " . $user['patient'] . "!" . " You make request for meet with" . " " . $user['doctor'].
        " ".".You have problem with" . " " . "\"" . $user['problem'] . "\"";
}
?>
<br><br>
<h1>registered visit</h1>
    <br>
    <?php
    $patient=$_COOKIE['user'];
    $mysql = new mysqli('localhost','root','','patient');
    $result = $mysql->query("SELECT * FROM `meeting` WHERE `patientName` = '$patient' ");
    $user = $result->fetch_assoc();
    $mysql->close();



    if ($user == false){
        echo "you don't have a registered request.";
    }
    else {
        echo "Hi" . " " . $user['patientName'] . "!" . " You have meeting with" . " " . $user['doctorName'].
            " ".". Date your meeting is" . " " . "\"" . $user['dateMeet'] . "\"";
    }
    ?>
</div>
</body>
</html>