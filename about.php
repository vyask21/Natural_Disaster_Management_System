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
        	body, html {
              height: 100%;
              margin: 0;
              font: 400 15px/1.8 "Lato", sans-serif;
              color: blue;
            }

            .bgimg-1, .bgimg-2, .bgimg-3 {
              position: relative;
              opacity: 1;
              background-attachment: fixed;
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;

            }
            .bgimg-1 {
              background-image: url("assets1/img/nature.jpg");
              min-height: 100%;
            }

            .bgimg-2 {
              background-image: url("assets1/img/parallaxsea.jpg");
              min-height: 100%;
            }

            .bgimg-3 {
              background-image: url("assets1/img/5.jpg");
              min-height: 100%;
            }

            .caption {
              position: absolute;
              left: 0;
              top: 50%;
              width: 100%;
              text-align: center;
              color: #000;
            }

            .caption span.border {
              background-color: #111;
              color: #fff;
              padding: 5px;
              font-size: 40px;
              letter-spacing: 10px;
            }

            h3 {
              letter-spacing: 5px;
              text-transform: uppercase;
              font: 25px "Lato", sans-serif;
              color: #111;
            }

            /* Turn off parallax scrolling for tablets and phones */
            @media only screen and (max-device-width: 1024px) {
              .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
              }
            }           

            @media screen and (min-width: 480px) {
                      body {
                        background-color: #E3F8FD;
                      }
                    }
            .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
          }
            

          .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          }

          .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
          }

          .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
          }

          .flip-card-front {
            background-color: #bbb;
            color: black;
          }

          .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
          }
        
            .column {
              float: left;
              width: 33.33%;
              padding: 10px;
              height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
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
                              <li><a href="isql.php" data-track-click="true" data-track-note="header-navigation">SQL Injection demo</a></li>
                              <li><a href="about.php" data-track-click="true" data-track-note="header-navigation">About</a></li> 
                              <li><a href="donate.php" data-track-click="true" data-track-note="header-navigation">Donate</a></li>                   
                              <li><a href="register.php" data-track-click="true" data-track-note="header-navigation">Register</a></li>                                
                              <li><a href="login.php" data-track-click="true" data-toggle="dropdown" data-track-note="header-navigation">Login</a></li>
                              <li><a href="contact.php" data-track-click="true" data-track-note="header-navigation">Contact Us</a></li>
                              <li><a href="alogin.php" data-track-click="true" data-track-note="header-navigation">Admin</a></li>
                            </ul>                          
                        </div>
                    </div>
                </nav>
            </div>    
        </header>

	<div class="bgimg-1">   
        <div class="caption">
            <br><span class="border">About Us</span>
        </div>
    </div>
    <div style="color: #777;background-color:powderblue;text-align:center;padding:50px 80px; ">
        <br><h3 style="text-align:center;">Greetings from the makers!</h3>
        <p style="font-size: 20px; color: blue;"><b>We have been very curious about our Management since the disasters has started occuring in our country on how to let people not suffer with the calamities. The three of us started this website in July 2019. All the makers are pursuing their Bachelor's Degree in Engineering in the Department of Information Technology. The completion of the degree will be acheived in 2021 from Pillai College of Engineering, New Panvel.</b></p>
    </div>
    <span class="border" style="background-color:transparent;font-size:30px;padding:50px 80px;color: black; text-align: justify;">
            <video style="position: center;"  width="65%" height="490" controls="controls">
              <source src="assets1/video.mp4" type="video/mp4">
            </video>
    </span>
    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p style="text-align: center; font-size: 30px;">Our Team</p>
            <div id="output"></div> 
        </div>
    </div>
    <div class="bgimg-2">
        <div class="caption" style="top: 25%;">
            <div class="row">
                <div class="column">                           
                    <div  class="flip-card" style="margin-left: 25%;">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="assets1/img/kajal.jpg" alt="kajal" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                          <h1 id="nm0" style="color: black;"><strong></strong></h1> 
                          <p id="ds0"></p>
                          <p id="de0"></p> 
                        </div>
                      </div>
                    </div>
                </div>
                <div class="column">
                    <div  class="flip-card" style="margin-left: 15%;">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="assets1/img/vyas.jpg" alt="vyas" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                         <h1 id= "nm1" style="color: black;"><strong></strong></h1> 
                          <p id= "ds1"></p> 
                          <p id= "de1"><p>                         
                        </div>
                      </div>
                    </div>
                </div>
                <div class="column">
                    <div  class="flip-card" style="margin-left: 10%;">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="assets1/img/mihir.jpg" alt="mihir" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                          <h1 id="nm2" style="color: black;"><strong></strong></h1> 
                          <p id="ds2"></p>
                          <p id="de2"></p>                         
                        </div>
                      </div>
                    </div>
                </div>

            </div>  
                                 
        </div>
    </div>
    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p style="text-align: center; font-size: 30px;">Visit Us</p>
            <p style="text-align: center; font-size: 20px; color: white;">Your thoughts matter to us! If you would like to offer suggestions or feedback, visit us or give us a call!</p>
        </div>
    </div>
    <div class="bgimg-3">

        <div class="caption" style="top: 20%;">            
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6693193422366!2d73.1254814142114!3d18.99020605960007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1568826930506!5m2!1sen!2sin" width="60%" height="300px" frameborder="1" style="z-index: 0;" allowfullscreen=""></iframe></p>
                <br><span  style="font-size: 30px; color: white; letter-spacing: 0px;"><strong>Contact: +91123456789<br>Mail us: pbl@gmail.co.in</strong></span>
        </div>
    </div>
        
    <!-- footer -->
    <section>
        <div class="footer container">
          <span>
            <footer>&copy; Copyright 2019, Natural Disaster Management. </footer>
          </span>
          <br><span>
            All Rights Reserved.
          </span>      
        </div>
    </section>

    <!-- Javascript -->
   <!-- <script>

loadXMLDoc();

function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "details.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var x = xmlDoc.getElementsByTagName("member");
  console.log(x);
  final = "";
   for (i = 0; i <x.length; i++) {
    out = "<div style='border:1px solid;'>"

    name = "<div style='margin-top:10px;'> Name:" +x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +"</div>"
    roll = "<div style='margin-top:10px;'> Roll : " +x[i].getElementsByTagName("roll")[0].childNodes[0].nodeValue+"</div>"
    designation = "<div style='margin-top:10px;'> Designation : " +x[i].getElementsByTagName("designation")[0].childNodes[0].nodeValue+"</div>"
    
    out  = out +name+ roll+designation+"</div>"
    final = final +out;
}
  
 document.getElementById("output").innerHTML=final;  
</script> -->

<script>

loadXMLDoc();

function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "details.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var x = xmlDoc.getElementsByTagName("member");

  for (i = 0; i <x.length; i++) {

    name="";
    designation="";
    description="";
    id="";

    name = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
    id="nm"+i;
    document.getElementById(id).innerHTML = "<strong>"+name+"</strong>";

    designation = x[i].getElementsByTagName("designation")[0].childNodes[0].nodeValue;
    id="ds"+i;
    document.getElementById(id).innerHTML = "<strong>"+designation+"</strong>";

    description =x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;
    id="de"+i;
    document.getElementById(id).innerHTML = description;
    
    
    }
  
}




</script>
</body>
</html>
