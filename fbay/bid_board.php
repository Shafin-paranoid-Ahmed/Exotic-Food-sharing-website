<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert | Export html Table to CSV & EXCEL File</title>
    <link rel="stylesheet" type="text/css" href="cooking.css">
</head>



<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Bid Board</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Item <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Rating <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Supplier <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Price <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Bid <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Time left <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Add bid </th>
                        
                    </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "foodbay");
                if ($conn-> connect_error) {
                    die("Connection Failed:". $conn-> connect_error);
                }
            
                $sql = "SELECT b.bid_id, i.item_name, i.item_rating, us.name, b.discounted_price, b.bid_price, uc.name, b.time_left from bid_board b, item i, supplier s, customer c, user us, user uc where b.item_id = i.item_id and b.customer_id = c.customer_id and c.user_id = uc.user_id and b.supplier_id = s.supplier_id and s.user_id = us.user_id";
                $result = $conn-> query($sql);
                if ($result-> num_rows> 0) {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>" . $row["bid_id"] . "</td><td><a href = 'item.php'>". $row["item_name"] . 
                        "</a></td><td>" . $row["item_rating"] . "</td><td>". $row["name"] . 
                        "</td><td>" . $row["discounted_price"] . "</td><td>" .$row["bid_price"] . 
                        "</td><td>" . $row["name"] . "</td><td>". $row["time_left"].
                        "</td><td><form action='button_input.php' method='POST'><input type='text' id='bid' name= 'bidamount' placeholder='Add your bid' required/><button class= 'button' name= 'action' value='addBid'></button></form>
                        </td></tr>";
                    }
                    echo "</table";
                }
                else{
                    echo "bruh";
                    echo "0 result";
                }
            
                $conn-> close();
                ?>
                </thead>

            </table>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>