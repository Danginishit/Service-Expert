<?php

    $id=$_GET['id'];
    
    $dbname="serviceexpert";
    $dbuser="root";
    $password="";
    $servername="localhost";
    $conn=new mysqli($servername,$dbuser,$password,$dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }
   $sql="SELECT * FROM `users` WHERE `id`='$id'";
   $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   $x=$row['Name'];
    $conn->close();
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        header('location:editprofile.php?id='.$id);
    }


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bst/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css1/font-awesome.min.css" rel="stylesheet" >
    <link href="css1/about.css" rel="stylesheet" >
    <script src="bst/js/bootstrap.bundle.min.js"></script>
    <link href="css1/profile1.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color: #ffc02a;">
        <span class="navbar-brand mb-0 h1" style="font-size:30px"><a href="index.html" style="text-decoration:none;"><font color="black">Service Expert</font></span>
        <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login1.php" style="color:"><button type="button" class="btn btn-outline-primary">LOGIN</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup1.php"><button type="button" class="btn btn-outline-primary">SIGNUP</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html"><button type="button" class="btn btn-outline-primary">ABOUT</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-primary">PROFILE</button></a>
        </li>
        
      </ul>
      
      </div>
      </nav>
    
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="<?php
                                    if(isset($row['Imagename'])){

                                        echo "files/".$row['Imagename'];   
                                    } 
                                    else{
                                        echo "files\Naruto__Shippuden_Akatsuki_konoha_Pein_1508x1100.jpg";
                                    }
                                    ?>" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                    <?php echo $x; ?>
                                </h5>
                                <h6>
                                    A frequent user
                                </h6>
                                <p class="proile-rating">user profile:<span>Service expert</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                   
                     <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $id; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $x; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $row['Email'];?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $row['Mobile_number']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>12,radheshyam apt. 150 feet ring road,rajkot.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $row['Password']?></p>
                                        </div>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Experience</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Hourly Rate</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>10$/hr</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total Projects</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>230</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>English Level</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Availability</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>6 months</p>
                                        </div>
                                    </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br/>
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>           
    </div>

  <!-- footer part start -->
  <div class="card" style="background-color:#212529">
  <div class="card-body">
   <!--  This is some text within a card body. -->
   <div class="container">
  <div class="row">
    <div class="col-sm">
      <!-- One of three columns -->
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;border:none;">
  
  <div class="card-body"style="background-color:#212529">
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
  <div class="card-body"style="background-color:#212529">
    <h5 class="card-title">Quick Links
</h5>
    <p class="card-text">Terms and conditions</p><p>Privacy policy</p><p>Contact us</p>
  </div>
</div>
    </div>
    
    <div class="col-sm">
      <!-- One of three columns -->
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;border:none;">
              <div class="card-body"style="background-color:#212529">
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
  <!-- footer part end -->



</body>
</html>