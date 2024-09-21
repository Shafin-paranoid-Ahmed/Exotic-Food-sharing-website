<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head class="head">
  <link rel="stylesheet" href="css/home-style.css" />
    <link rel="stylesheet" href="css/logstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li><a href="index.php" class="nav_link">Home</a></li>
            <li><a href="food_list.php" class="nav_link">FoodList</a></li>
            <li><a href="bid_board.php" class="nav_link">bid_board</a></li>
            <li><a href="about_us.html" class="nav_link">About Us</a></li>
            <li><a href="Cart.html" class="nav_link">Cart</a></li>
            <li><a href="login_signup.html" class="nav_link">Login</a></li>
            
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>

      </header>
      <!-- Header End -->
  <div class="container">
    <!-- <input type="checkbox" id="flip"> -->
    <!-- <div class="cover">
      <div class="front">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <div class="text">
          <span class="text-1">Looking For Some Aesthetic Food?</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div> -->

    <div class="forms">
        <div class="form-content">
          <!-- <div class="login-form">
            <div class="title">Login</div>
          <form action="upload.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sign up now</label></div>
            </div>
        </form>
      </div> -->

        <div class="signup-form">
          <div class="title">Upload</div>

        <form action="upload.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <input type="text" name="iname" placeholder="Enter your item name" required>
              </div>
              <div class="input-box">

                <input type="text" name="quantity" placeholder="Enter your item quantity" required>
              </div>

              <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <input type="text" name="price" placeholder="Enter your item price" required>
              </div>

              <div class="input-box">
                <input type="file" name="image" placeholder="Enter your image" >
              </div>

              <div class="input-box">
                <input type="text" name="description" placeholder="Enter your item description" required>
              </div>

<!-- 
              <div>
                <p><input type="checkbox" name="supplier" value="Syes">  Supplier?  </p>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="origin" placeholder="Enter your country" required>
              </div> -->
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <!-- <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div> -->
      </form>
    </div>
    </div>
    </div>
  </div>

</body>
</html>