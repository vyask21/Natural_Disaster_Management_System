<?php
include_once("db_connect.php");
session_start();
if(isset($_SESSION['user_id'])) {
	header("Location: aindex.php");
}
$error = false;
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
		
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$uname_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 2) {
		$error = true;
		$password_error = "Password must be minimum of 3 characters";
	}
	if (!$error) {
		if(mysqli_query($conn, "INSERT INTO admin(user, email, pass) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$success_message = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$error_message = "Error in registering...Please try again later!";
		}
	}
}
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Natural Disaster Management</title>

        <!-- CSS -->   
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">     
        <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->  <!-- //allignment of form and fonts size -->
        <link rel="stylesheet" href="font-awesome.min.css"> <!-- //fonts -->
        <link rel="stylesheet" href="assets1/css/form-elements.css"> <!-- //form control style -->
        <link rel="stylesheet" href="assets1/css/style.css"> <!-- //form control style --> 
        <link rel="stylesheet" href="assets1/css/bg.css"> 

        <link rel="stylesheet" href="assets1/css/font.css">
        <link rel="stylesheet" href="assets1/css/commons.css">
        <link rel="stylesheet" href="assets1/css/owid.css">      
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets1/ico/favicon.ico">

        <style type="text/css">
        	.col-md-offset-4 {
				margin-left: 33.33333333%
			}

			.col-md-4 {
				width: 33.33333333%;
				position: relative;
				min-height: 1px;
				padding-right: 15px;
				padding-left: 15px
			}

			@media (min-width:992px) {
				.col-md-4 {
					float: left
				}
			}

            .container{
                 margin: 0 auto;
                    width:100% /* value of your choice which suits your alignment */

            }
        </style>
        
    </head>
<body>
	<header class="site-header">
        <div class="wrapper site-navigation-bar">
            <div class="site-logo"><a href="index.php">Natural Disaster <br>Management</a></div>
                <nav class="site-navigation lg-only">
                    <div>
                        <div class="site-primary-navigation">
                            <ul class="site-primary-links">
                                <li><a href="isql.php" data-track-click="true" data-track-note="header-navigation">SQL Injection demo</a>
                                </li>
                                <li><a href="about.php" data-track-click="true" data-track-note="header-navigation">About</a>
                                </li>
                                <li><a href="donate.php" data-track-click="true" data-track-note="header-navigation">Donate</a>
                                </li>
                                <li><a href="register.php" data-track-click="true" data-track-note="header-navigation">Register</a>
                                </li>
                                <li><a href="login.php" data-track-click="true" data-track-note="header-navigation">Login</a>
                                </li>                                
                                <li><a href="contact.php" data-track-click="true" data-toggle="dropdown" data-track-note="header-navigation">Contact Us</a>
                                </li>
                                <li><a href="alogin.php" data-track-click="true" data-track-note="header-navigation">Admin</a>
                                </li>
                            </ul>                           
                        </div>
                    </div>
                </nav>
            </div>    
        </header>
	<div class="container">
		<style type="text/css">
            @media screen and (min-width: 480px) {
                      body {
                        background-color: #E3F8FD;
                      }
                    }
        </style>
		<div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
                <h1><strong>Admin</strong>Registration</h1>               
            </div>
        </div>
        <span class="text-success "><?php if (isset($success_message)) { echo $success_message; }  ?></span>
		<span class="text-danger "><?php if (isset($error_message)) { echo $error_message; } ?></span>	
		<div class="row">
			<div class="col-md-4 col-md-offset-4 form-box">
				<div class="form-top">
                    <div class="form-top-left">                        
                        <p>Enter your credentials:</p>
                    </div>
                    <!--<div class="form-top-right">-->
                    <!--   	<i class="fa fa-lock"></i>-->
                    <!--</div>-->
                </div>
                <div class="form-bottom">
					<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">	
						<div class="form-group">								
							<input type="text" name="name" placeholder="Enter admin Name" required value="<?php if($error) echo $name; ?>" class="form-control" autofocus/>
							<span class="text-danger"><?php if (isset($uname_error)) echo $uname_error; ?></span>
						</div>					
						<div class="form-group">								
							<br><input type="text" name="email" placeholder="Admin Email" autocomplete="off" required value="<?php if($error) echo $email; ?>" class="form-control" onkeyup="showHint(this.value)"/>
                            <span id="txtHint"></span>
							<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
						</div>
						<div class="form-group">								
							<br><input type="password" name="password" placeholder="Admin Password" required class="form-control" />
							<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
						</div>						
						<div class="form-group">
							<br><button type="submit" name="signup" value="Sign Up" class="btn btn-primary" />Sign up as admin</button>
						</div>						
					</form>
				</div>
                <p><a href="alogin.php">Login</a> for Admin</p>				
			</div>
		</div>			
	</div>
     <section>
        <div class="col-md-4 col-md-offset-4 form-box">
          <span>
            <hr><footer>&copy; Copyright 2019, Natural Disaster Management. </footer>
          </span>
          <br><span>
            All Rights Reserved.
          </span>      
        </div>
      </section>


      <!-- Javascript -->
    <script>
    function showHint(str) {
        if (str.length == 0) { 
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText ;
                }
            }
            xmlhttp.open("GET", "gethint.php?qa=" + str, true);
            xmlhttp.send();
        }
    }
    </script>
			

</body>    
 
</html>