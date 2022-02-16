<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){


  $filename=$_FILES['upfile']['name'];
  $filetmp=$_FILES['upfile']['tmp_name'];
  $filedest="files/".$filename;
  if(move_uploaded_file($filetmp,$filedest)){

      $id=$_GET['id'];
      $name=$_POST['firstname'];
      $email=$_POST['email'];
      $phone=$_POST['mobilenum'];
      $pass=$_POST['pass'];
    
    $id=$_GET['id'];
    
    $dbname="serviceexpert";
    $dbuser="root";
    $password="";
    $servername="localhost";
    $conn=new mysqli($servername,$dbuser,$password,$dbname);
    if($conn->connect_error){
          die("connection failed: ".$conn->connect_error);
      }
     $sql="UPDATE `users` SET `Name`='$name',`Mobile_number`='$phone',`Email`='$email',`Password`='$pass',`Imagename`='$filename' WHERE `id`='$id'";
     $result=$conn->query($sql);
      $conn->close();
      header('location:profile2.php?id='.$id);
  }
  else{
    echo "error";
  }
    
   
}
$id=$_GET['id'];
    
    $dbname="serviceexpert";
    $dbuser="root";
    $password="";
    $servername="localhost";
    $conn=new mysqli($servername,$dbuser,$password,$dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }
   $q="SELECT * FROM `users` WHERE `id`='$id'";
   $result=$conn->query($q);
    $row=$result->fetch_assoc();
    $conn->close();
    

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bst/css/bootstrap.min.css" rel="stylesheet" >
    
     <link href="css1/placing.css" rel="stylesheet" >
    <script src="bst/js/bootstrap.bundle.min.js"></script>
   
    	

    </script>

    <title>Service Expert</title>
  </head>
  <body>
    
        <!-- Navigation bar start-->
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
    <!-- navbar end -->

    <!-- placing part start -->
   

 <figure class="text-center">
  <blockquote class="blockquote">
    <h2 style="margin-top:30px">Edit your profile here</h2>
  </blockquote>
</figure>
<div style="margin:30px auto 30px 0px;">
<div class="row1">
  <div class="col-75">
    <div class="abc">
      <form method="POST" enctype="multipart/form-data">
      
        <div class="row1">
          <div class="col-50">
            <h3>Enter your changes here</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $row['Name']; ?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $row['Email']; ?>">
            <label for="mnum"><i class="fa fa-envelope"></i>Phone number</label>
            <input type="text" name="mobilenum" id="mnum" value="<?php echo $row['Mobile_number']; ?>">
            <label for="paa">Password</label>
            <input type="text" name="pass" id="paa" value="<?php echo $row['Password']; ?>">
            <label for="upfiles">Enter your profile photo</label>
            <input type="file" name="upfile" id="upfiles">
           
          </div>

         
          
        </div>
        
        <input type="submit" value="Update" class="btn1">
      </form>
    </div>
  </div>
  
</div>
</div>



  

    <!-- placing part end -->







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