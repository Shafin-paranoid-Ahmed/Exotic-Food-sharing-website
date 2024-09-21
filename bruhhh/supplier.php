<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head class="head">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link id="stylesheet" rel="stylesheet" href="css/home-style.css" />
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
          <h2 class="nav_logo"><a href="supplier.php">FoodBay</a></h2>
          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <button id="mode-toggle">Switch to Dark Mode</button>
            <li>
              <div class="dropdown">
                <button>USER</button>
                <div class="content">
                  <a href="#"><?php echo $_SESSION['user_name'];?></a>
                  <a href="#"><?php echo $_SESSION['email'];?></a>
                  <a href="logout.php">LOGOUT</a>
                </div>
              </div>
            </li>
            <li><a href="supplier.php" class="nav_link">Home</a></li>
            <li><a href="food_list.php" class="nav_link">FoodList</a></li>
            <!-- <li><a href="bid_board.php" class="nav_link">bid_board</a></li> -->
            <!-- <li><a href="about_us.html" class="nav_link">About Us</a></li> -->
            <!-- <li><a href="Cart.html" class="nav_link">Cart</a></li> -->
            <li><a href="login_signup.html" class="nav_link">Login</a></li>
            
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>

      </header>
      <!-- Header End -->
      <!-- Hero Start -->
      <section class="hero">
        <div class="row container">
          <div class="column">
            <h2>Top free tool and extension to <br />radiply grow you business</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, architecto? Consectetur enim obcaecati velit quibusdam iure, perspiciatis accusantium, voluptatibus possimus cum voluptates dolorum optio ab vitae. Praesentium voluptas quia voluptates at aperiam aliquid vitae autem!</p>
            <div class="buttons">
              <button class="btn" href="Supplier_Upload.php">Upload</button>
              <button class="btn" href = "food_list.php">View Item list</button>
            </div>
          </div>
          <div class="column">
            <img src="images/hero.png" alt="heroImg" class="hero_img" />
          </div>
        </div>
        <img src="images/bg-bottom-hero.png" alt="" class="curveImg" />
      </section>
      <!-- Hero End-->
    </main>

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
  </body>
</html>
