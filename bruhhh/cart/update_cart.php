<?php
// Include your database connection file
include('db_connection.php');

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['phone']) && isset($data['case'])) {
    $phoneCount = $data['phone'];
    $caseCount = $data['case'];
    $total = $data['total'];

    // Assuming you have a table called 'cart' to store the cart information
    $sql = "INSERT INTO cart (customer_id, phone_count, case_count, total_price) VALUES (?, ?, ?, ?)";
    
    // Prepare statement
    $stmt = $conn->prepare($sql);
    
    // Assuming you have a session with user info
    session_start();
    $customerId = $_SESSION['customer_id']; // or however you get the customer ID
    
    $stmt->bind_param("iiis", $customerId, $phoneCount, $caseCount, $total);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
}

$conn->close();
?>
