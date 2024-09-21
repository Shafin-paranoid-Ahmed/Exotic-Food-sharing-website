<!DOCTYPE html>

<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bidboard.css">
    <title>Simple Responsive Website in HTML CSS</title>
    <link rel="stylesheet" href="css/home-style.css" />
    <script src="../custom-scripts.js" defer></script>
    <style>
      nav .dropdown button {
        background-color: #fff;
        border: 2px solid #7d2ae8;
        padding: 5px 10px;
        border-radius: 5px;
        color: #7d2ae8;
        cursor: pointer;
        font-size: 12px;
        transition: background-color 0.3s ease, color 0.3s ease;
      }
  
      nav .dropdown button:hover {
        background-color: #7d2ae8;
        color: #fff;
      }
  
      nav .dropdown .content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 100px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        z-index: 1;
        border-radius: 5px;
        padding: 10px 0;
      }
  
      nav .dropdown .content a {
        color: #333;
        padding: 10px 16px;
        text-decoration: none;
        display: block;
      }
  
      nav .dropdown .content a:hover {
        background-color: #7d2ae8;
        color: #fff;
      }
  
      nav .dropdown:hover .content {
        display: block;
      }
    </style>
  </head>
  <body>
    <main>
      <!-- Header Start -->
      <header>
        <nav class="nav container">
          <h2 class="nav_logo"><a href="index.php">FoodBay</a></h2>

          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <li><a href="index.php" class="nav_link">Home</a></li>
            <li><a href="food_list.html" class="nav_link">FoodList</a></li>
            <li><a href="bid_board.php" class="nav_link">bid_board</a></li>
            <li><a href="about_us.html" class="nav_link">About Us</a></li>
            <li><a href="Cart.html" class="nav_link">Cart</a></li>
            <li><a href="login_signup.html" class="nav_link">Login</a></li>
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
      <!-- Header End -->
      <section class= "table__body">
        <table>
          <thead>
            <tr>
              <th> Item id <span class="icon-arrow">&UpArrow;</span></th>
              <th> Name <span class="icon-arrow">&UpArrow;</span></th>
              <th> Rating <span class="icon-arrow">&UpArrow;</span></th>
              <th> Price <span class="icon-arrow">&UpArrow;</span></th>
            </tr>
          <?php
            $conn = mysqli_connect("localhost", "root", "", "foodbay");
            if ($conn-> connect_error) {
                die("Connection Failed:". $conn-> connect_error);
            }
            $sql = "SELECT * from item";
            $result = $conn-> query($sql);
            if ($result-> num_rows> 0) {
                while($row = $result->fetch_assoc()){
                  $item_id = $row['item_id'];
                  echo "<tr><td>" . $row["item_id"] . 
                  "</td><td href = 'popup.php'><a href = `popup.php?id = <?php echo urlencode($item_id); ?>`>"
                  .$row["item_name"]."</a></td><td>" . 
                  $row["item_rating"] . "</td><td>". $row["price"] ."</td>";

                }
              }   
                ?>

      </section>


    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");

      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
        <script>
        const button = document.getElementById('mode-toggle');
        const stylesheet = document.getElementById('stylesheet');

        const currentMode = localStorage.getItem('mode') || 'light';
        stylesheet.setAttribute('href', currentMode === 'light' ? 'css/home-style.css' : 'css/home-style-dark.css');
        button.textContent = currentMode === 'light' ? 'Switch to Dark Mode' : 'Switch to Light Mode';

        button.addEventListener('click', () => {
            const currentMode = localStorage.getItem('mode') || 'light';
            const newMode = currentMode === 'light' ? 'dark' : 'light';
            stylesheet.setAttribute('href', newMode === 'light' ? 'css/home-style.css' : 'css/home-style-dark.css');
            localStorage.setItem('mode', newMode);
            button.textContent = newMode === 'light' ? 'Switch to Dark Mode' : 'Switch to Light Mode';
        });
    </script>
    <style>
    .popup .overlay {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1;
        display: none;
    }
    .popup .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: #fff;
        width: 450px;
        height: 220px;
        z-index: 2;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
        transition: all 300ms ease-in-out;
    }
    .popup .close-btn {
        position: absolute;
        right: 20px;
        top: 20px;
        width: 30px;
        height: 30px;
        background: #222;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
        line-height: 30px;
        text-align: center;
        border-radius: 50%;
        cursor: pointer;
    }
    .popup.active .overlay {
        display: block;
    }
    .popup.active .content {
        transform: translate(-50%, -50%) scale(1);
    }
</style>

<script>
    function openPopup(item_id) {
        var popupWindow = window.open("popup.php?id=" + item_id, "Popup", "width=400,height=300");
        popupWindow.focus();
    }
</script>
  </body>
</html>