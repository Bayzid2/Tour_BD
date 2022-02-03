


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="lin.css">
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
    <title>Update</title>
</head>
<body>
  
<!---->
    <form method="post" action="" class="login">
        <h1  style="color: blanchedalmond;background-color: none;">Update</h1>
        <?php 
					$link = mysqli_connect('localhost','root','','signup_db');
					if (!$link) {die('Connection Fail'.mysqli_error($link));}


					$ids = $_GET['id'];

					$showquery ="select * from users where id ={$ids}";

					$showdata = mysqli_query($link, $showquery);

					$arrdata = mysqli_fetch_array($showdata);


					if(isset($_POST['update'])){
						$idupdate = $_GET['id'];

						$user_name = mysqli_real_escape_string($link, $_POST['user_name']);
						$email = mysqli_real_escape_string($link, $_POST['email']);
						$contact_num = mysqli_real_escape_string($link, $_POST['contact_num']);
						$password = mysqli_real_escape_string($link, $_POST['password']);
                        $cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);

						$updatequery = "update users set id='$idupdate', user_name ='$user_name', email='$email', contact_num= '$contact_num', password= '$password', cpassword= '$cpassword' where id= '$idupdate'";

						$iquery = mysqli_query($link, $updatequery);

								if ($iquery) {
									 echo '	<script>alert("Update Successfull.");
                                     location.replace("display_users.php")</script>';
                                     


								}else{
									
									echo '<script>alert("Update Failed")</script>';
									
								 }


					}
				?>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="user_name" placeholder="User Name" value="<?php echo $arrdata['user_name']; ?>">
        </div>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="email" name="email" placeholder="Email" value="<?php echo $arrdata['email']; ?>">
        </div>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="number" name="contact_num" placeholder="Contact Number" value="<?php echo $arrdata['contact_num']; ?>">
        </div>
        <div class="field">
          <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password" value="<?php echo $arrdata['password']; ?>">
        </div>

        <div class="field">
          <span class="fa fa-lock"></span>
          <input type="password" name="cpassword" placeholder="CPassword"value="<?php echo $arrdata['cpassword']; ?>">
        </div>
        
        <input type="submit" class="submit" name="update" value="UPDATE">
        <span class="login-form-copy">Follow Us</span>
        <div class="social-icons">
            <div class="social-icon facebook">
                <span class="fa fa-facebook"></span>
            </div>
            <div class="social-icon instagram">
              <span class="fa fa-instagram"></span>
          </div>
          <div class="social-icon twitter">
              <span class="fa fa-twitter"></span>
          </div>
          <div class="social-icon google">
              <span class="fa fa-google"></span>
          </div>
          <div class="social-icon linkedin">
              <span class="fa fa-linkedin"></span>
          </div>
        </div>
  </form>

    
<?php include 'footer.php';?>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>

