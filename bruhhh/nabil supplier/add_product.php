<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";     // Change if needed
$dbname = "foodbay"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to count the total number of products
$sql = "SELECT COUNT(*) AS total_products FROM item";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Output the total number of products
echo $row['total_products'];

mysqli_close($conn);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $item_name = $_POST['item_name'];
    $item_rating = $_POST['item_rating'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $item_image = $_POST['item_image'];
    $supplier_id = NULL; 

    // SQL query to insert a new product
    $sql = "INSERT INTO item (item_name, item_rating, quantity, price, supplier_id, item_image_place)
            VALUES ('$item_name', $item_rating, $quantity, $price, $supplier_id, '$item_image')";

    if (mysqli_query($conn, $sql)) {
        echo "New product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>