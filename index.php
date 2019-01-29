<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Mangement</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<link rel="stylesheet" href="new.css">
</head>
<body>
  <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
	<!-- This is for header section-->
<header>
            <div class="main-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#"><img src="img/1.png"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="main-menu text-right">
                            <nav>
                                <ul >
                                    <li class="active"><a href="index.html" >Home</a></li>
                                    <li><a href="dep.html">Depertment</a></li>
                                    <li><a href="doctor.html">Doctor</a></li>
                                    <li><a href="appoinment.html">Appoinment</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="#footer">Contact</a></li>
                                   <!-- This is for dropdown section-->
                                    
                 <!-- This is for login & log-out section-->
          
                                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </header> <!-- This is end of header section-->


<!-- This is the start of owl carosol part/slider part-->

<div class="row" style="margin-top: 10px;">
    <div class="carousel slide" id="carousel1" data-ride="carousel" style="margin-top: 10px">

        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carouse1" data-slide-to="1"></li>
            <li data-target="#carouse1" data-slide-to="2"></li>
            <li data-target="#carouse1" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/2.jpg" alt="img" style="width: 100%;height: 550px;background: rgba(0, 0, 0, 0.5);">
                               <!--    <div class="carousel-caption d-none d-md-block">
                        <h5>..Msld.</h5>
                        <p>..wsrw,ermw;rlknw;rlkwn ;wnt;welrtnwe;lfmew;lfmne;ltrnm3elremfewlmfs,lfm w;l.</p>
                        <button class="btn btn-primary ">Submit</button>
                      </div>
                  -->
            </div>
            <div class="item ">
                <img src="img/3.jpg" alt="img" style="width: 100%;height: 550px">
            </div>
            <div class="item ">
                <img src="img/4.jpg" alt="img" style="width: 100%;height: 550px">
            </div>
            <div class="item ">
                <img src="img/5.jpg" alt="img" style="width: 100%;height: 550px">
            </div>
            
        </div>
        <a class="left carousel-control" href="#carousel1" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span CLASS="sr-only">Pev</span>
        </a>

        <a class="right carousel-control" href="#carousel1" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

            </div>
        </div>
        <!--The end of slide part -->


  <!--The start of body part -->

<div class="body1">
<div class="container">
	<div class="key">
		<h4>OUR KEY FEATURE</h4>
		<h1>WELCOME TO <span class="span1">HEALTHSEBA<span></h1>
	</div>
	<div class="butom">
		
	</div>
	 <!--The start box part -->
	 <div class="hull">
	 <div class="row">
	 	<div class="col-md-6">
	 		<div class="row">
	 			<div class="col-md-6">
	 				<div class="box1">
	 					<div class="box2">
	 						<span class="glyphicon glyphicon-envelope"></span>
	 						<h3><b>MODERN MEDICAL LAB</b></h3>
	 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	 						<h3><span><a>VIEW MORE</a></span></h3>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col-md-6">
	 				<div class="box1">
	 					<div class="box2">
	 						<span class="glyphicon glyphicon-envelope"></span>
	 						<h3><b>MODERN MEDICAL LAB</b></h3>
	 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	 						<h3><span><a>VIEW MORE</a></span></h3>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col-md-6">
	 				<div class="box1">
	 					<div class="box2">
	 						<span class="glyphicon glyphicon-envelope"></span>
	 						<h3><b>MODERN MEDICAL LAB</b></h3>
	 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	 						<h3><span><a>VIEW MORE</a></span></h3>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col-md-6">
	 				<div class="box1">
	 					<div class="box2">
	 						<span class="glyphicon glyphicon-envelope"></span>
	 						<h3><b>MODERN MEDICAL LAB</b></h3>
	 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	 						<h3><span><a>VIEW MORE</a></span></h3>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>

	 	<div class="col-md-6">
	 		<div class="right">
	 		<img src="img/6.jpg">
	 	</div>
	 	</div>
	 </div>
	</div>
</div>
</div>

