<?php
session_start();
include_once("db_connect.php");
if(isset($_SESSION['user_id'])!="") {
	header("Location: index1.php");
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['user'];
		header("Location: index1.php");
	} else {
		$error_message = "Incorrect Email or Password!!!";
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
                <h1><strong>Login</strong>desk</h1>               
            </div>            
        <div id="ad">

        <a href="https://www.000webhost.com/1182597.html" target="_blank"><img src="https://www.000webhost.com/images/banners/728x90/1.jpg" alt="Web hosting" width="400" height="90" border="0"></a>
            </div>
                </div>	
        <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>	          
		<div class="row" id="div1">
			<div class="col-md-4 col-md-offset-4 form-box">
				<div class="form-top">
                    <div class="form-top-left">                        
                        <p>Enter your email and password:</p>
                    </div>
                    <div class="form-top-right">
                       	<i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="form-bottom">
					<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">                                               		
						<div class="form-group">								
							<input type="text" id="em" name="email" autocomplete="off" placeholder="Your Email" required class="form-control" />
						</div>	
						<div class="form-group">								
							<br><input type="password" id="pass" name="password" placeholder="Your Password" required class="form-control" />
						</div>
                        <div class="form-group">
                            <br><button type="submit" name="login" value="Login" class="btn btn-primary" />Login</button>
                        </div> 						
					</form>
				</div>				
			</div>
		</div>  
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">	
			New User? <a href="register.php">Register Here!</a>
			</div>
		</div>	
	</div>

	<!-- footer -->
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
     <!--  <script>
        function show() {
           var x = document.getElementById("otp");
              if (x.style.display === "none") {
                document.getElementById("pass").disabled = true;
                document.getElementById("em").disabled = true;
                x.style.display = "block";
                

              } else {
                x.style.display = "none";
                document.getElementById("pass").disabled = false;
                document.getElementById("em").disabled = false;
              }    
        }

        </script> -->
       <!--  <script type="text/javascript">
            function show() {
            

                if (document.getElementById('div1').style.display == 'none') {
                    document.getElementById('div1').style.display = 'block';
                    document.getElementById('div2').style.display = 'none';
                }
                else {
                    document.getElementById('div1').style.display = 'none';
                    document.getElementById('div2').style.display = 'block';
                }
            

        }
        </script> -->

        

    <!-- <script type="text/javascript">
        $(document).ready(function(){
        $('show()').click(function(){
        if($('#em').prop('disabled'))
        {
         $('#em').prop('disabled', false)
        }
        else{
             $('#em').prop('disabled', true)
          }
        });
    })
    </script> -->

</body>
</html>