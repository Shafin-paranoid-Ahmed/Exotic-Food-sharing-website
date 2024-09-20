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
    $building = $_POST['building'];
    $road = $_POST['road'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $Supplier = $_POST['supplier'];
    if($Supplier == "Syes"){
        $flag = 2;
        $coo = $_POST['origin'];
        
    }   else{
        $flag = 1;
        
    }
    
    $sql1 = "INSERT INTO user (user_id, email, name, password, flag, building, road, area, city) VALUES ('$user_id','$email','$username', '$userpassword', '$flag','$building','$road','$area','$city')";


    if ($conn->query(query: $sql1) === TRUE) {
        $_SESSION["user_id"] = $row['user_id'];
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


""