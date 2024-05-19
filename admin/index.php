<?php
  session_start();
  include('includes/config.php');
  if(isset($_POST['login'])) // If admin click on login button
  {
    $username=($_POST['username']); // Get the username
    $password=($_POST['password']); // Get the password
    $sql ="SELECT UserName,Password FROM admin WHERE UserName=:username and Password=:password"; // SQL query to check if the username and password are in the db
    $query= $dbh -> prepare($sql); // Prepare the query
    $query-> bindParam(':username', $username, PDO::PARAM_STR); // Bind the parameters
    $query-> bindParam(':password', $password, PDO::PARAM_STR); // Bind the parameters
    $query-> execute(); // Execute the query
    $results=$query->fetchAll(PDO::FETCH_OBJ); // Fetch the results returned by the query and stores them as objects in the $results variable.
    if($query->rowCount() > 0) { // If the query returns more than 0 rows
      $_SESSION['alogin']=$_POST['username']; // Store the username in the session
      echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>"; // Redirect to the dashboard
    } else {
      echo "<script>alert('Invalid Details');</script>"; // If the query returns 0 rows, display an alert
    }
  }
?>
<style type="text/css"> /* CSS for the login page*/
  

  .bg-img{
    background: url('img/vehicleimages/loginBackground.jpg');
    height: 100vh;
    background-size: cover;
    background-position: center;
  }

  .bg-img:after{ 
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,0.3);
  }

.content{
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 500px;
  transform: translate(-50%,-50%);
  background: rgba(255,255,255,0.04); 
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
  border-radius: 15px;
  }
  .content header{
    color: white;
    font-size: 33px;
    font-weight: 700;
    margin: 0 0 35px 0;
    font-family: 'Montserrat',sans-serif;
    text-shadow: 0 0 10px #000;
  }

.field{
  position: relative;
  height: 45px;
  width: 100%;
  display: flex;
  background: white;
  border-radius: 25px;
}

.field span{ 
  color: black;
  width: 40px;
  line-height: 45px;
}

.field input{
  height: 100%;
  width: 100%;
  background: transparent;
  border: none;
  outline: none;
  color: black;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}

.space{
  margin-top: 16px;
}
.show{
  position: absolute;
  right: 13px;
  font-size: 13px;
  font-weight: 700;
  color: #222;
  display: none;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.pass-key:valid ~ .show{
  display: block;
}
.pass{
  text-align: right;
  margin: 10px 0;
}
.pass a{
  color: white;
  text-decoration: none;
  font-family: 'Poppins',sans-serif;
}
.pass:hover a{
  text-decoration: underline;
}
.field input[type="submit"]{
  background: black;
  color: white;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
  border-radius: 25px;
}
.field input[type="submit"]:hover{
	transition: 1s;
  background: #C36241;
}
.login{
  color: white;
  margin: 20px 0;
  font-family: 'Poppins',sans-serif;
}
.links{
  display: flex;
  cursor: pointer;
  color: white;
  margin: 0 0 20px 0;
}
.facebook,.instagram{
  width: 100%;
  height: 45px;
  line-height: 45px;
  margin-left: 10px;
}

</style>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

   <div class="bg-img">
      <div class="content">
        <header>ADMIN LOGIN</header>
        <form method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" placeholder="Username" name="username"  required>
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" placeholder="Password" name="password"  required>
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
            <a href="#">Forgot Password</a>
          </div>
          <div class="field">
            <input type="submit" value="LOGIN" name="login" >
          </div>
        </form>
     
       
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key'); // Select the password field
      const showBtn = document.querySelector('.show'); // Select the show button
      showBtn.addEventListener('click', function(){ // Add an event listener to the show button
       if(pass_field.type === "password"){ // If the password field is of type password
         pass_field.type = "text"; // Change the type to text
         showBtn.textContent = "HIDE"; // Change the text content of the show button to hide
         showBtn.style.color = "#C36241"; // Change the color of the show button to #C36241
       }else{
         pass_field.type = "password"; // Change the type to password
         showBtn.textContent = "SHOW"; // Change the text content of the show button to show
         showBtn.style.color = "black"; // Change the color of the show button to black
       }
      });
    </script>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
