<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
    	background-color: #011215a8;
        border-radius:5px;
        margin: auto;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 60%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    </style>

</head>
<body>
<header class="page_header header_gradient dotted_items toggler_right">
<div class="container">
	<div class="row">
		<div class="col-sm-12 display_table">
			<div class="header_left_logo display_table_cell">
				<a href="index.php" class="logo top_logo">
					<span class="logo_text"> Door </span>
					<img src="img/logo.png" alt="O">
					<span class="logo_text"> Help </span>
				</a>
				
			</div>

			<style type="text/css">
				.thisset{
					margin-left: 345px;
					float: left;
					}
				.lgn{
					    margin-top: 25px;
    					margin-right: -75px;
    					background: #0000;
    					border: 1px solid white;
				}
				
			</style>
			<div class="header_mainmenu display_table_cell text-right">
				<!-- main nav start -->
				
				<nav class="mainmenu_wrapper thisset" >
					<ul class="mainmenu nav sf-menu links">
						<li> <a href="#topNav" id="homeLink">Home</a> </li>
 						<li> <a href="#about" id="aboutLink">About</a> </li>
						<li> <a href="#join" id="joinLink">Join Us</a> </li>
						<li> <a href="#services" id="servicesLink">Services</a> </li>
						<li> <a href="contact.php" id="contactLink">Contact</a> </li>
					</ul>
				</nav>
<style type="text/css">
	.col1{
		background-color: #fefefefe;
		 border-radius: 5px;
    width: 48%;
    float: left;
    margin-top: 25px;
    height: 350px;
	padding-top: 25px;
	 height: 345px;
	}

	.col2{
		background-color: #fefefefe;
    border-radius: 5px;
    width: 48%;
    float: left;
    margin-left: 28px;
    margin-top: 25px;
    padding-top: 25px;	
    height: 345px;
	}



	.fm input[type="email"],input[type="password"]{
		    margin-right: 13px;
    padding: 5px 60px;
        background-color: #b9afaf14;
        margin-top: -15px;
	}

.fm input[value="Login"]{
		background-color: #2996a2;
    margin-right: 22px;
    padding: 18px 128px;
    margin-top: 27px;
	}

.fm input[value="Register"]{
		background-color: #2996a2;
       margin-right: 20px;
    padding: 18px 117px;
    margin-top: -10px;
	}
	
</style>
          <?php 
            if(!isset($_SESSION['uid']))
              {
          ?>
				<button class="lgn" id="myBtn">
					Login/ Signup
				</button>
        <?php 
              } 
            if(isset($_SESSION['uid']))
              {
          ?>
          <button class="lgn">
          <a href="logout.php" style="color: white;">Log Out</a>
        </button>
          <?php 
            }
          ?>
				<div id="myModal" class="modal">
				<div class="modal-content">
    <span class="close">&times;</span>
   
   	<div class="container">
   		<center><p style="font-size: 25px; color: white; background-color:#2996a2; padding:15px 0px;">Welcome to <b>Door O Help</b>  </p></center>

   		<div class="col1" >
   		
   			<form class="fm" method="POST">
   			<center><span class="headl"><b>LOGIN</b></span></center><br> 
   				
   			<input type="email" name="email" placeholder="Enter mail here" required=""><br><br>
   				<input type="password" name="password" placeholder="Enter the password here" required=""><br><br>
   				<a style="margin-right: 120px"; href="forgetPassword.php">Forget password ?</a><br>
   				<input type="submit" name="login" value="Login">
          <?php 
            if (isset($_POST['login'])) {
              $email=mysql_real_escape_string($_POST['email']);
              $password=mysql_real_escape_string(base64_encode($_POST['password']));
              $query="select * from users where email='$email' and password='$password'";
              $exe=mysqli_query($con,$query) or die(mysqli_error($con));
              if (mysqli_num_rows($exe)==1) {
              $data=mysqli_fetch_array($exe);
              if ($data['email']==$email && $data['password']==$password) {
                $_SESSION['uid']=$data['id'];
                echo "<script type='text/javascript'>swal('Successfully Login !', 'You clicked the button!', 'success');</script>";
              }
             }else { echo "<script type='text/javascript'>swal('Incorrect Password!');</script>";}
            }
            ?>
   			</form>
   		
   		</div>
   		<div class="col2">
   			<form class="fm" method="POST">
   			<center><span class="headl"><b>REGISTER</b></span></center><br> 
   				
   			<input type="email" name="email" placeholder="Enter mail here" required=""><br><br>
   				<input type="password" name="password" placeholder="Enter the password here" required=""><br><br>
   				<input type="password" name="cpassword" placeholder="Re-enter the password " required=""><br><br>

   				<input type="submit" name="register" value="Register">

          <?php 
          if (isset($_POST['register'])) {
            $email=mysql_real_escape_string($_POST['email']);
            $password=mysql_real_escape_string(base64_encode($_POST['password']));
            $cpassword=mysql_real_escape_string(base64_encode($_POST['cpassword']));
            if ($password!=$cpassword) {
                echo "<script type='text/javascript'>swal('The password does not matches !');</script>";
             } else {
                  $query="insert into users (email,password) VALUES ('$email','$password')";
                  mysqli_query($con,$query) or die(mysqli_error($con));
                  echo "<script type='text/javascript'>swal('Successfully Registered !', 'You clicked the button!', 'success');</script>";
            }
            }
          ?>
   			</form>
   		</div>
   	</div>
  </div>
</div>

				<!-- eof main nav -->
				<!-- header toggler -->
				<span class="toggle_menu">
					<span></span>
				</span>
			</div>
		</div>
	</div>
</div>
</header>

   	<script src="js/modalbox.js"></script>


</body>
</html>