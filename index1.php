<?php
include_once("db_connect.php");
session_start();
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
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><!-- //allignment of form -->
        <link rel="stylesheet" href="assets1/font-awesome/css/font-awesome.min.css"> <!-- //fonts -->
        <link rel="stylesheet" href="assets1/css/form-elements.css"> <!-- //form control style -->
        <link rel="stylesheet" href="assets1/css/style.css"> <!-- //form control style -->  
        <link rel="stylesheet" href="assets1/css/bg.css">
        <link rel="stylesheet" href="assets1/css/dm.css">


        <link rel="stylesheet" href="assets1/css/font.css">
        <link rel="stylesheet" href="assets1/css/commons.css">
        <link rel="stylesheet" href="assets1/css/owid.css">      
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets1/ico/favicon.ico">

        <style type="text/css">

        	.custom {
			    width: 300px !important;
			    height: 100px !important;
			}

        	@keyframes ticker {
				0% { transform: translate3d(0, 0, 0); }
				100% { transform: translate3d(-100%, 0, 0); }
			}
			.tcontainer{
				width: 100%;d
				overflow: hidden;
			}
			.ticker-wrap {
				width: 100%;
				padding-left: 100%;
				background-color: #eee;
			}
			.ticker-move {
				display: inline-block;
				white-space: nowrap;
				padding-right: 100%;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
				animation-name: ticker;
				animation-duration: 20s;
			}
			.ticker-move:hover{
				animation-play-state: paused;
			}
			.ticker-item{
				display: inline-block;
				padding: 0 2rem;
			}      

			/*button alignment*/
			<style type="text/css"> 
		        html, 
		        body { 
		            height: 300px; 
		        } 
		                  

		        #table1 {
		     
		    margin-left:auto; 
		    margin-right:auto; 
		    width:750px;
		  }

		  td {
		   /* padding-top: .7em;*/
		    padding-bottom: 50px;
		}
		    </style>   
        </style>

    </head>
<body>
	<header class="site-header">
        <div class="wrapper site-navigation-bar">
            <div class="site-logo"><a href="index1.php">Natural Disaster <br>Management</a></div>
                <nav class="site-navigation lg-only">
                    <div>
                        <div class="site-primary-navigation">
                            <ul class="site-primary-links">                            	
                                <li><a href="about.php" data-track-click="true" data-track-note="header-navigation">About</a>
                                </li>
                                <li><a href="donate.php" data-track-click="true" data-track-note="header-navigation">Donate</a>
                                </li>                             
                                <li><a href="contact.php" data-track-click="true" data-toggle="dropdown" data-track-note="header-navigation">Contact Us</a>
                                <?php 
                                if (isset($_SESSION['user_id'])) { ?>
                                <li><a href="logout.php" data-track-click="true" data-toggle="header-navigation" data-track-note="header-navigation">Logout</a>
                                <?php } ?>
                                </li>
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
	    <div class="collapse navbar-collapse" >
	        <ul class="nav navbar-nav navbar-left">
	            <?php
				if (isset($_SESSION['user_id'])){ ?>
			        <li>
			        	<p class="navbar-text"><strong>Welcome!</strong> <strong><?php	echo $_SESSION['user_name'];?>  </strong></p>
			        </li>			       
			        <?php	
			    } else {?>
			        <li><a href="login.php">
						    <br><button type="submit" name="signup" value="Sign Up" class="btn btn-primary" />Login</button>
						</a></li>			        
			        <?php
					}?>
	       	</ul>
	    </div>    
	</div>

	<section>
		<div class="tcontainer">
		<div class="ticker-wrap">
			<div class="ticker-move">
				<div class="ticker-item"><a href="#" style="color: red;"><strong>Climate Change Affects Floods in India</strong></a></div>
				<div class="ticker-item"><a href="#" style="color: red;"><strong>Hackathon to find solutions for natural disasters</strong></a></div>
				<div class="ticker-item"><a href="#" style="color: red;"><strong>Floods ravage Odisha, eight injured</strong></a></div>				
				<div class="ticker-item"><a href="#" style="color: red;"><strong>Calamity-hit Kerala mulls regulation</strong></a></div>
				<div class="ticker-item"><a href="#" style="color: red;"><strong>Floods in Uttar Pradesh, 15 injured</strong></a></div>
				<div class="ticker-item"><a href="#" style="color: red;"><strong>Global warming is increasing number and severity of natural disasters</strong></a></div>
			</div>
		</div>
		</div>
	</section>
	<section>

	<section>
		<h3 style="position: center; color: black;"><strong>Disaster Information</strong></h3>
		<br><table id="table1" class="table table-hover" astyle>	 
		  <tr>
		    <td><button type="button" name="myBtn" class="btn btn-primary custom" data-toggle="modal" data-target="#earthquakes" style="background-color: #008CBA;">
				  Earthquakes
				</button></td>
		    <td><button type="button" name="myBtn" class="btn btn-primary custom" data-toggle="modal" data-target="#floods" style="background-color: #008CBA;">
				  Floods
				</button></td>
		  </tr>
		  <tr>
		    <td><button type="button" name="myBtn" class="btn btn-primary custom" data-toggle="modal" data-target="#tsunami" style="background-color: #008CBA;">
				  Tsunami
				</button></td>
		    <td><button type="button" name="myBtn" class="btn btn-primary custom" data-toggle="modal" data-target="#heat" style="background-color: #008CBA;">
				  Extreme heat
				</button></td>
		  </tr>
		</table>
	</section>
	
    	<!-- Button trigger modal --> 
		<!-- Modal -->
		<div class="modal fade" id="earthquakes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="earthquakes">Earthqukes</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div><img src="assets1/img/earthquake.jpg" alt="earthquake"></div>
		       Surviving an earthquake and reducing its health impact requires preparation, planning, and practice.
				Far in advance, you can gather emergency supplies, identify and reduce possible hazards in your home, and practice what to do during and after an earthquake.
				Learning what actions to take can help you and your family to remain safe and healthy in the event of an earthquake.<br><strong>Before an Earthquake</strong><ul><li>1. Being Prepared</li><li>2. Emergency Supplies</li></ul><br><strong>During an Earthquake</strong><ul><li><u>Indoor Safety</u><br>1. <strong>DROP</strong> down onto your hands and knees before the earthquake knocks you down. This position protects you from falling but allows you to still move if necessary.<br>
