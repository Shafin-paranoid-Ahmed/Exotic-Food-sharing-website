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
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $userpassword = $_POST['upassword'];
    $flag = 1;
    $building = $_POST['building'];
    $road = $_POST['road'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $sql1 = "INSERT INTO user (user_id, email,name, password, flag, building, road, area, city) VALUES ('$user_id','$username', '$userpassword', '$flag','$building','$road','$area','$city')";



    if ($conn->query(query: $sql) === TRUE) {
        $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["customer_id"] = $row['customer_id'];
        $_SESSION["email"] = $email;
        header("Location: index.html");

    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

?>


""