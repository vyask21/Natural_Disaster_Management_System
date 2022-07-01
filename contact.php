<?php
session_start();
include_once("db_connect.php");
if(isset($_SESSION['user_id'])!="") {
	header("Location: index1.php");
}
$error = false;
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['subject']) && !empty($_POST['subject']))){
//if((isset($_POST['name']) && (!empty($_POST['name']))) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['subject']) && !empty($_POST['subject']))){
    // print_r($_POST);  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; 

    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $uname_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }    
        
    $query = "INSERT INTO `contact` (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    $result = mysqli_query($conn, $query);

    if (!$error) {
        
            $success_message = "Thank you for contacting us! We'll get in touch with you shortly.";
        }
    else {
            $error_message = "Error. Please try again later!";
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
        <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> --> <!-- //allignment of form -->
        <link rel="stylesheet" href="assets1/font-awesome/css/font-awesome.min.css"> <!-- //fonts -->
        <link rel="stylesheet" href="assets1/css/form-elements.css"> <!-- //form control style -->
        <link rel="stylesheet" href="assets1/css/style.css"> <!-- //form control style -->  
        <link rel="stylesheet" href="assets1/css/bg1.css">

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
                <h1><strong>Contact</strong>Form</h1>
                <p></p>               
            </div>
        </div>	
        <span class="text-success "><?php if (isset($success_message)) { echo $success_message; }  ?></span>
        <span class="text-danger "><?php if (isset($error_message)) { echo $error_message; } ?></span>	
		<div class="row">
			<div class="col-md-4 col-md-offset-4 form-box">
				<div class="form-top">
                    <div class="form-top-left">                        
                        <p>Please enter your credentials:</p>
                    </div>
                    <div class="form-top-right">
                       	<i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="form-bottom">
					<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                        <div class="form-group">                                
                            <input type="text" name="name" placeholder="Your Name" required class="form-control" required />
                        </div>			
						<div class="form-group">								
							<br><input type="text" name="email" placeholder="Your Email" required class="form-control" required />
						</div>	
						<div class="form-group">								
							<br><input type="text" name="subject" placeholder="Subject" required class="form-control" required/>
						</div>
                        <div class="form-group">                                
                            <br><textarea name="message" class="form-control" id="inputMessage" rows="3"></textarea>
                        </div>	
						<div class="form-group">
							<br><button type="submit" class="btn btn-primary"/>Send</button>
						</div>						
					</form>
				</div>				
			</div>
		</div>			
	</div>

	<!-- footer -->
    <section>
        <div class="col-md-4 col-md-offset-4 form-box">
          <span>
            <footer>&copy; Copyright 2019, Natural Disaster Management. </footer>
          </span>
          <br><span>
            All Rights Reserved.
          </span>      
        </div>
    </section>

</body>
</html>


        <!-- <label for="inputName" class="sr-only">Name</label>
            <input type="name" name="name" id="inputName" class="form-control" placeholder="Your Name" required>
        <label for="inputEmail" class="sr-only">E-Mail</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="name@email.com" required>
        <label for="inputSubject" class="sr-only">Subject</label>
            <input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Your Subject Line" required>
        <label for="inputMessage" class="sr-only">Message</label>
            <textarea name="message" class="form-control" id="inputMessage" rows="3"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button> -->