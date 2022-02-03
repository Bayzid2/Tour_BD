

<?php 
if(isset($_POST['submit'])){
	$link = mysqli_connect('localhost','root','','signup_db');

	if (!$link) {die('Connection Fail'.mysqli_error($link));}
    $user_name  = $_POST['user_name'];
    $email = $_POST['email'];
    $contact_num = $_POST['contact_num'];
    $password = $_POST['password'];
    $cpassword =  $_POST['cpassword'];
	

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquary= "select * from users where email ='$email'";
	$query= mysqli_query($link, $emailquary);

	$emailcount = mysqli_num_rows($query);

	if ($emailcount>0) {
		echo "email already exists.";
	}else{
		if ($password === $cpassword) {
			$insertquery = "insert into users(user_name, email,contact_num , password,cpassword) 
            values('$user_name', '$email','$contact_num', '$pass','$cpass')";

			$iquery = mysqli_query($link, $insertquery);

			if ($link) {
			 	?>
				 	<script>
				 		alert("Registration Successfull. Please login.");
				 		location.replace("login.php")	
				 	</script>
				<?php
			}else{
				?>
					<script>
				 		alert("No Inserted")
				 	</script>
				<?php
			 }

		}else{
			?>
					<script>
				 		alert("Password is not match");
				 	</script>
				<?php
		}
	}
	


}
?>

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
    <title>Signupt</title>
</head>
<body>
   <?php include 'header.php';?>
<!---->
    <form method="post" action="" class="login">
        <h1  style="color: blanchedalmond;background-color: none;">Signup</h1>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="user_name" placeholder="User Name">
        </div>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="number" name="contact_num" placeholder="Contact Number">
        </div>
        <div class="field">
          <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password">
        </div>

        <div class="field">
          <span class="fa fa-lock"></span>
          <input type="password" name="cpassword" placeholder="CPassword">
        </div>
        
        <input type="submit" class="submit" name="submit" value="SIGNUP">
        <span class="login-form-copy">Or Signup with</span>
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
        <span class="logn-form-copy">Already have a account <a href="login.php" class="login-form__sign-up">Sign in</a></span>
  </form>

    
<?php include 'footer.php';?>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>

