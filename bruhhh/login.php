<?php
session_start();
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
    $password = $_POST['password'];
    $sql = "SELECT u.user_id as user_id, u.email, u.password, c.customer_id  FROM user u, customer c WHERE email = '$email' AND password = '$password' and c.user_id = u.user_id";
    $result = $conn->query(query: $sql);
    $row = mysqli_fetch_assoc($result);
    if ($result->num_rows > 0) {
        //echo "login successfull";
        // $_SESSION["user_name"] = $conn->query(query: "SELECT name FROM user WHERE email = '$email' AND password = '$password'");
        $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["customer_id"] = $row['customer_id'];
        $_SESSION["email"] = $email;
        header("Location: index.php");
        $conn->close();
    } else {
        header("Location: message.html");
        $conn->close();
    }
}
?>
