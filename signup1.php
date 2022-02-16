<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $dbname="serviceexpert";
    $dbuser="root";
    $password="";
    $servername="localhost";
    $name=$_POST['sname'];
    $mnum=$_POST['stel'];
    $email=$_POST['semail'];
    $pass=$_POST['spass'];

    $conn=new mysqli($servername,$dbuser,$password,$dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }
   $sql="INSERT INTO users (Name,Mobile_number,Email,Password) VALUES ('$name','$mnum','$email','$pass')";
   if($conn->query($sql)===TRUE){
         $q="SELECT * FROM `users` WHERE `Email`='$email' AND `Password`='$pass' AND `Mobile_number`='$mnum'";
         $result=$conn->query($q);
          $row=$result->fetch_assoc();
          $id=$row['id'];  
      header('location:index2.php?id='.$id);
   }
   else{
       echo "ERROR: ".$sql."<br>".$conn->error;
   }
   $conn->close();
    
    
    
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
    <link href="css1/signup.css" rel="stylesheet" >

    <script src="bst/js/bootstrap.bundle.min.js"></script>
    <script src="js1/signup.js"></script>



    <title>Service Expert</title>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
  </head>
  <body>
    
        <!-- Navigation bar -->
<nav class="navbar navbar-light" style="background-color: #ffc02a;">
  <span class="navbar-brand mb-0 h1" style="font-size:30px;"><a href="index.html" style="text-decoration:none;"><font color="black">Service Expert</font></span>
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="login.html"><button type="button" class="btn btn-outline-primary">LOGIN</button></a>
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
      
  

    
    <div class="signup"style="margin:30px auto 30px 0px;">
      
        <form class="login-form" name="frm" action="signup1.php" method="post">
          
            <div class="form-header">
                <h3>SignUp Form </h3>
               <!--  <p>Login to access your dashboard</p> -->
            </div>
            <!--Name Input-->
            <div class="form-group">
                <span class="input"><input type="text" name="sname" class="form-input" autofocus pattern="^[A-Z a-z]+" title="Name must be in character." minlength="3" maxlength="12" placeholder="Enter your Name" required></span>
            </div>
            <!--Mobile Input-->
            <div class="form-group">
                <input type="tel" name="stel" class="form-input" placeholder="Enter your mobile number"  pattern="^[0-9]{10}$" title="Enter 10 digit mobile number." maxlength="10" required>
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="email" name="semail"class="form-input" placeholder="Enter your email" pattern="^[a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
                title="Please enter valide email-id." required>
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" name="spass"class="form-input" placeholder="Enter your password" 
                pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}"
                title="Enter minimum 1 upercase latter, 1 lowercase latter, 1 special character and password should be 8 to 20 characters" minlength="8"
                maxlength="20" required>
            </div>
            <!--Confirm password Input-->
            <div class="form-group">
                <input type="password" name="sconfirmpass"class="form-input" placeholder="Enter Confirm password"  title="Must be same with password"required onfocusout="conpass()">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" onclick="check()">SIGN UP</button>
            </div>
            <div class="form-footer">
            If you have an account? <a href="login.html">Sign in</a>
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