<!--The service part -->
<div class="services">
	<div class="container">
		<div class="our">
			<h1><b>OUR <span>SERVICES<span></b></h1>
				<div class="nee">
					
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vitae, veritatis voluptas illum at unde cum. Volupta.</p>
		</div>
		<div class="services2">
		<div class="row">
			<div class="col-md-4">
				<div class="card shadow" style="width: 30rem;">
              <div class="inner">
                            <img class="card-img-top" src="img/7.jpeg" alt="Card image cap" style="background-size: cover;background-position: center;">
                          </div>
                            <div class="card-body text-center" style="margin-bottom: 30px;background: #44B4E1;color: white;">
                            	<div class="row">
                            		<div class="col-md-6">
                            		<div class="cardleft">
                              <h1><b>MORDERN LAB</b></h1>
                              <p>CARDIOLOGIS</p>
                          </div>	
                            		</div>
                            		<div class="col-md-6">
                            		<div class="cardright">
                          	<span class="glyphicon glyphicon-user">
                          		
                          	</span>
                          </div>
                            	</div>

                            	</div>
                            	                         
                            </div>
                          </div>
                </div>
                <div class="col-md-4">
				<div class="card shadow" style="width: 30rem;">
              <div class="inner">
                            <img class="card-img-top" src="img/8.jpeg" alt="Card image cap" style="background-size: cover;background-position: center;">
                          </div>
                            <div class="card-body text-center" style="margin-bottom: 30px;background: #44B4E1;color: white;">
                            	<div class="row">
                            		<div class="col-md-6">
                            		<div class="cardleft">
                              <h1><b>MORDERN LAB</b></h1>
                              <p>CARDIOLOGIS</p>
                          </div>	
                            		</div>
                            		<div class="col-md-6">
                            		<div class="cardright">
                          	<span class="glyphicon glyphicon-user">
                          		
                          	</span>
                          </div>
                            	</div>

                            	</div>
                            	                         
                            </div>
                          </div>
                </div>
                <div class="col-md-4">
				<div class="card shadow" style="width: 30rem;">
              <div class="inner">
                            <img class="card-img-top" src="img/9.jpeg" alt="Card image cap" style="background-size: cover;background-position: center;">
                          </div>
                            <div class="card-body text-center" style="margin-bottom: 30px;background: #44B4E1;color: white;">
                            	<div class="row">
                            		<div class="col-md-6">
                            		<div class="cardleft">
                              <h1><b>MORDERN LAB</b></h1>
                              <p>CARDIOLOGIS</p>
                          </div>	
                            		</div>
                            		<div class="col-md-6">
                            		<div class="cardright">
                          	<span class="glyphicon glyphicon-user">
                          		
                          	</span>
                          </div>
                            	</div>

                            	</div>
                            	                         
                            </div>
                          </div>
                </div>
			</div>
		</div>
		</div>
	</div>


	<!--expert doctor part -->
	<div class="expert">
		<div class="container">
			<div class="our">
				<h1><b>EXPERT <span>DOCTOR</span></b></h1>
			
			<div class="nee">
				
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vitae, veritatis voluptas illum at unde cum. Volupta.</p>
			</div>
			<div class="dc">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="name">
							<h1>Jhon Doe</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vitae, veritatis voluptas illum at unde cum. Volupta.</p>
						</div>
						</div>
						<div class="col-md-6">
							<div class="doctor-img">
								<img src="img/3.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="dc2">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="doctor-img1">
								<img src="img/3.jpg">
							</div>
						</div>
						<div class="col-md-6">
							<div class="name1">
							<h1>Jhon Doe</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit vitae, veritatis voluptas illum at unde cum. Volupta.</p>
						</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="view">
				<button class="btn btn-primary">MORE DOCTOR</button>
			</div>
		</div>
	</div>
	

</div>

<!-- Our Testomni-->
  <div class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3  xol-xs-12">
                        <div class="employes">
                            <p class="counter-count">879</p>
                            <p class="employee-p">HEART TRANSPLANTS</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-3  xol-xs-12">
                        <div class="customer">
                            <p class="counter-count">1001</p>
                            <p class="customer-p">BARIATRIC SURGERY</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-3  xol-xs-12">
                        <div class="design">
                            <p class="counter-count">1500</p>
                            <p class="design-p">CRITICAL CARE</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-3  xol-xs-12">
                        <div class="Order">
                            <p class="counter-count">1200</p>
                            <p class="order-p">EXTPART DOCTOR</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</div>
<div id="footer">
<footer>
	
          <div class="container " id="contact">
		<div class="row" style="margin-top: 30px;">
			<div class="col-lg-5 col-md-12 ">
				<p style="margin-bottom: 30px;"><img src="img/logo.png" width="150" height="36" data-retina="true" alt=""></p>
				<p style="margin-bottom: 30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				<div class="follow">
					<ul>
							<li>Follow us</li>
							<li><a href="https://www.facebook.com/mahin.khan.900"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#0"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#0"><i class="fa fa-google"></i></a></li>
							<li><a href="#0"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#0"><i class="fa fa-instagram"></i></a></li>
						</ul>
				</div>
			</div>

			


				<div class="col-lg-3 col-md-6">
					<div class="use">
					<div class="contact">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="#"><i class="fa fa-mobile"></i> + 01909848408</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i> moinulhasan.4960@gmail.com</a></li>
					</ul>
					
				</div>
			</div>
			</div>
		</div>
		<hr>
	<h4 style="text-align: center;">all copyright@mahin</h4>
	</div>
</footer>
</div>
<script type="text/javascript">
	$('.counter-count').each(function () {
        $(this).prop('counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
        

</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
           
</body>
</html>