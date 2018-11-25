<?php

//	include 'php/cookie.php';//comes first and establishes the uniqueid
//	include 'php/addpresence.php';//comes second and establishes presence 
	
?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MadeMill - by prototypeD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/calendar.css" rel="stylesheet" type="text/css" media="all" />

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme-startup.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700" rel="stylesheet" type="text/css">
        <link href="css/font-roboto.css" rel="stylesheet" type="text/css">
		<script src="js/Chart.bundle.min.js"></script>
		
		
		<!-- Drag and Drop tool -->
		<link rel="stylesheet" type="text/css" href="tool/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="tool/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	<!--	<link rel="stylesheet" type="text/css" href="tool/css/demo.css" />-->
		<link rel="stylesheet" type="text/css" href="tool/css/bottom-area.css" />
		<script src="tool/js/modernizr.custom.js"></script>

		
		
		
    </head>
    <body class="scroll-assist"  >
        <?php include '_menu.php';?>
        <div class="main-container">
		
		<!--

 <section class="image-bg fullscreen overlay bg-dark vid-bg">
                <div class="player" data-video-id="iphe3_1uIig" data-start-at="0"></div>
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/mm1.jpg" />
                </div>
                <div class="masonry-loader">
                    <div class="spinner">
                    </div>
                </div>
                <div class="container v-align-transform">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                            <img alt="Logo" class="image-large mb40 mb-xs-0" src="img/mademill_logo_light.png" />
                            
							<h4 class="mb56 mb-xs-24">
							
                              <strong> MadeMill </strong> is the Makerspace and Advanced Digital Media Lab<br/> at the <strong>Innovation Centre at Bayview Yards</strong><br/>operated by <strong>prototypeDM</strong>
                            </h4>
                            <a class="btn btn-lg btn-white mb0" href="#startit">Launch a Project</a>
                        </div>
                    </div>
    
                </div>

            </section>-->
		
		
            <section class="bg-primary background-multiply pt240 pb240 pt-xs-120 pb-xs-120 overlay image-bg parallax">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/cheo.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                            <img alt="Logo" class="image-large mb40 mb-xs-0" src="img/mademill_logo_light.png" />
                          
							<h4 class="mb56 mb-xs-24" onclick = "pushSomething()">
                              <strong> MadeMill </strong> is the Makerspace and Advanced Digital Media Lab<br/> at  <strong> <a href = "http://thebayviewyards.com/">Bayview Yards</a></strong> operated by <strong><a href = "http://pd.team">prototypeD</a></strong>
                            </h4>
                            <a class="btn btn-lg btn-white mb0" href="#startit">Launch a Project</a>
                        </div>
                    </div>
                  
                </div>
                
            </section>
			
			
			
			
		
			<section class="image-edge">
                <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
                    <img alt="Screenshot" class="mb-xs-24" src="img/table.jpg" />
                </div>
                <div class="container">
                    <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
					
                        <h1 class="large mb40 mb-xs-16">Welcome to <strong>Made</strong>Mill.</h1>
                        <h6 class="uppercase mb16">Are you ready to make your million dollar idea?</h6>
                        <p class="lead mb40">
                            Our team of design professionals deliver products and services from our headquarters at the <strong>Innovation Centre at Bayview Yards</strong> in Ottawa.  MadeMill and the Innovation Centre is funded in part by generous contribution by the <strong>FedDev Ontario</strong> program, the <strong>City of Ottawa</strong> and the <strong>Government of Ontario</strong>. Our mission is to make product creation and social innovation accessible, affordable, and above all connect the many services and resources necessary to move an idea into reality.
                        </p>
                        <a class="btn-lg btn" href="#">Get Involved</a>
                    </div>
                </div>
                <!--end of container-->
            </section>			

		<section class="image-edge">
                <div class="col-md-6 col-sm-4 p0">
                    <img alt="Screenshot" class="mb-xs-24" src="img/partnerships.png" />
                </div>
                <div class="container">
                    <div class="col-md-5 col-md-offset-1 col-sm-7 col-sm-offset-1 v-align-transform right">
                        <h1 class="large mb40 mb-xs-16">Driven by Partnership</h1>
                        <h6 class="uppercase mb16">Built to make commercialization and social innovation a breeze.</h6>
                        <p class="lead mb40">
                            MadeMill is operated by <strong>prototypeD</strong> and our numerous design and innovation partners throughout Ottawa.  If you are interested in becoming a design or advanced manufacturing partner, we are pleased to be able to offer these partnerships to better serve local entrepreneurs and businesses.
                        </p>
                        
                    </div>
                </div>
                <!--end of container-->
            </section>			
			<br/>
			<br/><br/>
		
