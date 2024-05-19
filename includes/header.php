
<header>
  
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <?php if($_SESSION['login']){?>
      <div class="header_wrap">
        <div class="user_login" style="margin-top:20px;border:none">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#000000; font-weight:600;">
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true" style="color:#04dbc0;margin-left: 10px;"></i></a>

           <ul class="dropdown-menu" style="margin-top:28px;background: rgba(255,255,255,0.04); box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.25);border:1px solid #cccccc;transition: 5s;"> 
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php" style="font-size:14px">Profile Settings</a></li>
              <li><a href="update-password.php" style="font-size:14px">Update Password</a></li>
            <li><a href="my-booking.php" style="font-size:14px">My Cars</a></li>
            <li><a href="logout.php" style="font-size:14px">Sign Out</a></li>

            <?php } else { ?>
            <!-- <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal" style="font-size:13px">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal" style="font-size:13px">Update Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal"  style="font-size:13px">My Booking</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal"  style="font-size:13px">Sign Out</a></li> -->
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <style type="text/css">
          
        </style>
        <div class="header_search" style="">
             

        </div>
      </div>
      <?php } else { ?>
         <?php } ?>

      <style type="text/css">
  
        #navigation{
          height: 100px;
          display: flex;
          justify-content: center;
          align-items: center;
          
        }

        .book-now-link:hover {
    background-color: white;
    color: black;
}

        .navbar-nav {
          color: #000000;
          font-weight: 600;
          display: flex;
          justify-content: center;
          align-items: center;
          
        }
        .dropdown-menu li a {
            font-size: 12px;
            color: #000000;
          }
          .fa-phone{
             color: #ffffff;
            margin: 3px;
            font-size: 16px;
          }
          .fa-map-marker{
            color: #ffffff;
            margin: 3px;
            font-size: 16px;
          }
          .user_login{
            margin-top:15px;
          }
          .header_search{
            margin-top:5px;
            margin-left:30px;
          }
          .login_button{
            margin-top: -10px;
            background: #04dbc0;
            padding:10px;
            width: 130px;
            text-align:center;
            justify-content: center;
          }
          .dropdown-menu{
            background: rgba(255,255,255,0.04);
            box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.25);
            border:1px solid #cccccc;
            transition: 5s;
          }

      </style>
      <div class="collapse navbar-collapse" id="navigation">

        <ul class="nav navbar-nav"  >
          <li class="logo"><a href="index.php"><h4><b>Sayara</b></h4></a></li>
          
          <li><a href="index.php" style="margin-left:450px;">Home</a></li>
          <li><a href="car-listing.php" class="book-now-link" style="font-size: 14px; background-color: black; border-radius: 30px; color: white; padding: 10px 20px;">Book Now</a></li>

          <li><a href="contact-us.php">Contact Us</a></li>
           <?php   if(strlen($_SESSION['login'])==0)
  {
?>
<li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Login</a></li>

<?php }
else{
 } ?>
 <?php   if(strlen($_SESSION['login'])==0)
  {
?>
<li><a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup</a></li>


<?php }
else{
 } ?>
        <!-- <li><a href="car-listing.php">Book Cars</a></li>-->
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
