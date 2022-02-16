<?php
$id=$_GET['id'];
if(isset($id)){
  
}
else{
  echo "First you have to create an account";
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
    <link href="css1/homepage.css" rel="stylesheet" >
    <script src="bst/js/bootstrap.bundle.min.js"></script>
   
    	

    </script>

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
    <a class="nav-link" href="profile2.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-outline-primary">PROFILE</button></a>
  </li>
  
</ul>

</div>
</nav>
      <!-- Navigationg Bar End -->
        <!-- Carousel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Main Moto</h5>
        <p>Our main moto is customer's setisfation</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Services</h5>
        <p>We provede best services for any home services given by us</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next"     type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Carousel End -->

    <!-- Our Services Part start -->
    <figure class="text-center">
  <blockquote class="blockquote">
    <h2 style="margin-top:30px">Our Services</h2>
  </blockquote>
</figure>



  
 
 <div class="container">
  <div class="row">
    <div class="col-sm" >
      <!-- One of three columns -->

      <div class="card" style="width: 18rem;margin-left:20px;margin-bottom:10px;"><span class="crdhover">
  <img src="img/plumber.jpeg" class="card-img-top" alt="...">
  <div class="card-body"style="background-color: #ffc02a;">
    <h5 class="card-title">Plumber</h5>
    <p class="card-text">A plumber is responsible for the system of pipes within a building. This system transports water to faucets and appliances</p>
    <a href="plumber.html" class="btn btn-primary">Hier Now</a>
  </div>
</span>
</div>
    </div>
    <div class="col-sm">
      <!-- One of three columns -->
      <div class="card" style="width: 18rem;margin-left:20px;"><span class="crdhover">
  <img src="img/carpainter.jpeg" class="card-img-top" alt="...">
  <div class="card-body"style="background-color: #ffc02a;">
    <h5 class="card-title">Carpainter</h5>
    <p class="card-text">A carpenter is a person who works with wood. They can make cabinets, build houses, or do other things with wood.</p>
    <a href="carpainter.html" class="btn btn-primary">Hire Now</a>
  </div>
</span>
</div>
    </div>
    <div class="col-sm">
     <!--  One of three columns -->
      <div class="card" style="width: 18rem;margin-left:20px;"><span class="crdhover">
  <img src="img/electric.jpeg" class="card-img-top" alt="...">
  <div class="card-body"style="background-color: #ffc02a;">
    <h5 class="card-title">Electrical</h5>
    <p class="card-text">An electrician is a tradesman specializing in electrical wiring of buildings, transmission lines, stationary machines.</p>
    <a href="electrical.html" class="btn btn-primary">Hire Now</a>
  </div>
</span>
</div>
    </div>
    <div class="col-sm">
     <!--  One of three columns -->
      <div class="card" style="width: 18rem;margin-left:20px;margin-top:10px;"><span class="crdhover">
  <img src="img/pestcontrol.jpeg" class="card-img-top" alt="...">
  <div class="card-body"style="background-color: #ffc02a;">
    <h5 class="card-title">Pestcontrol</h5>
    <p class="card-text">Find Pest Control Service Sydney. Check Out 1000+ Results from Across the Web. Web, Images & Video.</p>
    <a href="pestcontrol.html" class="btn btn-primary">Hire Now</a>
  </div>
</span>
</div>
    </div>
    <div class="col-sm">
     <!--  One of three columns -->
      <div class="card" style="width: 18rem;margin-top:10px;margin-left:20px;"><span class="crdhover">
  <img src="img/homecleaner.jpeg" class="card-img-top" alt="...">
  <div class="card-body"style="background-color: #ffc02a;">
    <h5 class="card-title">Home Cleaning</h5>
    <p class="card-text">Once the entire kitchen has been added to your routine, adding something like the bathroom sink would be an appropriate addition</p>
    <a href="homecleaning.html" class="btn btn-primary">Hire Now</a>
  </div>
</span>
</div>
    </div>
    <div class="col-sm">
     <!--  One of three columns -->
      <div class="card" style="width: 18rem;margin-top:10px;margin-left:20px;"><span class="crdhover">
  <img src="img/painter.jpeg" class="card-img-top" alt="...">
  <div class="card-body"style="background-color: #ffc02a;">
    <h5 class="card-title">Painter</h5>
    <p class="card-text">Painter and printmaker. Former Senior Lecturer, Croydon College of Design and Technology, England. It is so amaizing</p>
    <a href="painter.html" class="btn btn-primary">Hire Now</a>
  </div>
</span>
</div>
    </div>
  </div>
</div>

    <!-- Our Services Part End -->


      <!-- Ourteam part start -->
    <div class="clearfix" style="margin-top:30px;background-color:#0d6efd;">
  <img src="img/ourteam.png" class="col-md-6 float-md-end mb-3 ms-md-3" alt="..."style="margin-top:20px;
  height:250px;width:350px;padding-right:10px;">

  <h3 style="padding-top:20px;padding-left:10px;color:#fff">
    Our Team
  </h3>

  <p style="color:#fff;padding-left:10px;">
    Service Expert provides a platform that allows skilled and experienced professionals to connect with users looking for specific services. All the professionals, though experienced and skilled, undergo intensive training modules before being allowed to list their services on the platform. Once on the platform, our match-making algorithm identifies professionals who are closest to the users’ requirements and available at the requested time and date.Where do you go when you urgently need to fix your air conditioner in the middle of the day? Or what happens when you have an emergency like a leaking pipe in your kitchen/bathroom? Traditionally you will have to search around for your local electrician or plumber which is quite a tedious job to do in urgency. To retaliate for these emergencies, many home service startups have come into existence, leveraging the on-demand economy and on demand home services app development and eliminating the worry of last-minute problems.


  </p>

  


  
</div>
  </div>
</div>

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