<!--
		
		
		
<section class="cover fullscreen image-slider slider-all-controls controls-inside parallax">
                <ul class="slides">
                    <li class="overlay image-bg">
                        <div class="background-image-holder">
                            <img alt="image" class="background-image" src="img/cover2.jpg" />
                        </div>
                        <div class="container v-align-transform">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                                    <h1 class="mb8">Meet AICO.</h1>
                                    <p class="lead mb48">
                                       AICO is prototypeD TEAM's proprietary hybrid AI system.
                                    </p>
                                    <form class="halves form-newsletter" data-success="Thanks for your registration, we will be in touch shortly." data-error="Please fill all fields correctly.">
                                        <input type="text" name="name" class="validate-required signup-name-field" placeholder="Your Name" />
                                      
                                        <button type="submit">Yes, connect me to AICO.</button>
                                        <p class="sub text-center">
                                           AICO is an experimental and embrionic.  Your interaction will make AICO learn to respond.<br/>
										   
                                          
                                        </p>
                                       
                                    </form>
                                </div>
                            </div>
                          
                        </div>
                        
                    </li>
                </ul>
            </section>		
		
		
		-->
		
		
		

<section class="projects pt48">
                <div class="container">
                    <div class="row pb24">
                        <div class="col-sm-12 text-center">
                            <ul class="filters mb0">
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row masonry-loader">
                        <div class="col-sm-12 text-center">
                            <div class="spinner"></div>
                        </div>
                    </div>
                    <div id = "imageGallery" class="row masonry masonryFlyIn">
                       
						
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>		
		
			
			
			<section>
                <div class="container">
                    <div class="row">
					<div class="col-sm-6 text-center">
                            <h4 class="uppercase mb16">Innovation Pod 2</h4>
                            <p class="lead mb64">
                                View the Original Concept Renderings
                            </p>
                            <div class="embed-video-container embed-responsive embed-responsive-16by9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/PCGaqXGWCWo" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!--end of embed video container-->
                        </div>
                        <div class="col-sm-6 text-center">
                            <h4 class="uppercase mb16">Innovation Pod 2</h4>
                            <p class="lead mb64">
                               Janak Alford provides a construction update.
                            </p>
                            <div class="embed-video-container embed-responsive embed-responsive-16by9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/rZFfmXOElCk" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!--end of embed video container-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>			
		

			<section>
                <div class="container">
                    <div class="row">
					<div class="col-sm-6 text-center">
                            <h4 class="uppercase mb16">Innovation Pod 2</h4>
                            <p class="lead mb64">
                                Komi Design Walkthrough
                            </p>
                            <div class="embed-video-container embed-responsive embed-responsive-16by9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/fxGx77NQUzc" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!--end of embed video container-->
                        </div>
                        <div class="col-sm-6 text-center">
                            <h4 class="uppercase mb16">Innovation Pod 2</h4>
                            <p class="lead mb64">
                               Komi Providing a Construction Update
                            </p>
                            <div class="embed-video-container embed-responsive embed-responsive-16by9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/jKoNctBE0W0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!--end of embed video container-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>					
			
			
			
			<section class="pb0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                            <h4>Are you ready to make something <strong>amazing?</strong>  </h4>
							<h4>Our team is linking together the latest technologies and making major strides forward in advanced manufacturing and digital media.</h4>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                                <div class="left">
                                    <i class="ti-panel icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Virtual Visualization</h5>
                                    <p>
                                        We are using digital realities to change how we work together and collaborate. Design mixed with experience mixed with environment is a recipe for building solutions which are capable of having significant and positive changes to make Canadians more resilient and independent
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                                <div class="left">
                                    <i class="ti-medall icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Advanced Manufacturing</h5>
                                    <p>
                                        Advanced Manufacturing is the gateway to a new industrial revolution for Canada.  The ability to rapidly produce designs and solutions to the most challenging social and environmental challenges will be the calling card of Canadian Innovation.
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                                <div class="left">
                                    <i class="ti-layout icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Digital Media and Web</h5>
                                    <p>
                                       Behind every great product or social innovation is a story that needs to be told.  Telling the story of the product, where it came from but more importantly where it is going, makes the difference between a success and a failure.  Products come from the people, challenges, and opportunitues to make the world a better place.  That is a story worth telling.
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                                <div class="left">
                                    <i class="ti-comment-alt icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Mobile Buildings</h5>
                                    <p>
                                        The future is coming quickly and we need to be able to respond to the challenges of the world rapidly.  That is why prototypeD has manufactured MadeMill Innovation Pods.  Solar-powered mobile buildings, our Innovation Pods launch our team directly into the communities and areas where Canadians need the most support.  
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="left">
                                    <i class="ti-infinite icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Data Visualization</h5>
                                    <p>
                                        Our data about the world is growing exponentially. Now more than ever we need to be able to be able to manage this data and make important evidence-based decisions about our investments of time and money.  Our team can help to make visualization rapid and robust with custom cloud solutions.
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="left">
                                    <i class="ti-dashboard icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Mobile Applications</h5>
                                    <p>
                                        Mobility is key.  The digital revolution has changed where we need to be to do our work.  We can now work collaboratively around the world by leveraging mobile apps and leap over the geographic and social divides.  Your next project will be possible by the teams of global players that come together through mobile technology.  We are here to advance this vision with rapid mobile app development and deployment.
                                    </p>
                                </div>
                            </div>
                            <!--end of feature-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
			

			
 <section>
                <div id = "startit" class="container">
                    <div class="row">
                        

                    <div class="col-md-6">
                        <h2  class="large mb40 mb-xs-16">Make it at MadeMill</h2>
                        <h6 class="uppercase mb16">Are you ready to make your project a reality?</h6>
                        <p class="lead mb40">
                            Our MadeMill team is ready to begin to work with you to transform your idea into a reality.  All our projects start right here.<br/>
							<br/>
							<strong>Here is our process:<br/></strong>
							
							
							<ul class="lead " data-bullet="ti-check-box">
								<li>You initiate your project today through the MadeMill website.  </li>
								<li>We build you an interactive project timeline and estimate.</li>
								<li>We build and manage you a great team, drawing seamlessly on the best local talent and resources from our ecosystem.</li>
								<li>You approve your project and make your deposit to activate your project</li>
								<li>We launch your project with a focused in-person or virtual MadeMill Session.</li>  
								<li>You track your project online against estimated costs and milestones as we build your prototype or product.</li>
								<li>You work with our partners to prep your prototype for pitching / commercialization.</li>
								<li>You conclude your MadeMill project with a clear plan for your next steps of commercialization clearly identified.</li>
								
                            </ul>
							  <h6 class="uppercase mb16">Are you ready? We can't wait to get started!</h6>
							
							
                        </p>
                        
                    </div>
              					
							
						
						
						
                        <div class="col-sm-6">
                        
							
							  <h4 class="uppercase " style= "padding:10px;">About You</h4>
                            <input id = "form_name" type="text" placeholder="Your Name" />
							<input id = "form_email" type="text" placeholder="Your Email" />
							<input id = "form_phone" type="text" placeholder="Your Phone" />
                            <textarea id = "form_need" placeholder="Your Makerspace / Advanced Digital Media Need" rows="3"></textarea>
                            
						
						<h4 class="uppercase mb16" style= "padding:10px;">About your Project</h4>
                            <p class="lead ">
                                Innovation is difficult to categorize, but pick a few areas from our service lines if possible. We are happy to discuss all our services areas. 
                            </p>
							
							<input  id = "form_businessname" type="text" placeholder="Your Business Name " />
							
                            <div class="select-option">
                                <i class="ti-angle-down"></i>
                                <select  id = "form_businesstype">
                                    <option selected value="Unspecified">Your Business Type:</option>
                                    <option value="Startup / New">Startup / New</option>
                                    <option value="Public Sector">Public Sector</option>
                                    <option value="Clean Technology">Clean Technology</option>
                                    <option value="Aerospace / Defense">Aerospace / Defense</option>
                                    <option value="IoT / Robotics">IoT / Robotics</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Social Enterprise">Social Enterprise</option>
									<option value="All Other">All Other</option>
                                </select>
                            </div>
                            <!--end select-->
                            <form class="mb24">
							 <h6 class="uppercase mb16">Services you Require:</h6>
							<div style = "width:100%;height:40px;">
                                <span>3D Design</span>
                                <div class="checkbox-option" style = "position:absolute;right:0px;float:right;">
                                    <div class="inner"></div>
                                    <input id = "form_design" type="checkbox" name="form_service_3DDesign" value="3D Design" />
                                </div>
								
							</div>
							
							<div style = "width:100%;height:40px;">
                                <span>Advanced Manufacturing</span>
                                <div class="checkbox-option" style = "position:absolute;right:0px;float:right;">
                                    <div class="inner"></div>
                                    <input id = "form_advancedmanufacturing" type="checkbox" name="form_service_AdvancedManufacturing" value="Advanced Manufacturing" />
                                </div>
							</div>

							<div style = "width:100%;height:40px;">
                                <span>Wearable Technology / IoT</span>
                                <div class="checkbox-option" style = "position:absolute;right:0px;float:right;">
                                    <div class="inner"></div>
                                    <input id = "form_wearableiot" type="checkbox" name="form_service_WearableIoT" value="Wearable Technology / IoT" />
                                </div>
							</div>
							
							<div style = "width:100%;height:40px;">
                                <span>Digital Media (VR/AR/Web)</span>
                                <div class="checkbox-option" style = "position:absolute;right:0px;float:right;">
                                    <div class="inner"></div>
                                    <input id = "form_digitalmedia" type="checkbox" name="form_service_DigitalMedia" value="Digital Media (VR/AR/Web)" />
                                </div>
							</div>		


							<div style = "width:100%;height:40px;">
                                <span>Videographic / Animated</span>
                                <div class="checkbox-option" style = "position:absolute;right:0px;float:right;">
                                    <div class="inner"></div>
                                    <input  id = "form_videoanimated" type="checkbox" name="form_service_VideographicAnimated" value="Videographic / Animated" />
                                </div>
							</div>		


							<div style = "width:100%;height:40px;">
                                <span>Mobile Applications</span>
                                <div class="checkbox-option" style = "position:absolute;right:0px;float:right;">
                                    <div class="inner"></div>
                                    <input  id = "form_mobileapplications" type="checkbox" name="form_service_MobileApplication" value="Mobile Applications" />
                                </div>
							</div>									
							
                            </form>
                            <hr>
                            <form id = "form2">
                                <h5 class="uppercase">How should our team contact you?</h5>
                                <div>
                                    <div class="radio-option checked">
                                        <div class="inner"></div>
                                        <input  id = "form_contactemail" type="radio" name="contacttype" value="email" checked="checked" />
                                    </div>
                                    <span>Email</span>
                                </div>
                                <div>
                                    <div class="radio-option">
                                        <div class="inner"></div>
                                        <input id = "form_contactphone"  type="radio" name="contacttype" value="telephone" />
                                    </div>
                                    <span>Telephone</span>
                                </div>

                            </form>	
                            <input onclick = "submit_form()" type="submit" value="Submit" />


							
							We will strive to answer all requests within 2 business days.  <br/>All your information is held strictly confidential.
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>			
			
					

			
			<!--
            <section class="image-bg overlay parallax">
                <div class="background-image-holder">
                    <img alt="Background Image" class="background-image" src="img/cover11.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h3 class="uppercase mb64 mb-xs-32">How we Work</h3>
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="feature feature-1 boxed">
                                <div class="text-center">
                                    <i class="ti-agenda icon"></i>
                                    <h5 class="uppercase mb16">Research & Ideate</h5>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                </p>
                            </div>
                          
                        </div>
                        <div class="col-sm-4">
                            <div class="feature feature-1 boxed">
                                <div class="text-center">
                                    <i class="ti-pencil-alt2 icon"></i>
                                    <h5 class="uppercase mb16">Design & Iterate</h5>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                </p>
                            </div>
                          
                        <div class="col-sm-4">
                            <div class="feature feature-1 boxed">
                                <div class="text-center">
                                    <i class="ti-package icon"></i>
                                    <h5 class="uppercase mb16">Ship & Support</h5>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                </p>
                            </div>
                          
                        </div>
                    </div>
                  
                </div>
              
            </section>
