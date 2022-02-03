<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="head.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Header</title>
</head>
<body>
    <!--top area -->
  <div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="profile.php"><i class="fa fa-user"></i> My Account</a></li>
                        
                        <li><a href="signup.php"><i class="fas fa-user-plus"></i> Signup</a></li>
                        <li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
                        <li><a href="admin_log.php"><i class="fas fa-users-cog"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div> 
<!-- End top area -->

    <header>
        <nav class="navbar">
          <div class="branding">
            <h2><a href="main.php" class="branding-logo">Tour<span style="color: rgb(218, 24, 88);">BD</span></a></h2>
          </div>
          <label for="input-hamburger" class="hamburger "></label>
          <input type="checkbox" id="input-hamburger" hidden>
          <ul class="menu">
            <li><a href="main.php" class="menu-link">Home</a></li>
  
            <li><a href="gallery.php" class="menu-link">Gallery</a></li>
            <li><a href="service.php" class="menu-link">Services</a></li>
            <li><a href="hotel.php" class="menu-link">Hotels</a></li>
            <li><a href="air.php" class="menu-link">Airticket</a></li>
            <li><a href="about.php" class="menu-link">About Us</a></li>
            <li><a href="contact.php" class="menu-link">Contact</a></li>
          </ul>
        </nav>
      </header>
<!---->
</body>
</html>