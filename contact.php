<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>National Animal Genetic Resources Center</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link href="css/responsive-slider.css" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/fav.png" title="Favicon" />
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- skin -->
		<link rel="stylesheet" href="skin/default.css">
    </head>
	 
    <body>
	
	<img width="100%"src="img/nagrc_header.png" alt="">
	<div class="header">

	<section id="header" class="appear">


		   <?php
            include("head.php");

        ?>
	
		
	</section>
	</div>

<section class="header-inner">

    <p style="padding-top: 80px;">Contact us</p>
	
</section>
		


			<!--content-->
	<section id="section-content">
		<div class="container">
			<div class="content">
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="title">
							<div class="wow bounceIn">
						
						<!--	<h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2> -->
							
						
							</div>
						</div>
					</div>
				</div>
				<div class="row">
			
					<div class="row-slider">
						<div class="col-lg-6 ">
							<div class="company mar-left10">
								<h4 style="text-align: center;">Find Us</h4>
								<p>The National Animal Genetic Resources Centre and Data Bank (NAGRC & DB) formally the Animal Breeding Centre (ABC) was established in 1960 as an Artificial Breeding Centre, mainly to offer artificial Insemination.</p>
                                
                                <p>Below is our contact info.</p>
							</div>
							<div class="list-style">
								<div class="row">
									<div class="col-lg-6 col-sm-6 col-xs-12">
										<ul>
											<li><b>Address:</b> Nsamizi Road UCA Building, P.O.Box 183, Entebbe, Uganda
											</li>
											<li><b>Phone:</b> 0414-320821</li>
											<li><b>Email:</b> info@nagrc.go.ug</li>
										</ul>
									</div>
								
								</div>
							</div>
						</div>
					
						<div class="col-lg-6 ">
							<div class="company mar-left10">
								<h4 style="text-align: center;">Get in touch</h4>
									<div class="row">
					<div class="col-md-8 col-md-offset-2" style="background-color: white; padding: 5px; border-radius: 15px;">
						<div class="cform" id="contact-form"  >
							<div id="sendmessage">
								 Your message has been sent. Thank you!
							</div>
							<form action="contact/contact.php" method="post" role="form" class="contactForm">
							<div class="wow bounceIn">
							  <div class="form-group">
								<label for="name">Your Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="email">Your Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" placeholder="" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
								<div class="validation"></div>
							  </div>
							</div>
							  <button type="submit" class="line-btn green">SUBMIT</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>
							</div>
				
						</div>
					
					</div>	
				</div>
					
			</div>
			
		</div>
	</section>
	<!--/content-->

	


		<!-- map -->
		<section id="section-map" class="clearfix">
			<div id="map"></div>
		</section>


        <?php
            include("footer.php");

        ?>

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr0cfxPdsnf1vRIy6ykYs2k0JU4s_SnkU &callback=initMap"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
	<script src="js/skrollr.min.js"></script>		
	<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/grid.js"></script>
    <script src="js/main.js"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(0.070477, 32.4632424), // 
                  

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [	{		featureType:"all",		elementType:"all",		stylers:[		{			invert_lightness:true		},		{			saturation:10		},		{			lightness:30		},		{			gamma:0.5		},		{			hue:"#1C705B"		}		]	}	]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                var  marker = new google.maps.Marker({
			          position: mapOption,
			          map: map
			        });
            }
        </script>
		 <script src="js/wow.min.js"></script>
	 <script>
	 wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	</body>
</html>