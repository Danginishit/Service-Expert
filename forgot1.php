<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
  $mail=$_POST['mail'];
  $dbname="serviceexpert";
    $dbuser="root";
    $password="";
    $servername="localhost";
    $conn=new mysqli($servername,$dbuser,$password,$dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }
   $sql="SELECT * FROM `users` WHERE `Email`='$mail'";
   $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $id=$row['id'];
    $mail2=$row['Email'];
    $pass2=$row['Password'];
    $conn->close();
    if($mail2==$mail){
      $to=$mail2;
      $subject="Recover your password";
      $message="Your password is ".$pass2;
      $headers="From: Service@experts.com";
      // ini_set('SMTP',"server.com");
      // ini_set('smtp_port',"25");
      // ini_set('sendmail_from',"danginishit36@gmail.com");
      mail($to,$subject,$message,$headers); 
       
      if(mail($to,$subject,$message,$headers)){
        echo "mail sent successfully";
      } 
      else{
        echo "error";
      }
       header('location:login1.php?id='.$id);
        
    }


}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css1/login.css" rel="stylesheet" type="text/css">
    <link href="bst/css/bootstrap.min.css" rel="stylesheet" >

    <script src="bst/js/bootstrap.bundle.min.js"></script>
    <script src="js1/login.js" type="text/javascript"></script>


    <title>Service Expert</title>
  </head>
  <body>
    
        <!-- Navigation bar -->
<nav class="navbar navbar-light" style="background-color: #ffc02a;">
  <span class="navbar-brand mb-0 h1" style="font-size:30px"><a href="index.html" style="text-decoration:none;"><font color="black">Service Expert</font></span>
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="login.html" style="color:"><button type="button" class="btn btn-outline-primary">LOGIN</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="signup.html"><button type="button" class="btn btn-outline-primary">SIGNUP</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="aboutus.html"><button type="button" class="btn btn-outline-primary">ABOUT</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="profile.html"><button type="button" class="btn btn-outline-primary">PROFILE</button></a>
  </li>
  
</ul>

</div>
</nav>
      <!-- Navigationg Bar End -->
        <!-- login start -->
      
  

    
    <div style="margin:30px auto 30px 0px;">
        <form class="login-form" action="" method="POST">
            <div class="form-header">
                <h3>Forgot Password</h3>
                <!-- <p>Login to access your dashboard</p> -->
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="email" name="mail" class="form-input" placeholder="email@example.com">
            </div>
            <!--Password Input-->
            
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit">Submit</button>
            </div>
            <div class="form-footer">
            Password will send to your Email id 
            </div>
        </form>

      </div>





  

      <!-- login end -->
       

      <!-- footer start -->
<div class="card" style="background-color:#212529">
  <div class="card-body">
   <!--  This is some text within a card body. -->
   <div class="container">
  <div class="row">
    <div class="col-sm">
      <!-- One of three columns -->
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;border:none;">
  
  <div class="card-body">
    <h5 class="card-title">Our Contact</h5>
    <p class="card-text">Home Services company Inc
JC Main Road, Near Silnile tower
Pin-21542 NewYork US.</p><br>
 <p>(+91)0281 7852640
serviceexpert@gmail.com</p>
</p>
  </div>
</div>
    </div>
    
    <div class="col-sm">
      <!-- One of three columns -->
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;border:none;">
  <div class="card-body">
    <h5 class="card-title">Quick Links
</h5>
    <p class="card-text">Terms and conditions</p><p>Privacy policy</p><p>Contact us</p>
  </div>
</div>
    </div>
    
    <div class="col-sm">
      <!-- One of three columns -->
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;border:none;">
              <div class="card-body">
                <p class="card-text">Enter your Email.</br>
                <div class="mb-3"> 
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <button type="button" class="btn btn-info">Submit</button>
              </div>
        </div>
    </div>
  </div>
  
  <figure class="text-center">
  <blockquote class="blockquote">
    <!-- <p>A well-known quote, contained in a blockquote element.</p> -->
  </blockquote>
  <figcaption class="blockquote-footer">
    <p style="color:white;">© Service Expert 2018 All right reserved. </p>
  </figcaption>
</figure>

  
  

    
  </body>
</html>

