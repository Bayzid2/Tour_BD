

<?php 
if(isset($_POST['save'])){
 $link = mysqli_connect('localhost','root','','signup_db');

 if (!$link) {die('Connection Fail'.mysqli_error($link));}

 $name = mysqli_real_escape_string($link, $_POST['name']);

 $email = mysqli_real_escape_string($link, $_POST['email']);
 $subject = mysqli_real_escape_string($link, $_POST['subject']);
 $message = mysqli_real_escape_string($link, $_POST['message']);
 $insertquery = "insert into contact(name, email,subject , message) 
 values('$name', '$email','$subject', '$message')";
 $iquery = mysqli_query($link, $insertquery);

   if ($iquery) {
     echo ' <script>alert("Contact message sent successfully.");</script>';


   }else{
    
    echo '<script>alert("Update Failed")</script>';
    
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style2.css">
    
   <?php include'script.php';?>
    <title>Document</title>
</head>
<body>
    <?php include 'header.php';?>
    <!---Contact Section-->
<section class="contact mt-3">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">
                Contact Us
            </h2><br>
           
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon-box">
                            <i class="fas fa-share"></i>
                            <h3>Social Profiles</h3>
                            <div class="social-links">
                                <a href="#"class="twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#"class="facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#"class="instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#"class="linkedin">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box mt-4">
                            <i class="fas fa-envelope"></i>
                            <h3>Email Us</h3>
                            <p>tourbd@gmail.com</p>
                        </div>
    
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box mt-4">
                            <i class="fas fa-phone"></i>
                            <h3>24/7 support</h3>
                            <p>+8801234567</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form  method="post" action="">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text"name="name"class="form-control"
                            placeholder="your name">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email"name="email"class="form-control"
                            placeholder="your email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"name="subject"
                        placeholder="subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"name="message"row="6"
                        placeholder="Message"></textarea>
                    </div>
                    <div><input type="submit" class="submit" name="save" value="SEND"></div>
    
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    </section> 
    <!---End of Contact Section-->
    <?php include 'footer.php';?>
</body>
</html>