-->
			
			
			<!--
			
            <section class="portfolio-pullup">
                <div class="container">
                    <div class="row row-gapless masonry masonryFlyIn">
                        <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                            <div class="image-tile inner-title hover-reveal text-center">
                                <a href="#">
                                    <img alt="Pic" src="img/project-single-1.jpg" />
                                    <div class="title">
                                        <h5 class="uppercase mb0">Happy Couple</h5>
                                        <span>People / Life</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Animals">
                            <div class="image-tile inner-title hover-reveal text-center">
                                <a href="#">
                                    <img alt="Pic" src="img/project-single-2.jpg" />
                                    <div class="title">
                                        <h5 class="uppercase mb0">Lonely Dog</h5>
                                        <span>Animals / Art</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                            <div class="image-tile inner-title hover-reveal text-center">
                                <a href="#">
                                    <img alt="Pic" src="img/project-single-3.jpg" />
                                    <div class="title">
                                        <h5 class="uppercase mb0">Pondering Blonde</h5>
                                        <span>People / Life</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Objects">
                            <div class="image-tile inner-title hover-reveal text-center">
                                <a href="#">
                                    <img alt="Pic" src="img/project-single-5.jpg" />
                                    <div class="title">
                                        <h5 class="uppercase mb0">Vintage Typewriter</h5>
                                        <span>Objects / Isolated</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Objects">
                            <div class="image-tile inner-title hover-reveal text-center">
                                <a href="#">
                                    <img alt="Pic" src="img/project-single-4.jpg" />
                                    <div class="title">
                                        <h5 class="uppercase mb0">Summer Lovin'</h5>
                                        <span>Objects / Food</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                            <div class="image-tile inner-title hover-reveal text-center">
                                <a href="#">
                                    <img alt="Pic" src="img/project-single-6.jpg" />
                                    <div class="title">
                                        <h5 class="uppercase mb0">Thick Fog</h5>
                                        <span>People / Life</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
            </section>
			-->
			
			<!--
			
            <a id="clients"></a>
            <section class="pt0 pb180 pt-xs-80 pb-xs-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h3 class="mb48 mb-xs-32">Some amazing companies we've had the pleasure to work with.</h3>
                            <div class="text-slider slider-paging-controls text-center relative">
                                <ul class="slides">
                                    <li>
                                        <h5>The guys at Foundry were an absolute pleasure to work with - they took on our project with the same enthusiasm and passion as us.</h5>
                                        <div class="quote-author">
                                            <img alt="Author" class="image-xs mb16" src="img/avatar4.png" />
                                            <h6 class="uppercase mb0">Anna Thompson</h6>
                                            <span>Vault</span>
                                        </div>
                                    </li>
                                    <li>
                                        <h5>We've worked with Foundry on our web presence over the past 8 years and always relish the opportunity to work alongside them.</h5>
                                        <div class="quote-author">
                                            <img alt="Author" class="image-xs mb16" src="img/avatar3.png" />
                                            <h6 class="uppercase mb0">Carl Vance</h6>
                                            <span>Aviary Bar</span>
                                        </div>
                                    </li>
                                    <li>
                                        <h5>There is only once choice when it comes to our marketing collateral, Foundry always deliver inspiring work on-time and budget.</h5>
                                        <div class="quote-author">
                                            <img alt="Author" class="image-xs mb16" src="img/avatar6.png" />
                                            <h6 class="uppercase mb0">Natasha Canter</h6>
                                            <span>Vault</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
            </section>
			
			-->

			
			
  
            <footer class="footer-2 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                            <a href="#">
                                <img alt="Logo" class="image-xs mb32 fade-on-hover" src="img/mademill_logo_light.png" />
                            </a>
                            <h5 class="fade-1-4">Copyright prototypeD TEAM Inc. 2017
                                <br />info@pd.team</h5>
								<h5 class="fade-1-4">MadeMill is funded in part by generous contributions by the FedDev Ontario Program, the City of Ottawa, and the Government of Ontario.</h5>
                          <!--  <ul class="list-inline social-list mb0">
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
				
