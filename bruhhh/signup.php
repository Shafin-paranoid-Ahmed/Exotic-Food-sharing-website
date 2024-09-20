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


    $email = $_POST['email'];
    $username = $_POST['uname'];
    $userpassword = $_POST['upassword'];
    $building = $_POST['building'];
    $road = $_POST['road'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    
    if(isset($_POST['supplier'])===TRUE){
        $flag = 2;
        $coo = $_POST['origin'];
        
    }   else{
        $flag = 1;
    }
    
    $sql1 = "INSERT INTO user (user_id, email, name, password, flag, building, road, area, city) 
    VALUES (NULL,'$email','$username', '$userpassword', '$flag','$building','$road','$area','$city')";
    $result = $conn->query(query: $sql1);
    $sql2 = "SELECT `user_id` FROM `user` where `email` = '$email' and `password` = '$userpassword'";
    $result2 = $conn->query(query: $sql2);
    if ( $result === TRUE) {
        $row2 = mysqli_fetch_assoc($result2);
        $user_id = $row2['user_id'];
        $_SESSION["user_id"] = $row2['user_id'];
        $_SESSION["email"] = $email;
        if($flag == 2){
            $sql = "INSERT INTO supplier (supplier_id, country_of_origin, user_id) 
            VALUES (NULL, '$coo','$user_id')";
            $conn->query(query: $sql);
            header("Location: supplier.html");
        }  if($flag == 1){
            $sql = "INSERT INTO customer(customer_id, user_id) 
            VALUES (NULL,'$user_id')";
            $conn->query(query: $sql);
            header("Location: index.html");
        }

    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

?>