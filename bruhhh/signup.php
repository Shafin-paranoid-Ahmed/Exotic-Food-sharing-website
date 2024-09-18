<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodbay";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = NULL;
    $username = $_POST['uname'];
    $userpassword = $_POST['upassword'];
    $flag = 1;
    $building = $_POST['building'];
    $road = $_POST['road'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $sql1 = "INSERT INTO user (user_id, email,name, password, flag, building, road, area, city) VALUES ('$user_id','$username', '$userpassword', '$flag','$building','$road','$area','$city')";



    if ($conn->query(query: $sql) === TRUE) {

        include "user_id.php";

    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

?>


""