<!--				<audio id="player" src="http://www.mademill.com/phpuploads/1478975321509_aico_janak.jpg"></audio>-->
				
            </footer>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flickr.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
		
		<script src="tool/js/draggabilly.pkgd.min.js"></script>
		<script src="tool/js/dragdrop.js"></script>
		
		<script src="https://cdn.pubnub.com/pubnub-3.16.4.min.js"></script>
		<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
		
		<script>//submission of the project form
		
		
function guid() {
  function s4() {
    return Math.floor((1 + Math.random()) * 0x10000)
      .toString(16)
      .substring(1);
  }
  return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
    s4() + '-' + s4() + s4() + s4();
}

		var uniqueid = guid();
		//alert(uniqueid);
		
		function submit_form()
		{
			if($("#form_email").val().length > 0)
			{
				var formData = {
					"uniqueid":guid(),
					"name":$("#form_name").val(),
					"email":$("#form_email").val(),
					"telephone":$("#form_phone").val(),
					"need":$("#form_need").val(),
					"businessname":$("#form_businessname").val(),
					"businesstype":$('#form_businesstype').find(":selected").text(),
					"design":  $("#form_design").is(":checked"),
					"advancedmanufacturing":$("#form_advancedmanufacturing").is(":checked"),
					"wearableiot":$("#form_wearableiot").is(":checked"),
					"videoanimated":$("#form_videoanimated").is(":checked"),
					"digitalmedia":$("#form_digitalmedia").is(":checked"),
					"mobileapplications":$("#form_mobileapplications").is(":checked"),
					"contactemail":$("#form_contactemail").is(":checked"),
					"contactphone":$("#form_contactphone").is(":checked")
				};
				$.post('mail/mail.php', { data: JSON.stringify(formData) }, function(data) {alert((data))});
			}
			
		}
		
		</script>
		


