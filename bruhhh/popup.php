<!DOCTYPE HTML>
<html>
<head>
    </head>
<body>
    <?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "foodbay");
    if ($conn-> connect_error) {
        die("Connection Failed:". $conn-> connect_error);
    }

    $item_id= isset($_GET['id']);
    echo $item_id;
    
    $sql = "SELECT item_desc, item_image_place, item_name from item where item_id = 8";
    $result = $conn-> query($sql);
    if ($result-> num_rows> 0) {
        while($row = $result->fetch_assoc())
        {   $item_name = $row["item_name"];
            $item_image = $row["item_image_place"];
            $item_desc = $row["item_desc"];
        echo "<div class='overlay' onclick=`togglePopup()`></div>
        <div class='content'><div class='close-btn' onclick=`togglePopup()`>&times;</div><img src = `$item_image`><h1>
        `$item_name`</h1><p>`$item_desc`</p></div>";

    }}
    ?>

</body>

</html>
