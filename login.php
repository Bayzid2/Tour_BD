<?php
session_start();

		
	if(isset($_POST['login'])){
		$link = mysqli_connect('localhost','root','','signup_db');

	if (!$link) {
		die('Connection Fail'.mysqli_error($link));
	}

	$email = $_POST['email'];
	$password = $_POST['password'];

	$email_search = "select * from users where email= '$email' ";
	$query = mysqli_query($link, $email_search);

	$email_count = mysqli_num_rows($query);

	if ($email_count) {
		$email_pass =mysqli_fetch_assoc($query);

		$db_pass = $email_pass['password'];


		$_SESSION['user_name'] = $email_pass['user_name'];

		$pass_decode = password_verify($password, $db_pass);
		if ($pass_decode) {
			?>
			<script >
				
				location.replace("session.php")					//location should be change
			</script>
			<?php
		}else{
			?>
			<script >
				alert('Password Incorrect!');
			</script>
			<?php
		}
	}else{
		?>
			<script >
				alert('Invalid Email!');
			</script>
			<?php
	}


}


?>

<!DOCTYPE html>
<html lang="en">
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
    <title>Document</title>
</head>
<body>
     <!--top area -->
<?php include'header.php';?>
<!---->
    <form method="post" action="" class="login">
        <h1  style="color: blanchedalmond;background-color: none;">Login</h1>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="field">
          <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password">
        </div>
        <div class="forgot-password">
            <a href="#">Forgot password?</a>
        </div>
        <input type="submit" class="submit" name="login" value="LOGIN">
        <span class="login-form-copy">Or login with</span>
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
        <span class="logn-form-copy">Don't have an account? <a href="signup.php" class="login-form__sign-up">Sign up</a></span>
  </form>

    
<!--footer-->
<?php include'footer.php';?>




    
</body>
</html>