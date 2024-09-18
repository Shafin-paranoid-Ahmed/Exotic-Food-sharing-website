<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "foodbay");
if ($conn-> connect_error) {
    die("Connection Failed:". $conn-> connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $bid = $_POST['bidamount'];
    $action = $_POST['action'];
    $email = $_SESSION["email"];
    $customer_id = $_SESSION["customer_id"];
    $user_id = $_SESSION["user_id"];
    // $sql1 = "SELECT u.user_id as user_id, customer_id FROM user u, customer c WHERE email = '$email'";
    // $result1 = mysqli_query($conn, $sql1);
    // $row1 = mysqli_fetch_array($result1);
    // $user_id= $row1['user_id'];
    echo $user_id;
    // $customer_id = $row1['customer_id'];
    if ($bid > 0) {
        if ($action == 'addBid') {
            $sql = "UPDATE bid_board SET bid_price = bid_price + $bid, user_id = '$user_id',customer_id = '$customer_id'";
        }
    }
    if ($conn->query(query: $sql) === TRUE) {
        $conn->close();
        include "pg_bidboard.php";
    } else {
        echo "Error updating bid: " . $conn->error;
    }
}


?>
