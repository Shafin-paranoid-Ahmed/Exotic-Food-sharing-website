

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert | Export html Table to CSV & EXCEL File</title>
    <link rel="stylesheet" type="text/css" href="css/bidboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Website in HTML CSS</title>
    <link rel="stylesheet" href="css/home-style.css" />
    <script src="../custom-scripts.js" defer></script>
</head>
<body>\
    <main>
    <header>
        <nav class="nav container">
          <h2 class="nav_logo"><a href="index.html">FoodBay</a></h2>
          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <li><a href="index.html" class="nav_link">Home</a></li>
            <li><a href="food_list.html" class="nav_link">FoodList</a></li>
            <li><a href="bid_board.php" class="nav_link">bid_board</a></li>
            <li><a href="about_us.html" class="nav_link">About Us</a></li>
            <li><a href="Cart.html" class="nav_link">Cart</a></li>
            <li><a href="login_signup.html" class="nav_link">Login</a></li>
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
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
                include('live.php');
                $conn = mysqli_connect("localhost", "root", "", "foodbay");
                if ($conn-> connect_error) {
                    die("Connection Failed:". $conn-> connect_error);
                }

                $sql = "SELECT b.bid_id, i.item_name, i.item_rating, us.name as Sname, b.discounted_price, b.bid_price, uc.name as Cname, b.upload_time
                from bid_board b, item i, supplier s, customer c, user us, user uc 
                where b.item_id = i.item_id and b.customer_id = c.customer_id and c.user_id = uc.user_id and b.supplier_id = s.supplier_id and s.user_id = us.user_id";
                $result = $conn-> query($sql);



                if ($result-> num_rows> 0) {
                    while($row = $result->fetch_assoc())
                    {   
                        echo "<tr><td>" . $row["bid_id"] . "</td><td><a href = 'item.php'>". $row["item_name"] . 
                        "</a></td><td>" . $row["item_rating"] . "</td><td>". $row["Sname"] . 
                        "</td><td>" . $row["discounted_price"] . "</td><td>" .$row["bid_price"] . 
                        "</td><td>" . $row["Cname"] . "</td><td>" . $_SESSION['time_left'].
                        "</td><td><form action='button_input.php' method='POST'>
                        <input type='text' id='bid' name= 'bidamount' placeholder='Add your bid' required/>
                        <button class= 'button' name= 'action' value='addBid'></button></form>
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

