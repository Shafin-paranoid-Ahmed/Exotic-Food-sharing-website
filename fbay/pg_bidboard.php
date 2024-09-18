



<!DOCTYPE html>




<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert | Export html Table to CSV & EXCEL File</title>
    <link rel="stylesheet" type="text/css" href="cooking.css">

    <!-- Basic -->
    <!-- Mobile Metas -->
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> foodBay </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>



<body class="sub_page">
    <div class="hero_area">
        <div class="bg-box">
            <img src="images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php">
                        <span>
                        foodBay
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pg_items.php">Food List</a>
                            </li>
                                
                            <li class="nav-item active">
                                <a class="nav-link" href="pg_bidboard.php">Bid Board <span class="sr-only">(current)</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pg_about.php">About Us</a>
                            </li>

                        </ul>
                        <div class="user_option">
                            <a href="" class="user_link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a class="cart_link" href="#">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                    c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                    C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                    c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                    C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                    c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                            <a href="" class="order_online">
                                Bid Now
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

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
                session_start();
                $conn = mysqli_connect("localhost", "root", "", "foodbay");
                if ($conn-> connect_error) {
                    die("Connection Failed:". $conn-> connect_error);
                }

                $sql = "SELECT b.bid_id, i.item_name, i.item_rating, us.name as Sname, b.discounted_price, b.bid_price, uc.name as Cname, b.time_left 
                from bid_board b, item i, supplier s, customer c, user us, user uc 
                where b.item_id = i.item_id and b.customer_id = c.customer_id and c.user_id = uc.user_id and b.supplier_id = s.supplier_id and s.user_id = us.user_id";
                $result = $conn-> query($sql);



                if ($result-> num_rows> 0) {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>" . $row["bid_id"] . "</td><td><a href = 'item.php'>". $row["item_name"] . 
                        "</a></td><td>" . $row["item_rating"] . "</td><td>". $row["Sname"] . 
                        "</td><td>" . $row["discounted_price"] . "</td><td>" .$row["bid_price"] . 
                        "</td><td>" . $row["Cname"] . "</td><td>". $row["time_left"].
                        "</td><td><form action='button_input.php' method='POST'>
                        <input type='text' id='bid' name= 'bidamount' placeholder='Add your bid' required/><button class= 'button' name= 'action' value='addBid'></button></form>
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


   <!-- include("footer.html"); -->