<script>

//subscribe to your own channel
// initiate PubNub for WebSocket communications
  var pubnub;
  pubnub = PUBNUB({
      subscribe_key: 'sub-c-6cf42a00-81ab-11e6-8c91-02ee2ddab7fe', // always required
      publish_key: 'pub-c-255d427e-7ff5-4766-9cb4-948cb3264582', // only required if publishing
      uuid: uniqueid // only required if publishing
  });


/*

window.addEventListener("focus", function(event) { console.log("has Focus");  $.ajax({type: 'GET',async: true, cache: false, url: 'php/presence_focus.php?data=' + uniqueid}); }, false);
window.addEventListener("blur", function(event) {  console.log("lost Focus"); $.ajax({type: 'GET',async: true, cache: false, url: 'php/presence_blur.php?data=' + uniqueid}); }, false);

window.addEventListener("onbeforeunload", function(event) {  console.log("lost Focus"); $.ajax({type: 'GET',async: true, cache: false, url: 'php/presence_blur.php?data=' + uniqueid}); }, false);
window.addEventListener("beforeunload", function(event) {  console.log("lost Focus"); $.ajax({type: 'GET',async: true, cache: false, url: 'php/presence_blur.php?data=' + uniqueid}); }, false);
window.addEventListener("unload", function(event) {  console.log("lost Focus"); $.ajax({type: 'GET',async: true, cache: false, url: 'php/presence_blur.php?data=' + uniqueid}); }, false);
*/
/*

//setInterval(refreshFocus,1000);
$( "#clickMe" ).click(function() {
	
 // alert( "Handler for .click() called." );
});	

*/