2. <strong>COVER</strong> your head and neck (and your entire body if possible) under the shelter of a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands.<br>3. <strong>HOLD ON</strong> to your shelter (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around.<br></li><li><u>Outdoor Safety</u><br>1. If outdoors, <strong>move away</strong> from buildings, utility wires, sinkholes, and fuel and gas lines.<br>2. Once in the open, <strong>get down</strong> low (to avoid being knocked down by strong shaking) and stay there until the shaking stops.</li></ul>
		      </div>		      
		    </div>
		  </div>
		</div>		

		<!-- Modal -->
		<div class="modal fade" id="floods" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="floods">Floods</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<img src="assets1/img/flood.jpg" alt="flood">
		       Floods, big or small, can have devastating effects on your home and your family. You can take steps to reduce the harm caused by flooding. Learn how to prepare for a flood, stay safe during a flood, and protect your health when you return home after a flood.<br><strong>Preparing for a Flood:</strong><ul><li>Learn how to prepare for a flood, including how to create a plan, supplies you’ll need, and getting your home ready.</li><li>Floodwater and standing water can be dangerous. Protect yourself and your loved ones from risks brought on by floods.</li></ul><strong>Floodwater Safety:</strong><ul><li>Don’t drive in flooded areas</li><li>Stay out of floodwater.</li><li>Prevent injuries.</li><li>Be aware of possible chemicals in floodwater.</li><li>Avoid electrical hazards inside or outside your home.</li></ul>
		      </div>		     
		    </div>
		  </div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="tsunami" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="tsunami">Tsunami</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<img src="assets1/img/tsunami.jpg" alt="tsunami">
		       Tsunamis, also known as seismic sea waves, are a series of enormous waves created by an underwater disturbance such as an earthquake, landslide, volcanic eruption, or meteorite. A tsunami can strike anywhere along most of the U.S. coastline. Learn more about tsunamis and get information about health concerns after a tsunami including food and water safety.<br><strong>Health Effects of Tsunamis</strong><ul><li>Primary public health concerns are clean drinking water, food, shelter, and medical care for injuries.</li><li>Can pose health risks such as contaminated water and food supplies</li><li>Loss of shelter leaves people vulnerable to insect exposure, heat, and other environmental hazards</li></ul>
		      </div>
		      
		    </div>
		  </div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="heat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="heat">Extreme heat</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<img src="assets1/img/heat.jpg" alt="heat">
		       Heat-related deaths and illnesses are preventable. Despite this fact, more than 600 people in India are killed by extreme heat every year. <br>Extreme heat is defined as summertime temperatures that are much hotter and/or humid than average. Because some places are hotter than others, this depends on what’s considered average for a particular location at that time of year. Humid and muggy conditions can make it seem hotter than it really is.<br><strong>Tips for Preventing Heat-Related Illness</strong><ul><li>Wear Appropriate Clothing:</li><li>Schedule Outdoor Activities Carefully</li><li>Drink Plenty of Fluids</li></ul>
		      </div>		      
		    </div>
		  </div>
		</div>
       


	<!-- footer -->
    <section>
        <div class="footer container">
          <span>
            <br><hr><footer>&copy; Copyright 2019, Natural Disaster Management. </footer>
          </span>
          <br><span>
            All Rights Reserved.
          </span>      
        </div>
    </section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    


</body>
</html>
