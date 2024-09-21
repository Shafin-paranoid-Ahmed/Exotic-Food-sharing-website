
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodbay";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["submit"] == "POST") {
    $item_name = $_POST['iname'];
    $quantity = $_POST['quantity'];
    $item_price = $_POST['price'];
    if (isset($_POST['submit'])) {
        $file_name = $_FILES['image']['iname'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = 'images/'.$file_name;
        $query = mysqli_query($conn, "INSERT into item (item_image_place) values ('$file_name')");
    }

    $description = $_POST['description'];
    $item_rating = $_POST['rating'];
    $email = $_POST['email'];
    $sql1 = "SELECT u.user_id as user_id, s.supplier_id as s_id 
    from user u, supplier s where u.email = `$email` and u.user_id = s.user_id";
    $result1 = $conn->query($sql1);
    $row = $result1->fetch_assoc();
    $supplier_id = $row['s_id'];
    $sql =  "INSERT INTO  item(item_id, item_name, item_rating, quantity, price, supplier_id,item_image_place, item_desc) 
            VALUES (NULL, '$item_name','0', '$quantity', '$item_price', '$supplier_id', '$item_image', '$item_desc')";
    $result2 = $conn->query($sql);
    if ($result2 === TRUE){
        header("location: supplier.php");
    } else {
        echo "Error: " . $conn->error;
    }


}
    
?>