var  audio = new Audio();

	   function voice()
	   {
		  // $( "#clickMe" ).trigger( "click" );
		   	responsiveVoice.speak("And then say this");

	   }
$(document).ready(function() {
loadGallery();
//document.getElementById('player').play();
//setTimeout(voice,2500);

	
//$.ajax({type: 'GET',async: true,cache: false,url: 'php/presence_focus.php?data=' + uniqueid});
//console.log("I said I submitted it");

//alert("welcome");
 
	pubnub.subscribe({
		channel: uniqueid,
		connect: pubnub_connect,
		presence: function(m){
			
			//console.log("Presence Event"); // online status events
			//console.log(m) // online status events
			}   ,
		
		callback: function(m) {
		  console.log(m);
		  if(m.audioFile)
		  {
			  audio = new Audio();
			 
	//		  alert(m.audioFile);
			setTimeout(function(){ audio.src = m.audioFile;audio.play();},1000);
			//alert(m.audioFile);  
		  }
		  else //the message had to come from someone else 
		  {
//		   alert(m.message);
//		     	responsiveVoice.speak(m.message);
				responsiveVoice.speak(m.message, m.voice, {rate: m.rate, pitch:m.pitch});
//				Welcome to Made Mill.  My name is Echo. I am a hybrid artificial intelligence.
		  }
		},
			error: function(err) {
			console.log(err);
		}
	});

});

 
function pushSomething()
{
	/*
	moveMessage= {messagefrom: uniqueid, messageto: "someotherusernumber1234", message: "some chat message"};
	pubnub.publish({
      channel: 'chat',
      message: moveMessage,
      callback: function(m){
          console.log(m);
      }
  });    */    
}
 
  
function pubnub_connect()
{
	/*
	pubnub.publish({
		channel: 'presentation',
		message: moveMessage,
		callback: function(m){
		//     console.log(m);
		}
	});          
	*/
	
//	  alert("connected");
}

  
</script>
	
	
<script>

function loadGallery()
{
	$.ajax({type: 'post', cache: false, async: true, dataType:'json', url: 'php/loadGallery.php'
	}).done(function(data) 
		{
			var divString = "";
			for (var i = 1; i<data.length; i++)
			{
				 divString += "<div class='col-md-4 col-sm-6 masonry-item project' data-filter='" +  data[i][3] + "'>" +
					"<div class='image-tile inner-title hover-reveal text-center'>" +
							"<img alt='" +  data[i][1] + "' src='" +  data[i][0] + "' />" +
							"<div class='title'>" +
								"<h5 class='uppercase mb0'>" +  data[i][1] + "</h5>" +
								"<span>" +  data[i][2] + "</span>" +
							"</div>" +
					"</div>" +
				"</div>";					
	
			}
			$("#imageGallery").html(divString);
			
		}
	);
}								
								

</script>

	
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93560508-1', 'auto');
  ga('send', 'pageview');

</script>	
		
		
		
    </body>
</html>
