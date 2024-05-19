<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Sayara</title>
  <!--Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="assets/images/mainlogo.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>


<body>
<div class="loader"></div>
<!-- Start Switcher -->
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<style type="text/css">
  .banner-section {
    padding-top: 100px;
    padding-bottom: 50px;
  }
  .title h2{
    color: black;
    font-size: 80px;
    text-align: left;
  }
  .title p{
    color:black;
    text-align: left;
    margin-top: 15px;
    margin-bottom: 10px;
  }
  .button{
    margin-top: 25px;
    text-align: left;
  }

  .button2 {
    margin-top: 100px;
    margin-bottom: 25px;
    text-align: center;
  }

  .button .btn{
    border-radius: 40px;
    background: black;
  }

  
  .button2 .btn{
    border-radius: 40px;
    background: white;
    color: black;
    border: 1px solid black;
  }

  .button .btn:hover{
    background:#04dbc0;
    border: 1px solid #04dbc0;
  }

  .button2 .btn:hover{
    background:black;
    color: white;
  }

  .button .btn .angle_arrow i,
  .button2 .btn .angle_arrow i{
    color:black;
  }

  .brand-logos {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 50px;
  }

  .brand-logos .brand img {
    height: 150px;
  }

  .container .care{
    text-align: left;
    color: gray;
    font-size: 20px;
  }
  .container .features{
    color: black;
    font-weight: 600;
    font-size: 70px;
    text-align: left;
    font-weight: ;
  }
  .images h3{
    color: #ffffff;
    font-size: 18px;
    font-weight: 900;
  }
  .service-tag p{
    text-align: center;
    color: gray;
    font-size: 20px;
  }

  .service h3{
    text-align: center;
    font-size: 70px;
    }

  .tag{
    text-align: left;
    color: black;
    font-size: 20px;
    padding-top: 30px;
  }
  .description p{
    text-align: center;
    font-size: 30px;
    padding-top: 30px;
  }


  .car_text{
    color: black;
    font-weight: 800;
  }

  .car_description{
    color: black;
    font-size: 20px;
  }

  .support_service{
    margin-top: 50px;
  }

  .support_service .row {
    display: flex;
    justify-content: space-between;
    gap: 20px;
  }

  .support_service .row .col-sm-4 {
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    border: 1px solid #f1f1f1;
    border-radius: 20px;
  
  }



  .support{
    min-height:65vh;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: stretch;
    padding-bottom: 100px;
  }

  .home {
  height: 100vh;
  position: relative;
}
video {
  object-fit: cover;
  position: absolute;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1;
}
.over{
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  background: rgba(0,0,0,0.6);
}
.home-content {

  width: 600px;
  margin: 0 auto;
  position: relative;
  top: 200px;
  color: #fff;
  z-index: 3;
}
.home-content h1 {
  color: #ffffff;
  font-weight:1000;
  text-align: center;
  text-transform: uppercase;
  font-size: 35px;
  line-height: 1.1;
}
.home-content p{
  color: #e6e6e6;
  width: 800px;
  margin-left: -80px;
  margin-top: 20px;
  margin-bottom: 25px;
}
.home-content h3{
  color: #ffffff;
  text-align: center;
  font-weight: 400;
  margin-top: 25px;
}
.home-content button {
  display: block;
  font-size: 20px;
  border: 1px solid #f1f1f1;
  border-radius: 5px;
  background: #04dbc0;
  color: #fff;
  margin: 50px auto 0;
  padding: 16px 30px;
  cursor: pointer;
}
.home-content button:hover{
  background:#9b51e0;
  border: 1px solid #9b51e0;
}
  .home-content button a{
    text-decoration: none;
    color: #ffffff;
  }
</style>
<section id="banner" class="banner-section">
  <div class="container">
    <div class="title">
      <h2>PREMIUM <br>
        CAR RENTAL <br>
        IN ALGERIA</h2>
      <p>Don't deny yourself the pleasure of driving <br>
      the best premium cars from around <br>
      the world here and now
      </p>  
    </div>
      <div class="button">
       <a href="#cars" class="btn">Explore More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
      </div>
    </div>
    <div class="brand-logos container">
      <div class="brand">
        <img src="assets/images/bentleyLogo.png" alt="bentley">
      </div>
      <div class="brand">
        <img src="assets/images/porsheLogo.png" alt="porshe">
      </div>
      <div class="brand">
        <img src="assets/images/benzLogo.png" alt="benz">
      </div>
      <div class="brand">
        <img src="assets/images/ferrariLogo.png" alt="ferrari">
      </div>
      <div class="brand">
        <img src="assets/images/lamboLogo.png" alt="lamborghini">
      </div>
</div>
</section>

<!-- /Banners --> 
<div class="container" style="margin-top:50px;" id="cars" data-aos="fade-left" data-aos-duration="3000">
  <div class="service-tag"><p>ONLY THE BEST CARS</p></div>
  <div class="service"><h3>Our Vehicle Fleet</h3></div>
  <div class="description"><p>We provide our customers with the most incredible driving emotions.<br><br>
                            That's why we have only world-class cars in our fleet.</p></div>
</div>
<section>
  <div class="container" style="margin-top:-100px" data-aos="fade-up" data-aos-duration="3000">
  <div class="section-padding">
    <div class="row"> 
      
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

          <?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $cnt=1;
          if($query->rowCount() > 0)
          {
          foreach($results as $result)
          {  
          ?>  
<div class="col-list-3">
  <div class="recent-car-list">
    <div class="car-info-box">
      <a href="vehicle-info.php?vhid=<?php echo htmlentities($result->id);?>">
        <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image">
      </a>
    </div>
  </div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
  <div class= "button2">
    <a href="car-listing.php" class="btn">Show All <span class= "angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
  </div>
</div>
</div>
</section>

<section class="support" data-aos="fade-up" data-aos-duration="3000">
  <div class="container">
    <p class="care">TAKING CARE OF EVERY CLIENT</p>
    <h2 class="features">Key Features</h2>
    <p class="tag">We are all about our client's comfort and safety. That's <br>
                  why we provide the best service you can imagine.</p>
  </div>
  <div class="support_service">
  <div class="container" style="margin-top:30px;">
    <div class="row">
      <div class="col-sm-4">
       <img src="assets/images/car1.png"  class="image">
       <h4 class="car_text">Variety of Brands</h4>
       <p class="car_description">We Provide various brands to customers</p>
      </div>
      <div class="col-sm-4" >
        <img src="assets/images/best1.png" class="image">
        <h4 class="car_text" >Best Rate Guranttee</h4>
        <p class="car_description">We have best rated and guaranteed cars</p>
      </div>
      <div class="col-sm-4">
       <img src="assets/images/support.png" class="image">
       <h4 class="car_text">Awesome customer support</h4>
       <p class="car_description">We got awesome customer support</p>
      </div>
      
    </div>
    
  </div>
</div>
</section>
  
 
<!-- /Testimonial--> 
<div class="container" style="margin-top:40px;margin-bottom: -10px;" id="cars">
  <div class="service"><h3>Testimonials</h3></div>
</div>

<?php include('includes/testimonial.php');?>
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top" > <a href="#top" style="background-color: #04dbc0;"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(); 
  </script>
</html>