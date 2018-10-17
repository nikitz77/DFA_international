<!doctype html>
<html class="no-js" lang="en">
  <head>
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!--END OF BOOTSTRAP------------------------->
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">	
	
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Digital Forensics Auxiliary">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Page Title -->
	<title>Digital Forensics Auxiliary</title>
    <!-- Favicon Icon -->
  	<link rel="icon" href="img/favicon.png">

	<!--OTHER CDN TAGS---------------------------------------->
	
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

	
	<!-- Modernizr (came with theme) -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
	<!-----------------------------------GOOGLE CHARTS------>
	 <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Reports'],
          ['2015',  14850],
          ['2016',  37769],
          ['2017',  18594]
        ]);

        var options = {
          title: 'Cyber Sex Trafficking Reports per Year',
          curveType: 'function',
          legend: { position: 'bottom' }
		  /*chartArea.backgroundColor: '#00000',
		  trendlines: {
			0: {
			  type: 'linear',
			  color: 'yellow',
			  lineWidth: 3,
			  opacity: 0.3,
			  showR2: true,
			  visibleInLegend: true
				}
			},
			color: '#FFC206',*/
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	<!------------------END OF GOOLGE CHARTS----------->
	

  </head>

  <body>
  

	
    <!-- Start Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

	<!-- Start Site Header -->
    <header class="site-header">
      <div class="container header-wrap">
          <div class="site-branding">
            <!-- For Image Logo -->
            <a href="index.php" class="custom-logo-link">
              <img src="img/dfa_logo.png" alt="" class="custom-logo">
            </a>
            <!-- For Site Title -->
            <span class="site-title">
              <a class = "title" href="index.php">DFA</a>
            </span>
          </div>
          <nav class="primary-nav">
            <ul class="primary-nav-list nav">
              <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent active"><a href="#home">HOME</a>
                <!--ul>
                  <li class="menu-item"><a href="index.html">SLIDER HOME</a></li>
                  <li class="menu-item"><a href="home-video-bg.html">VIDEO HOME</a></li>
                </ul-->
              </li>
              <li class="menu-item"><a href="#about">ABOUT</a></li>
              <li class="menu-item"><a href="#service">GOALS</a></li>
			  <li class="menu-item"><a href="#gallery">THE RESCUE</a></li>
              <li class="menu-item"><a href="#cause">THE PROJECT</a></li>

              <!--li class="menu-item"><a href="#event">EVENT</a></li-->
              <!--li class="menu-item"><a href="#blog">NEWS</a></li-->
			  <li class="menu-item"><a href="#team">TEAM</a></li>
              <li class="menu-item"><a href="#contact">CONTACT</a></li>
            </ul>
          </nav>
      </div><!-- .header-wrap -->
    </header>
	<!-- End Site Header -->

    <!-- Start Hero Section -->
	<section class="hero text-center" id="home">
		<div class="single-slide">
			<div class="container">
				<!--<h1 class="w3-wide">DIGITAL <span>FORENSICS</span>   AUXILIARY</h1> -->
				<h1 class="zif-ha2">DIGITAL <span>FORENSICS</span>   AUXILIARY</h1>
				<h3>Saving children from exploitation through digital forensics</h3>
				<!--h5>Donation and help us for homeless people.We are a organization that helps for children people.</h5-->
<!---------------------------------------------------MODAL-->

				<div class="hero-btn-group">
				<!-- Trigger the modal with a button -->
                   <a href="" class="t-btn hero-btn-2" data-toggle="modal" data-target="#CSTinfoModal"><b>LEARN MORE</b></a>
				   <a href="" class="t-btn hero-btn-1" data-toggle="modal" data-target="#payPalModal" ><b>DONATE NOW</b></a>
				</div>
			</div>
						

	<!-- Modal -->
	<!------------------CST MODAL--------->
		<div id="CSTinfoModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content modal-lg" style="padding:0px;" >
			  <div class="modal-header">
				<!--Exit button-->
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><b>Cyber Sex Trafficking</b></h4>
			  </div>
			  <div class="modal-body">
			  
				<p class="modal-par"><b>What is Cyber Sex Trafficking (CST)?</b></p>
				
				<p class="modal-par">According to Webster’s dictionary, the term trafficking means “to trade in or deal in” in some type of merchandise.  CST is the trade or illicit market/commerce with all its components taking place in the cyber environment (i.e. internet).  Its primary merchandise are imageries (photographs and videos) of children being sexually exploited.  In any form of trade or commerce, the merchandise is exchanged for an item of value, usually money, and CST is no exception.</p>
				<br>
				<br>
				<p class="modal-par"><b>How does CST work?</b></p>
				<br>
				<p class="modal-par">Since CST is just another form of trade involving the exchange of money (payment) for the often live images (merchandise) of children being sexually exploited, the basic principle of economics pertaining to supply and demand applies.  The supply side is represented by the purveyors of the merchandise. They sexually exploit children for their online consumers (i.e. pedophiles and sexual perverts worldwide) who represent the demand side of CST.  A typical CST transaction follows a sequence we call <u>CAPE</u> which is outlined below:</p>
				<br>
				<p class="modal-par">
				<b><u>1 - Connection Phase</u></b> – Pedophiles or sexual perverts troll in their favorite social media (i.e. Facebook, Google Plus, Twoo, etc.) -- websites to make friends or connections with purveyors who also troll the websites for potential customers.  Rapport and common interest is established.  Trust is built over a period of time between the representatives of both the supply and demand side.  At this stage, the customers assess the capability of the purveyors with regards to what type of sexual shows the purveyor can produce and stream live on the internet.</p>
				<p class="modal-par">
				<b><u>2 - Arrangement Phase</u></b> – Once rapport and a certain level of trust is established, arrangements are made detailing the exact nature of sexual activity that the customer would like to view.  The customer and the purveyor negotiate and come to an agreement relative to the content of the live sexual show (i.e. ages and gender of the children who will participate, the type of sexual acts that the children will perform), the date/time when the live sexual show will take place and the price of the show. Various payment methods are discussed during this phase.
				</p>
				<p class="modal-par">
				<b><u>3 - Payment Phase</u></b> – The customer pays the purveyor the agreed upon amount by sending a wire transfer via money transfer businesses (i.e. Western Union, Xoom, Pay Pal, etc.).  Depending on the level of established trust and rapport, the payment could be a single payment in full or it could come in installment form.  For example, half of the amount agreed upon could be sent before the show and then the other half after the completion of the show.
				</p>
				<p class="modal-par">
				<b><u>4 - Exploitation Phase</u></b> – Children are sexually exploited in front of a web camera, and the live sex show is streamed via the internet for viewing by the customers who are, more often than not, located halfway around the world.
				</p>
				<br>
				<br>
				
				<p class="modal-par"><b>How will DFA Save Children from CST?</b></p>
				<br>
				<p class="modal-par">Those who are involved in the crime of CST are using existing digital technology to sexually abuse children to satisfy their sexual perversion.  To save children from this nefarious criminal phenomena, DFA will also use technology to counter this shameful trend.  To accomplish this, DFA will assist the under-resourced and poorly funded law enforcement entities in countries plagued by CST in their efforts  to combat not only the supply side, but more importantly, the demand side of this trade by:</p>
				<br>	
				<p class="modal-par">
				1 - Establishing an in-country state-of-the-art digital forensics laboratory for use exclusively by Law Enforcement Officers (LEO) who are located in poor countries and who are tasked with investigating all cyber-related crimes
				<br>
				2- Providing these LEOs with the proper training on how to use the forensics laboratory in conducting industry-accepted forensics examinations of digital devices (i.e. identification, collection, preservation and storage of digital evidence) that can support criminal prosecutions anywhere in the world
				<br>				
				3 - Providing training and encouragement in the speedy coordination and cooperation with international law enforcement in dealing with demand side of this crime 
				</p>
				<br>
				<br>
				<p class="modal-par">						
				By promptly arresting and prosecuting those (i.e. pedophiles, sexual perverts) who are creating the demand for CST, children will be spared from potential exposure to victimization.  DFAs assistance is geared towards eliminating the demand side through speedy arrest and successful prosecution of the consumers of CST’s primary merchandise.  DFA’s assistance is crucial in the rapid nature of securing the necessary digital evidence to arrest, prosecute, convict, and incarcerate those who represent the demand side of this crime and who are located thousands of miles from the children who were sexually abused on their behalf.
				<br>
				
				As in any market place, or in any illegal trafficking trade, the demand side always fuels the supply side.  DFA believes that curbing the demand side of CST in the long run saves children from falling victim of this scourge.     
				</p>
				<br>
				<br>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
	<!----------------END OF CST MODAL--------->
	<!-----UNDER CONSTRUCTION MODAL-------->
	<!-- Modal -->
	<!--a href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a-->

		<!-- Generated markup by the plugin -->
		<div id="underConstruction" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Under Construction</h4>
			  </div>
			  <div class="underConst-modal">
				<i class="icofont icofont-tools-alt-2"></i>
				<p class = "underConst">We are currently building this feature for your convenience. Thank you!</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	<!-----------END OF UNDER COSNTRUCTION MODAL-------->

	<!-----PAYPAL MODAL-------->
	<!-- Modal -->
	<!--a href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a-->

		<!-- Generated markup by the plugin -->
		<div id="payPalModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Thank you in advance for your donation</h4>
			  </div>
			  <div class="payPal-modal-content">
				<p class = "underConst">				   
				<form  action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input  type="hidden" name="hosted_button_id" value="ETVC8GNHVK6BJ">
					<input  type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			  </div>
			  
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	<!-----------END OF PAYPAL MODAL-------->
	<!---------END OF MODAL----------------------------------->
	
	
		</div><!-- .single-slide -->
        <div class="hero-slider owl-carousel">
            <img src="img/shanties2.jpg" alt="">
            <img src="img/pedo2.jpg" alt="">
        </div>
	</section>
    <!-- End Hero Section -->

    <!-- Start Feature Section -->
    <section class="feature section black-bg text-center">
        <div class="container">
            <div class="row flex">
                <div class="col-sm-4">
                    <div class="single-feature">
                        <i class="icofont icofont-coins"></i>
                        <h3>Donate to our Cause Now</h3>
                        <p>Any donation you can provide will help our cause greatly</p>
                        <a href=""data-toggle="modal" data-target="#payPalModal">See More <i class="icofont icofont-arrow-right"></i></a>
                    </div>
                </div><!-- .col -->
                <div class="col-sm-4">
                    <div class="single-feature">
                        <i class="icofont icofont-users"></i>
                        <h3>Join As A Volunteer</h3>
                        <p>If you think that you can put your services to our cause, please contact us here.</p>
                        <a href="#contact">Send us a Message<i class="icofont icofont-arrow-right"></i></a>
                    </div>
                </div><!-- .col -->
                <div class="col-sm-4">
                    <div class="single-feature">
                        <i class="icofont icofont-read-book"></i>
                        <h3>Share our Message<h3>
                        <p>Please share our cause on social media.</p>
		
						<a href=""data-toggle="modal" data-target="#underConstruction"><i class="fa fa-facebook"></i></a>
						<a href=""data-toggle="modal" data-target="#underConstruction"><i class="fa fa-twitter"></i></a>
						<a href=""data-toggle="modal" data-target="#underConstruction"><i class="fa fa-linkedin"></i></a>
						<a href=""data-toggle="modal" data-target="#underConstruction"><i class="fa fa-instagram"></i></a>

                    </div>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

    <!-- Start About Section -->
    <section class="about section" id="about">
        <div class="container">
            <div class="section-header">
                <h2>ABOUT</h2>
                <p class="section-line"><i>"Children’s talent to endure stems from their ignorance of alternatives."</i> 
				<br> - Maya Angelou</p>
		
            </div><!-- .section-header -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordian-wrapper">
                        <div class="single-accordian">
                            <h3 class="accordian-head">THE PROBLEM</h3>
                            <div class="accordian-body">We were all children once, and as the late Maya Angelou stated, it is the children’s “ignorance of the alternatives” that makes them thrive.  It is their innocence.  Childhood is a period of carefree innocence and total dependence upon those around us.  It is also a time of rapid learning.  The knowledge and experiences we acquired in our youth inevitably define who we are as adults.
							<br>
							<br>
							Today in many third world countries around the world that childhood and carefree innocence is taken away everyday.  It is stolen and traded for money by those who are supposed to be the children’s protectors and providers.  The extent of the negative effect of their stolen innocence is still unknown to us. Stolen innocence occurs when children are subjected to online sexual exploitation for profit.  This phenomena known as Cyber Sex Trafficking, is one of the darkest sides of internet proliferation worldwide.  Sadly, often times, the perpetrator who steal and sell their innocence are their fathers, mothers, aunts, uncles, close friends or anyone whom they trust. </div>
                        </div><!-- .single-accordian -->
                        <div class="single-accordian">
                            <h3 class="accordian-head">OUR SOLUTION</h3>
                            <div class="accordian-body"> 
							
							We present an opportunity to reduce, if not eliminate the number of children who will be sexually exploited online.  Our offer is primarily manifested in our actions to assist law enforcement agencies.  Our actions leads to the creation of a credible threat to pedophiles and sexual perverts worldwide, who are primarily responsible for fueling the demand that drives the sexual exploitation of children.  The only thing that stands between pedophiles and children is the threat of arrest and incarceration.  And unfortunately, in some situations that threat is not even sufficient to deter them from seeking to sexually exploit children.  This offer means that we will donate our years of training and expertise, and provide law enforcement authorities in third-world countries the wherewithal to create that credible threat to violators, and that is the threat of certainty of arrest, prosecution, conviction and incarceration.
							</div>
                        </div><!-- .single-accordian -->
                        <div class="single-accordian">
                            <h3 class="accordian-head">CALL TO ACTION</h3>
                            <div class="accordian-body">A school teacher takes notice of Rosanna, a lethargic nine year old little girl who often falls asleep in class.  She has woken her up on several occasions and had sent notes to her parents recommending that the little girl be given an opportunity to sleep well at night.  The teacher also noted that her attendance records is below average.  She wondered if the little girl is suffering from some kind of illness that keeps her from sleeping well.  No response from the parents and the school nurse could not determine what could be keeping the little girl from getting a good night’s sleep.
							<br>
							<br>
							The answer came weeks later when government social workers accompanied by the local police came to school to take Rosanna away.  The social workers informed the teacher that Rosanna will be taken under protective custody and she will be housed at a protective shelter for children.  It turns out that Rosanna is among the several children, in their economically challenged neighborhood, who has been identified by the police as one of the many victims who has been sexually exploited by her own mother and her mother’s boyfriend.  She was made to perform various sexual acts with adults and other children in front of a webcam by those who are supposed to be her guardian/protectors.  Her performances often took place during the hours when she should be sleeping, but scheduling of customers located in different time zones in Europe, USA, Canada and other far flung land, necessitates that she interrupts her sleep to perform.
							<br>
							<br>							
							This scenario is all too common in many economically depressed, drug infested areas in the Philippines and other countries.  Frequently, the parents, aunts, uncles, close relatives, and those who the children trust to protect them, turn on them and monetize them by turning them into child sex performers.
							<br>
							<br>							
							Welcome to Cyber Sex Trafficking, it is the darkest of crimes that preys on the weakest of the weak.  The explanation for this phenomena is often grounded in economics and survival.  Social workers scratch their heads and wonder how parents can subject their own children to such exploitation.  A variety of excuses/reasons have been put forward.  Some professionals have verbalized that there is a lack in social programs and job opportunities and families need to eat, need to pay rent, need to buy medicine and basically sustain daily basic needs.  We can think about costly government solutions, far reaching and sustaining campaigns to reduce poverty, for it seems to cause people to ignore basic conventions and corrode people’s sense of morality.  Maybe religious leaders need to step in.
							<br>
							<br>
							One thing is inescapable, children are being abused and exploited now because there is a demand for this sexual exploitation that is being driven by those who are thousands of miles away from these economically challenged areas.  The demand is coming from cities in advanced, rich countries where pedophiles and sexual perverts live.  And the lure of easy money to be made in CST is too strong, and it causes many to form all sorts of rationalization that can provide them with an easy psychological refuge, all to the children’s detriment.
							<br>
							<br>
							At DFA we believe that there is a role for anti-poverty campaigns to play in eradicating CST.  At the same time, we believe that now is the time to act to reduce and/or eliminate the demand for this activity.  Sustained anti-poverty and morality campaigns that are yet to be developed, that could address the dynamics of CST’s supply side, can eventually run concurrent with DFA’s efforts that is simply focused on reducing, if not eliminating the demand for the sexual exploitation of children.
							<br>
							<br>
							If you believe that a child’s innocence should never be stolen for any reason whatsoever, come and join us.  We are going to take the fight to pedophiles and sexual perverts worldwide, to those who fuel the demand for these unconscionable acts against Rosanna and other children in many parts of the world.
							<br>
							<br>
							<br>
							Alex Ilusorio
                            <br>                                                                                                      
							Founder
							</div>
                        </div><!-- .single-accordian -->
                    </div>
                </div><col>
                <div class="col-lg-6">
                    <div class="video-section">
                        <!-- For Youtube -->
                        <div class="embed-responsive embed-responsive-16by9">
							<iframe width="816" height="459" src="https://www.youtube.com/embed/rv1SQRlShzM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                      <!-- For Vimeo -->
                        <!--div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="816" height="458" src="https://player.vimeo.com/video/172077385?title=0&byline=0&portrait=0&color=EE5A3F&autoplay=0&loop=0&wmode=transparent" allowfullscreen>
                            </iframe>
                        <!--/div-->
                    </div>
                </div><col>
            </div>
        </div>
    </section>
    <!-- End About Section -->
	
	
    <!-- Start Service Section -->
    <section class="service section black-bg" id="service">
        <div class="container">
            <div class="section-header white">
                <h2>GOALS</h2>
                <p class="section-line">How do we plan to spend the donated funds? </p>
            </div><!-- .section-header -->
            <div class="row flex text-center">
                <div class="col-sm-4">
                    <div class="single-feature">
                        <i class="icofont icofont-test-tube-alt"></i>
                        <h3>ESTABLISH & MAINTAIN A DIGITAL FORENSICS LABORATORY</h3>
                        <p class="service-par">More often as a result of lack of planning or lack of resources, law enforcement agencies in mostly poor or third world countries are under-resourced and are poorly trained in the type of crime which employs the use of digital devices (computers, lap tops, mobile phones, tablets, digital storage devices, etc.) to accomplish the illegal acts.  In the crime of Cyber Sex Trafficking, the online sexual exploitation of children, the illegal acts commences and ends with the use of some type of digital device.  As such, a digital forensics laboratory is the main tool that law enforcement must have to conduct the required forensics examinations (i.e. identify, collect, store and preserve digital evidence) of devices belonging to the perpetrators to secure the evidence of the crime that are necessary to support criminal prosecutions.  DFA’s primary focus is the establishment of a fully functioning, state-of-the-art digital forensics laboratory for the use by law enforcement officers.  In some countries, a functioning digital forensics laboratory is non-existent.</p>
                        <!--a href="">See More <i class="icofont icofont-arrow-right"></i></a-->
                    </div>
                </div><!-- .col -->
                <div class="col-sm-4">
                    <div class="single-feature">
                        <i class="icofont icofont-investigation"></i>
                        <h3>PROVIDE STATE-OF-THE-ART TRAINING TO LAW ENFORCEMENT OFFICERS</h3>
                        <p class="service-par">If the digital forensics laboratory is the main tool in addressing Cyber Sex Trafficking, appropriate state-of-the-art training must be provided to law enforcement officers who will use the laboratory.  DFA’s objective is to capacitate law enforcement officers in gathering the required evidence to support the ensuing criminal prosecutions.  DFA’s fully trained, experienced and certified examiners will provide training, mentoring, and coaching on the internationally accepted forensic examination standards.  Through these types of interfaces, DFA experts will capacitate and guide untrained or poorly trained law enforcement officers from poor countries, not only on the use of top-notch forensics equipment, but also on the current judicially approved/accepted standards in conducting digital forensics examinations. </p>
                        <!--a href="">See More <i class="icofont icofont-arrow-right"></i></a-->
                    </div>
                </div><!-- .col -->
                <div class="col-sm-4">
                    <div class="single-feature">
                        <i class="icofont icofont-lock"></i>
                        <h3>MAINTAIN A CADRE OF CERTIFIED MENTORS</h3>
                        <p class="service-par">DFA will recruit and maintain a cadre of certified examiners who can deploy to foreign countries to be part of the training, mentoring, and coaching team who will interface with law enforcement officers.  To become a fully certified digital forensics examiner, one must complete costly, intensive and highly specialized training.  DFA’s objective is to recruit U.S.-based and fully certified examiner(s) who can deploy on a rotational basis to foreign countries.  If pro-bono services from qualified/certified examiners are not available, DFA will hire and support the deployment of examiners who meets DFA’s stringent technical capability requirements.</p>
                        <!--a href="">See More <i class="icofont icofont-arrow-right"></i></a-->
                    </div>
                </div><!-- .col -->
			</div>
			<div class="row flex text-center">
                <div class="col-sm-4">
                    <div class="single-feature">
						<i class="icofont icofont-holding-hands"></i>
                        <h3>CULTIVATE RELATIONSHIPS WITH THIRD WORLD LAW ENFORCEMENT ORGANIZATION</h3>
                       <p class="service-par">By working hand in hand with the Philippine and other international law enforcement agencies, DFA will cultivate professional relationships with local law enforcement officers tasked with enforcing laws pertaining to Cyber Sex Trafficking (CST).  Once this has been accomplished, the next task is to assess the needs, challenges, and barriers faced by the law enforcement officers involved in CST investigations.  This will be accomplished through frequent field evaluation and assessment visits by DFA.  These assessments will be utilized by DFA to design the level of assistance to be offered to a particular country.</p>
                        <!--a href="">See More <i class="icofont icofont-arrow-right"></i></a-->
                    </div>
                </div><!-- .col -->
                <div class="col-sm-4">
                    <div class="single-feature">
                        <i class="icofont icofont-brainstorming"></i>
                        <h3>EDUCATE THE PUBLIC & EXPAND OUR NETWORK</h3>
                        <p class="service-par">DFA will shed the light on the dark crime of Cyber Sex Trafficking (CST) by not only educating the public of its existence, but also enlisting the public’s help in assisting law enforcement units in addressing CST.  DFA will strive for widest possible social media exposure.  To aid in reaching such exposure, DFA will expand its network by working with like-minded organizations who are concerned about the phenomena of exploitation of children in one form or another. </p>
                        <!--a href="">See More <i class="icofont icofont-arrow-right"></i></a-->
                    </div>
                </div><!-- .col -->
				<div class="col-sm-4">
						<div class="single-feature">
                        <i class="icofont icofont-world"></i>
                        <h3>EXPANSION TO LOCATIONS IN NEED</h3>
                        <p class="service-par">Once successful in executing the “Pilot Project” in the Philippines, DFA will review the viability of turning over the management, maintenance, and operation of the fully functioning laboratory to third world authorities.  DFA will replicate the process of establishing a similar laboratory in another under-resourced country that is plagued by the Cyber Sex Trafficking menace.</p>
                        <!--a href="">See More <i class="icofont icofont-arrow-right"></i></a-->
                    </div>
                </div><!-- .col -->
			</div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Start Donate Section -->
    <section class="donate section text-center">
    	<div class="container">
			<div class="w3-panel w3-yellow">
				<h2><div class="w3-opacity">HELP SAVE EXPLOITED CHILDREN AND GIVE YOUR DONATION</div></h2>
				<p></p>
			</div>
    		<a href="" class="t-btn donate-btn" data-toggle="modal" data-target="#payPalModal">DONATE NOW</a>
    	</div>
    </section>
    <!-- End Donate Section -->
	
	 <!-- Start Gallery Section -->
    <section class="gallery section" id="gallery">
        <div class="container">
        	<div class="section-header">
                <h2 id="rescue">THE RESCUE</h2>
                <p class="section-line">Go behind the scenes and see what a rescue operation looks like.</p>
            </div>
			<!-- .section-header -->
            <!--div class="portfolio zoom-gallery gutter-less">
                <div class="grid-sizer"></div>
                <div class="portfolio-item">
                    <a href="img/gallary-l-1.jpg" class="gallery-item"><img src="img/gallary-1.jpg" alt="">
                    </a>
                </div><!-- .portfolio-item -->
				<!--div class="portfolio-item">
                    <a href="img/gallary-l-2.jpg" class="gallery-item"><img src="img/gallary-2.jpg" alt="">
                    </a>
                </div><!-- .portfolio-item -->
                <!--div class="portfolio-item">
                    <a href="img/gallary-l-3.jpg" class="gallery-item"><img src="img/gallary-3.jpg" alt="">
                    </a>
                </div><!-- .portfolio-item -->
                <!--div class="portfolio-item">
                    <a href="img/gallary-l-4.jpg" class="gallery-item"><img src="img/gallary-4.jpg" alt="">
                    </a>
                </div><!-- .portfolio-item -->
                <!--div class="portfolio-item">
                    <a href="img/gallary-l-5.jpg" class="gallery-item"><img src="img/gallary-5.jpg" alt="">
                    </a>
                </div><!-- .portfolio-item -->
                <!--div class="portfolio-item">
                    <a href="img/gallary-l-6.jpg" class="gallery-item"><img src="img/gallary-6.jpg" alt="">
                    </a>
                </div>
				<div class="portfolio-item">
                    <a href="img/gallary-l-6.jpg" class="gallery-item"><img src="img/gallary-6.jpg" alt="">
                    </a>
                </div><!-- .portfolio-item -->
            <!--/div><!-- .portfolio -->
			<!--PHASE 1-->
			<div class="row flex">
     			<div class="col-sm-12">
					<p class="phase"> <b>PHASE ONE:</b> &nbsp Undercover police officers make online contact and negotiate with suspected violators in order to locate sexually exploited children.</p>
				</div>
			</div>
			<div class="row flex">
    			<div class="col-sm-6">
					<img src="img/IMG_2664.jpg" class="cause-thumb" alt="">		
				</div>
				<div class="col-sm-6">
					<img src="img/local-team2.jpg" class="cause-thumb" alt="">	
				</div>
			</div>
			<br>
			<!--PHASE 2-->
			<div class="row flex">
     			<div class="col-sm-12">
					<p class="phase"> <b>PHASE TWO:</b> &nbsp Once the location is identified, law enforcement officers plan the rescue of the children, and secure the location during the rescue operation.</p>
				</div>
			</div>
			<div class="row flex">
    			<div class="col-sm-6">
					<img src="img/IMG_E2730.jpg" class="cause-thumb" alt="">		
				</div>
				<div class="col-sm-6">
					<img src="img/IMG_2717.jpg" class="cause-thumb" alt="">	
				</div>
			</div>
			<br>
			<!--PHASE 3-->
			<div class="row flex">
				<div class="col-sm-12">
					<p class="phase"> <b>PHASE THREE:</b> &nbsp Government social workers assisted by law enforcement officers removes sexually exploited children from the abusive environment and place them under protective custody.</p>
					<p class="phase">**NOTE: DSWD  = Department of Social Welfare and Development (Philippines)</p>
				</div>
			</div>
			<div class="row flex">			
    			<div class="col-sm-6">
					<img src="img/investigator.jpg" class="cause-thumb" alt="">		
				</div>
				<div class="col-sm-6">
					<img src="img/IMG_2687.jpg" class="cause-thumb" alt="">	
				</div>
			</div>	
			<br>
			<!--PHASE 4-->
			<div class="row flex">
     			<div class="col-sm-12">
					<p class="phase"> <b>PHASE FOUR:</b> &nbsp Law enforcement officers identify the suspected exploiters.</p>
					<p class="phase">**NOTE: WCPC = Women and Children Protection Center (Philippines)</p>
					
				</div>
			</div>
			<div class="row flex">
    			<div class="col-sm-4>
					<img src="img/IMG_E2737.jpg" class="cause-thumb" alt="">		
				</div>
				<div class="col-sm-4">
					<img src="img/IMG_2720.jpg" class="cause-thumb" alt="">	
				</div>
				<div class="col-sm-4">
					<img src="img/perp1.jpg" class="cause-thumb" alt="">	
				</div>				
			</div>
			<br>
			<!--PHASE 5-->
			<div class="row flex">
				<div class="col-sm-12">
					<p class="phase"> <b>PHASE FIVE:</b> &nbsp Law enforcement officers and social workers calms and reassures rescued children prior to their transportation to protective shelters.</p>
				</div>
			</div>
			<div class = "row flex">
				<div class="col-sm-6">
					<img src="img/IMG_2703.jpg" class="cause-thumb" alt="">		
				</div>
				<div class="col-sm-6">
					<img src="img/IMG_2705.jpg" class="cause-thumb" alt="">	
				</div>
			</div><!--row-->
			<br>
			<!--PHASE 6-->
			<div class="row flex">
				<div class="col-sm-12">
					<p class="phase"> <b>PHASE SIX:</b> &nbsp Law enforcement officers takes into custody the identified children’s exploiters. Sadly, often they are their parents, other family members, and/or known close friends or relatives.</p>
				</div>
			</div>
			<div class="row flex">			
    			<div class="col-sm-6">
					<img src="img/IMG_2676.jpg" class="cause-thumb" alt="">		
				</div>
				<div class="col-sm-6">
					<img src="img/IMG_2696.jpg" class="cause-thumb" alt="">	
				</div>
			</div><!--row-->
			<br>
			<!--PHASE 7-->
			<div class="row flex">
				<div class="col-sm-12">
					<p class="phase"> <b>PHASE SEVEN:</b> &nbsp Law enforcement officers attempts to identify and collect digital devices for subsequent forensics examination for evidentiary purposes.</p>
				</div>
			</div>
			<div class="row flex">			
    			<div class="col-sm-6">
					<img src="img/IMG_2733.jpg" class="cause-thumb" alt="">		
				</div>
				<div class="col-sm-6">
					<img src="img/IMG_E2724.jpg" class="cause-thumb" alt="">	
				</div>
			</div><!--row-->
			<br>
        </div><!-- .container -->
   
	
	    		<!--a href=""><img src="img/investigator.jpg" alt=""></a>
    			<a href=""><img src="img/raid-prep.jpg" alt=""></a-->
	</section>
    <!-- End Gallery Section -->
    

    <!-- Start Cause Section -->
    <section class="cause section" id="cause">
    	<div class="container ">
    		<div class="section-header">
                <h2>THE &nbsp PROJECT</h2>
                <p class="section-line">We are planning to set up our first project in the Philippines.</p>
            </div><!-- .section-header -->
    		<div class="row flex">
    			<!--div class="col-sm-4">
	    			<div class="single-cause">
	    				<img src="img/cause-1.jpg" class="cause-thumb" alt="">
	    				<h3>PROVIDE EDUCATION FOR CHILD</h3>
	    				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque point corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident for help.</p>
	    				<div class="donate-status">
	    					<div class="status">
	    						<span>RAISED</span>
	    						<span>TARGET</span>
	    					</div>
	    					<div class="status-bar "><div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 80%"></div></div>
	    					<div class="status">
	    						<span>5000 $</span>
	    						<span>7000 $</span>
	    					</div>
	    				</div><!-- .donate-status -->
	    				<!--a href="#" class="t-btn t-btn-ex-small" >DONATE NOW</a>
	    			</div>
	    		</div><!-- .col -->
	    		<!--div class="col-sm-4">
	    			<div class="single-cause">
	    				<img src="img/cause-2.jpg" class="cause-thumb" alt="">
	    				<h3>HELP FOR MEDICAL & HEALTH</h3>
	    				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque point corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident for help.</p>
	    				<div class="donate-status">
	    					<div class="status">
	    						<span>RAISED</span>
	    						<span>TARGET</span>
	    					</div>
	    					<div class="status-bar"><div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 75%"></div></div>
	    					<div class="status">
	    						<span>5000 $</span>
	    						<span>8000 $</span>
	    					</div>
	    				</div><!-- .donate-status -->
	    				<!--a href="#" class="t-btn t-btn-ex-small">DONATE NOW</a>
	    			</div>
	    		</div><!-- .col -->
	    		<div class="col-sm-4">
					<h4><b>FOUNDER'S EXPERIENCE</b></h4>
					<br>
					<p class = "project-par">From 2014 to 2016 while working for a non-governmental organization in Cebu, Philippines, Alex Ilusorio, (Founder and President of DFA) was personally involved in numerous rescue operation conducted by law enforcement authorities of children who were participants in these sexual exploitation shows. His firsthand experience in Cebu galvanized his desire to rescue and/or prevent children from being exploited.  He came to know how pervasive the problem is that it has become almost like a "cottage industry" in certain parts of Cebu.  One that particularly haunts him was a nine-month old baby being shown in a horrific situation.  These sexual exploitation shows are streamed through the internet for viewing in the comfort of the violators' offices or homes.  Payments for these shows vary depending on the “complexity” of what is being requested.  The payments for these shows are normally and conveniently accomplished through electronic money transfers (i.e. PayPal, Western Union, Xoom, Instagram, etc.).</p>
					<br>
					<br>
					<div class="donate-status">
	    				<div class="status">
	    					<span>RAISED</span>
	    					<span>TARGET</span>
	    				</div>
	    				<div class="status-bar">
							<div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 70%">
							</div>
						</div>
	    				<div class="status">
	    					<span>38,000 $</span>
	    					<span>400,000 $</span>
	    				</div>
	    			</div><!-- .donate-status -->
					<br>
	    			<a href="#" class="t-btn t-btn-ex-small" data-toggle="modal" data-target="#payPalModal">DONATE NOW</a>
					<br>
					<br>
					<br>
				</div>	
	    		<div class="col-sm-4">
					<div class="single-cause">
						<img src="img/NCMEC.jpg" class="cause-thumb" alt="">
						<br>
						<br>
	    				<h3>DFA'S PLAN</h3>
	    				<p class = "project-par">Third World countries represent the supply side of CST, and they are not prepared to address this menace that is of epidemic proportions occurring in their respective jurisdictions.  This is due to limited resources, lack of advanced planning, and limited sufficiently trained law enforcement officers (LEO).  To aid LEOs in these countries, DFA will assist in establishing, developing, and/or augmenting their non-existent or limited digital forensics examination capabilities.</p> 
						<br>

						<p class = "project-par">In order to do so, DFA plans to establish facilities, donate the needed equipment, training, and expertise and collaborate with the LEOs in these countries to capacitate their ill- prepared personnel that are tasked with addressing all cyber-related crimes.  The objective of DFA’s planned donation and collaboration is to assist in the creation of sustainable pools of qualified personnel who, not only could conduct digital forensic examinations that meets international standards, but also provide evidence to their counterparts worldwide to initiate the apprehension of the violators/pedophiles who are in the demand side locations.</p>
						<br>

	    			</div>
				</div>				
	    		<div class="col-sm-4">
				
					<p class = "project-par">With proper training and the right equipment, DFA will develop a cadre of internationally certified examiners who will be proficient in identifying, collecting, and preserving evidence.  This same pool of certified forensic examiners will serve as the source of certified expert witnesses who could testify in any court proceedings worldwide, thereby promoting successful prosecutions in both the supply and the demand side of CST.</p>
					<br>
					<br>
					<p class = "project-par2" >See the chart below from NCMEC.  These numbers represent the general report numbers that are being sent to the Philippines. Note the numbers for the first half of the year 2017.  There is no doubt that the Philippines is a good place to start our pilot project due to the number of potential cases there and Alex's firsthand experiences in knowing where the law enforcement weakness lies in addressing this problem.</p>

					<div id="curve_chart" style="width: 300px; height: 400px;"></div>
					<p class = "project-par2" ><i>*January 1 through June 29, 2017 only</i></p>
					<br>
					<br>
	    			
	    		</div><!-- .col -->
    		</div>
    	</div>
    </section>
    <!-- End Cause Section -->

   
    <!-- Start Fun Factor Section -->
    <section class="fun-factor section text-center">
    	<div class="container">
    		<div class="row flex">
    			<div class="col-sm-3">
    				<div class="single-factor">
    					<i class="icofont icofont-money"></i>
    					<h3 class="counter">1200</h3>
    					<h2>DONORS</h2>
    				</div>
    			</div><!-- .col -->
    			<div class="col-sm-3">
    				<div class="single-factor">
    					<i class="icofont icofont-users-alt-2"></i>
    					<h3 class="counter">500</h3>
    					<h2>VOLUNTEERS</h2>
    				</div>
    			</div><!-- .col -->
    			<div class="col-sm-3">
    				<div class="single-factor">
    					<i class="icofont icofont-life-buoy"></i>
    					<h3 class="counter">3500</h3>
    					<h2>LIFE SAVED</h2>
    				</div>
    			</div><!-- .col -->
    			<div class="col-sm-3">
    				<div class="single-factor">
    					<i class="icofont icofont-institution"></i>
    					<h3 class="counter">200</h3>
    					<h2>INSTITUTION</h2>
    				</div>
    			</div><!-- .col -->
    		</div>
    	</div>
    </section>
    <!-- End Fun Factor Section -->



    <!-- Start Event Section -->
    <!--section class="event section" id="event">
    	<div class="container">
    		<div class="section-header">
                <h2>OUR EVENT</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
            </div><!-- .section-header -->
    		<!--div class="row flex">
    			<div class="col-lg-6">
    				<div class="single-event">
    					<div class="event-thumb"><img src="img/event-1.jpg" alt=""></div>
    					<div class="event-details">
    						<h3>BUILD SCHOOL FOR CHILDREN</h3>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud alliness.</p>
    						<div class="event-location">
    							<span><i class="icofont icofont-ui-calendar"></i>Dec-11-2017</span>
    							<span><i class="icofont icofont-location-pin"></i>South Africa</span>
    						</div>
    						<div class="event-btn-group">
    							<a href="" class="t-btn t-btn-ex-small event-btn-1">Join Now</a>
    							<a href="" class="t-btn t-btn-ex-small event-btn-2">Details</a>
    						</div>
    					</div>
    				</div>
    			</div><!-- .col -->
    			<!--div class="col-lg-6">
    				<div class="single-event">
    					<div class="event-thumb"><img src="img/event-2.jpg" alt=""></div>
    					<div class="event-details">
    						<h3>AWARENESS FOR HEALTH CARE</h3>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud alliness.</p>
    						<div class="event-location">
    							<span><i class="icofont icofont-ui-calendar"></i>Dec-11-2017</span>
    							<span><i class="icofont icofont-location-pin"></i>South Africa</span>
    						</div>
    						<div class="event-btn-group">
    							<a href="" class="t-btn t-btn-ex-small event-btn-1">Join Now</a>
    							<a href="" class="t-btn t-btn-ex-small event-btn-2">Details</a>
    						</div>
    					</div>
    				</div>
    			</div><!-- .col>
    		</div>
    	</div>
    </section-->
    <!-- End Event Section -->

    <!-- Start Client Section -->
    <!--div class="client section">
    	<div class="container">
    		<div class="client-logo">
    			<a href=""><img src="img/investigator.jpg" alt=""></a>
    			<a href=""><img src="img/local-team1.jpg" alt=""></a>
    			<a href=""><img src="img/perp1.jpg" alt=""></a>
    			<a href=""><img src="img/raid-prep.jpg" alt=""></a>
    		</div>
    	</div>
    </div>
    <!-- End Client Section -->

    <!-- Start Blog Section -->
    <!--section class="blog home-blog section" id="blog">
    	<div class="container">
    		<div class="section-header">
                <h2>OUR NEWS</h2>
                <p class="section-line">Please click on the links to learn more about what's happening.</p>
            </div><!-- .section-header -->
    		<!--div class="row flex">
    			<div class="col-sm-6">
    				<div class="post">
		                <header class="entry-header">
		                  	<a href="blog-details-1.html" class="post-thumbnail" target="_blank"><img src="img/blog-1.jpg" alt=""></a>
		                  	<div class="post-details-wrap">
		                    	<h2 class="entry-title"><a href="blog-details-1.html" target="_blank">SAVE LIFE FOR POOR CHILDREN</a></h2>
		                    	<div class="byline">
		                      		<span class="author"><a href="#"><i class="fa fa-user"></i> Post Admin</a></span>
		                    		<span class="posted-on"><span>10 Jan</span> 2017</span>
		                    	</div>
		                  	</div><!-- .post-details-wrap -->
		                <!--/header-->
	                	<!--div class="entry-content">
	                  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperi rain...</p>
	                  		<a href="blog-details-1.html" class="t-btn t-btn-ex-small read-more-btn" target="_blank">Read More</a>
	                	</div>
	              	</div><!-- .post -->
    			<!--/div><!-- .col -->
    			<!--div class="col-sm-6">
    				<div class="post">
		                <header class="entry-header">
		                  	<a href="blog-details-2.html" class="post-thumbnail" target="_blank"><img src="img/blog-2.jpg" alt=""></a>
		                  	<div class="post-details-wrap">
		                    	<h2 class="entry-title"><a href="blog-details-2.html" target="_blank">WE BUILD SCHOOL & HOSPITAL</a></h2>
		                    	<div class="byline">
		                      		<span class="author"><a href="#"><i class="fa fa-user"></i> Post Admin</a></span>
		                    		<span class="posted-on"><span>1 Jan</span> 2017</span>
		                    	</div>
		                  	</div><!-- .post-details-wrap -->
		                <!--/header-->
	                	<!--div class="entry-content">
	                  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperi rain...</p>
	                  		<a href="blog-details-1.html" class="t-btn t-btn-ex-small read-more-btn" target="_blank">Read More</a>
	                	</div>
	              	</div><!-- .post -->
    			<!--/div><!-- .col -->
    		<!--/div>
    	</div>
    </section-->
    <!-- End Blog Section -->
	
	    <!-- Start Team Section -->
    <section class="team section" id = "team">
    	<div class="container">
    		<div class="section-header">
                <h2>OUR TEAM</h2>
                <p class="section-line">Digital Forensics Auxiliary (DFA) was founded and is governed by criminal justice professionals from two very distinct and related disciplines.  The first discipline is criminal investigation and the second is digital forensics science.  We leverage our aggregate training and years of experience to support and execute DFA’s mission.  The first discipline is represented by former U.S. federal and state law enforcement officers with extensive knowledge and wide breadth of experience in all facets of criminal investigation and evidence handling.   Highly trained, very skilled,and currently certified digital forensic examiners who are sought after and well known in their field, represents the second discipline.  Its human resource relative to knowledge and expertise in the identification, collection, and preservation of digital evidence places DFA amongst the top tiers of this field. </p>
            </div><!-- .section-header -->
    		<div class="row flex text-center">
				<div class="col-sm-4">
				</div>
    			<div class="col-sm-4">
    				<div class="team-member">
    					<div class="member-thumb">
    						<img src="img/ALEX-I-2.jpg" alt="">
    						<div class="member-social">
    							<!--a href="#"><i class="fa fa-facebook"></i></a-->
    							<!--a href="#"><i class="fa fa-linkedin"></i></a>
    							<!--a href="#"><i class="fa fa-skype"></i></a-->
								<a href="" data-toggle="modal" data-target="#alexModal"><i class="fa fa-info-circle"></i></a>
    						</div>
    					</div>
    					<h3 class="member-name">ALEXANDER ILUSORIO</h3>
    					<span class="designation">Founder</span>
						<br>
    				</div>
    			</div><!-- .col -->
				<div class="col-sm-4">
				</div>
			</div>	
			
			<!---------------------ALEX ILUSORIO MODAL----------------------->
						
			<div id="alexModal" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><b>ALEXANDER I. ILUSORIO</b></h4>
					<br>
				  </div>
				  <div class="modal-body">
					<p class="modal-res-par"><b><u>EMPLOYMENT  HISTORY</u></b></p>
					<br>
					<p class="modal-res-par"><b> << Law Enforcement Consultant  ( 04/2009 to 08/2014 and 10/2016 to Present ) – 7 Years >></b><br>
						AriQuest, Inc. <br>
						Bonita, California 91902<br>
						Duty Station: Worldwide<br>	
						Type of Work:  International Law Enforcement Advising/Training/Mentoring<br>
						Experience:  Under contract with the U.S. Department of State, Bureau of Diplomatic Security, Anti-Terrorism Assistance Program (ATA), functioned as an instructor/advisor/trainer/mentor to foreign law enforcement officers in third world countries to develop and transform police agencies to more efficient crime fighting and counter-terrorism units.  Experienced in directly working with high level foreign police leadership in developing countries located in Southeast Asia, Central Asia, Middle East and Africa. <br>
					</p>
					<p class="modal-res-par"><b> << Director of Investigations & Law Enforcement Development ( 09/2014 to 09/2016 ) – 2 Years >> </b><br>
						International Justice Mission <br>
						1235 S. Clark Street, Suite 1400, Arlington, VA 22202 <br>
						Duty Station: Cebu, Philippines <br>	
						Type of Work:  International Law Enforcement Development<br>
						Experience: Designed and monitored a transformational program aimed at increasing the investigative capacity of Philippine law enforcement to counter the prevalence of Human Trafficking and On Line Sexual Exploitation of Children cases, through training, advising, mentoring and monitoring of police managers and officers. Worked with agencies who were the stakeholders in combating the sexual exploitation of children to facilitate the transformation of a justice system to that of a fair and equitable institution.  Trained law enforcement officers on modern policing techniques that are currently used in the United States.
					</p>	
					<p class="modal-res-par"><b> << Supervisory Special Agent/Criminal Investigator ( 04/2007 to 01/2009 ) – 2 Years >> </b><br>
						Department of Homeland Security <br>
						185 West F Street, Suite 600 San Diego, California, 92101  <br>
						Duty Station: San Diego, California <br>	
						Type of Work: Federal Criminal Law Enforcement <br>
						Experience: Managed and mentored criminal investigators and Intelligence Research Specialists who were tasked with conducting federal investigations relative to child exploitation/pornography, human trafficking, smuggling, trafficking in arms, money laundering, narcotics trafficking and terrorism. Worked with the state and federal prosecutors to prepare criminal cases for prosecution. 
					</p>
					<p class="modal-res-par"><b> << Supervisory Special Agent / Criminal Investigator ( 02/2004 to 03/2007 ) – 3 Years >> </b><br>
						Department of Homeland Security, Immigration and Customs Enforcement <br>
						U.S. Embassy, Bangkok, Thailand  <br>
						Duty Station: U.S. Embassy, Bangkok, Thailand <br>	
						Type of Work: U.S. Federal Law Enforcement <br>
						Experience: Worked with Thai law enforcement entities to develop an Outreach Program designed to recruit and manage confidential sources of information to enhance their capability in detecting Weapons of Mass Destruction being shipped amongst containerized cargo.  Worked extensively with the Thai government and the private sector of the container shipping industry in Thailand.  Worked to transform systems and adapt them to address specific targeting objectives in the containerized shipping environment. 
					</p>		
					<p class="modal-res-par"><b> << Resident Agent in Charge / Supervisor Criminal Investigator ( 10/1997 to 01/2004 ) – 8 Years >> </b><br>
						U.S. Customs Service, Office of Investigations <br>
						2420 Vista Way, Suite 208 Oceanside, California 92054 <br>	
						Type of Work: U.S. Federal Law Enforcement <br>
						Experience: Prepared and monitored annual office budget.  Supervised all investigative activities being conducted by criminal investigators and Intelligence Research Specialist that were focused towards the arrest and prosecution of those who violated Federal statutes pertaining to money laundering, drug smuggling, counterfeiting, child pornography and human trafficking.  Developed community policing strategies to enhance the effectiveness of personnel in conducting criminal investigations.  Oversaw the recruitment, utilization and management of all confidential informants employed in my area of responsibility. Prepared budget and various reports submitted to headquarters.
					</p>
					<p class="modal-res-par"><b> << Special Agent / Criminal Investigator ( 08/1994 to 09/1997 ) – 3 Years >> </b><br>
						U.S. Customs Service, Office of Internal Affairs <br>
						550 West C Street, Suite 500, San Diego, California 92101 <br>	
						Type of Work: U.S. Federal Law Enforcement <br>
						Experience: Conducted investigations focused on law enforcement personnel assigned in ports of entry along the Mexican border who were suspected of violating federal statutes pertaining to corruption, serious misconduct, gross negligence and conflict of interest.  Conducted these criminal investigations in the “international border environment.” Developed extensive experience in coordinating with foreign law enforcement officials (Mexico, Canada).   Prepared reports of investigations and comprehensive case reports for presentation to federal prosecutors.  Developed corruption prevention strategies to decrease the corruption related threats encountered by border officials. Worked in an undercover capacity as a drug smuggler searching for illegal services offered by corrupted U.S. border inspection personnel.  Conducted ethics and integrity focused training to personnel with higher exposure to corruption. 
					</p>	
					<p class="modal-res-par"><b> << Special Agent / Criminal Investigator ( 07/1987 to 07/1994 ) – 7 Years >> </b><br>
						U.S. Customs Service, Office of Investigations <br>
						185 West F Street, Suite 600 San Diego, California, 92101  <br>	
						Type of Work: U.S. Federal Law Enforcement <br>
						Experience: Conducted numerous investigations of criminal organizations involved in drug and undocumented alien smuggling, money laundering and arms trafficking along the Mexico/California border areas. Worked in close coordination with the Mexican Federal Judicial Police and numerous local police jurisdictions throughout the United States.  Worked in undercover capacity to infiltrate Mexican and Colombian drug cartels. Prepared and submitted reports of investigations.
					</p>
					<p class="modal-res-par"><b> << Special Agent / Criminal Investigator ( 10/1983 to 11/1985 ) – 2 Years >> </b><br>
						U.S. Bureau of Alcohol, Tobacco, Firearms and Explosives <br>
						Duty Station: Long Beach, California
						Type of Work: U.S. Federal Law Enforcement <br>
						Experience:  Conducted investigations targeting international Asian (Filipino, Chinese) and domestic gang members who were in violation of Federal firearms and explosives statutes.  Developed and directed the activities of confidential informants in accordance with existing agency policies and Federal statutes to support multi-agency investigations.  Worked in an undercover capacity as an arms procurer for Philippine rebels to acquire machine guns and explosives from suppliers involved in the illegal conversion of firearms.
					</p>
					<p class="modal-res-par"><b> << Border Patrol Agent ( 06/1978 to 09/1983 ) – 5 Years >> </b><br>
						Customs and Border Protection <br>
						Duty Station: San Diego, California
						Type of Work: U.S. Federal Law Enforcement <br>
						Experience: Prevented, detected and interdicted the entry and smuggling of undocumented aliens and contraband into the United States. Prepared arrest reports which were used by the US Attorney's Office in prosecuting smugglers and illegal aliens.
					</p>
					<br>

					<p class="modal-res-par"><b><u>EDUCATION</u></b><br>
						MBA, International Academy of Management and Economics, Manila, Philippines – Jan 2012 <br>
						Bachelors of Arts, Sociology, California State University– Dominguez Hills, California, USA – June 1976 <br>
						Federal Law Enforcement Training Center - Glynco, Georgia, USA – June 1978 <br>
					</p>
					<br>
					
					<p class="modal-res-par"><b><u>LANGUAGE  ABILITY </u></b><br>
						Spanish (Non–Native Fluent) ------------ Read, Write <br>
						Tagalog (Filipino, Native Fluent)----------Read, Write <br>
						Thai (Non-Native)--------------------------Beginner <br>
					</p>
					<br>
					<p class="modal-res-par"><b><u>SECURITY  CLEARANCE</u></b><br>
						Top Secret SCI – Active <br>
						SSBI/Periodic Reinvestigation completed/updated 05-2012 <br>
						Original Top Secret Granted by DHS/ICE 1-3-2001 <br>
					</p>
					<br>
					<br>
				  </div>
				  
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
			
			<!---------------------END OF ALEX ILUSORIO MODAL----------------------->		
			<div class="row flex text-center">
				<div class="col-sm-12">
					<div id="board">BOARD OF DIRECTORS</div>
					<br>
				</div>	
            </div>
			<div class="row flex text-center">
    			<div class="col-sm-3">
    				<div class="team-member">
    					<div class="member-thumb">
    						<img src="img/Cesar-pic2.jpg" alt="">
    						<div class="member-social">
    							<!--a href="#"><i class="fa fa-facebook"></i></a-->
    							<!--a href="#"><i class="fa fa-linkedin"></i></a>
    							<!--a href="#"><i class="fa fa-skype"></i></a-->
								<a href="#" data-toggle="modal" data-target="#cesarModal"><i class="fa fa-info-circle"></i></a>
    						</div>
    					</div>
    					<h3 class="member-name">CESAR SOLIS</h3>
    					<!--span class="designation"></span-->
    				</div>
    			</div>	<!-- .col -->
	<!-------------------------------CESAR MODAL---------------------------->
			<div id="cesarModal" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><b>CESAR SOLIS</b></h4>
					<br>
				  </div>
				  <div class="modal-body">
					<p class="modal-res-par"><b><u>MANAGEMENT HISTORY</u></b></p>
					<br>
					<p class="modal-res-par"><b> << Assistant Chief, Centralized Investigations/Crime Lab ( August 23, 2008 to March 3, 2014 ) >> </b><br>
						Served as Chief of Detectives in charge of all major criminal investigative divisions and crime lab.  <br>
					</p>
					<p class="modal-res-par"><b> << Captain, Centralized Investigations II ( January 26, 2008 to August 22, 2008 ) >> </b><br>
						Commanding Officer for an investigative division that includes Homicide, Robbery, Financial Crimes, Internet Crimes Against Children and Robbery. <br>
					</p>
					<p class="modal-res-par"><b> << Captain, Southeastern Division ( October 5, 2005 to January 25, 2008 ) >> </b><br>
						Provided strong leadership that resulted in a decrease in shootings the past two years and reduced the number of homicides by 18% for 2007. Developed and maintained a strong working relationship with community leaders, religious leaders and community residents.   <br>
					</p>
					<p class="modal-res-par"><b> << Acting Captain, Investigations III ( January 31, 2004 to July 24, 2004 ) >> </b><br>
						Commanding Officer of an investigative division that includes the Street Gang Unit, Gang Suppression Team, Narcotic Street Teams, Narcotics Task Force, JUDGE Unit, and Drug Court.  Managed the Gang Injunction project and ensured timely completion by establishing deadlines and increasing staffing.   <br>
					</p>
					<p class="modal-res-par"><b> << Street Gang Unit Lieutenant ( June 13, 205 to October 7, 2005 ) >> </b><br>
						Unit Commander for the Gang Suppression Team, gang related investigations and Cal-Gang administration.  Provided uniformed and investigative support to service areas with significant gang activity.  Maintained a comprehensive gang data base (Cal-Gang) and provide a statistical analysis to assess enforcement efforts and identify emerging trends.   <br>
					</p>
					<p class="modal-res-par"><b> << Emergency Negotiations Team Lieutenant ( April 22, 2005 to October 7, 2005 ) >> </b><br>
						Executive Officer for negotiations unit that responded to situations that involved barricaded suspects, suicidal persons, and hostage situations.    <br>
					</p>
					<p class="modal-res-par"><b> << Special Assistant To The Chief-Lieutenant ( March 8, 2004 to April 21, 2005 ) >> </b><br>
						Principal advisor and liaison for the Asian Pacific Islander Community.  Briefed the Chief on current crime trends and community issues.  Developed and maintained strong working relationships with community leaders and community based organizations.    <br>
					</p>
					<p class="modal-res-par"><b> << Narcotics Section Lieutenant ( January 4, 2002 to January 30, 2004 ) >> </b><br>
						Unit Commander for centralized investigative narcotic enforcement.   Maintained confidential informant files, investigative funds and ensured strict adherence to procedures and guidelines.   <br>
					</p>
					<p class="modal-res-par"><b> << SWAT Commanding Officer ( September 16, 2000 to January 4, 2002 ) >> </b><br>
						Commanding Officer for the Special Weapons And Tactics Unit.  Consistently maintained a state of operational readiness and tactical support to any critical incident on a 24 hour basis.     <br>
					</p>
					<br>
					<br>
					<p class="modal-res-par"><b><u>COMMUNITY  INVOLVEMENT</u></b></p>
					<br>
					<p class="modal-res-par"> Actively participates and serves on numerous community advisory boards and associations.  Served as the Chief’s advisor for community relations. Developed trust and strong working relationships with community leaders, religious leaders, and community based organizations by attending meetings, community forums, and peace marches.  Worked with members of Black Men United to address officer involved shootings, in-custody deaths, and discrimination complaints.<br>  
					</p> 
					<br>
					<br>
					<p class="modal-res-par"><b><u>ADMINISTRATIVE  ABILITY</u></b></p>
					<br>
					<p class="modal-res-par"> Demonstrated the ability to effectively assume administrative responsibility at the chief’s executive committee level.  Prepared briefing reports, power point presentations and memorandums under the Chief’s signature and conducted presentations for the Public Safety & Neighborhood Services committee, City Council, City Manager and Mayors Office.  Received an invitation to be a guest speaker at the annual High Intensity Drug Trafficking Area (HIDTA) conference in Washington, DC.  Gave a Power Point presentation on medicinal marijuana to a large audience of law enforcement executives that was well received.
					</p>   					
					<br>
					<br>
					<p class="modal-res-par"><b><u>BOARDS  AND  COMMITTEES</u></b></p>
					<br>
					<p class="modal-res-par">
					The Next Generation Project/West Coast Assembly - Fellow <br>
					IACP Security/Command Post Committee - Chair <br>
					BIO 2008 Supplies & Logistics Committee – Chair <br>
					BIO 2008 BRAVO IV – Platoon Commander <br>
					City of San Diego Customer Service Committee <br>
					City Management Program Committee <br>
					San Diego Family Health Center – Governing Board of Directors <br>
					Pan Pacific Law Enforcement Association – Board of Directors <br>
					National Asian Police Officers Association <br>
					</p>
					<br>
					<br>
					<p class="modal-res-par"><b><u>COMMENDATIONS</u></b></p>
					<br>					
					<p class="modal-res-par">
					Incident Commander Commendation for Witch Creek Fire – November 2, 2007 <br>
					Asian Heritage Award – May 22, 2007 <br>
					General Aguinaldo Leadership Award – June 3, 2006 <br>
					Special Congressional Recognition – October 22, 1994 <br>
					Meritorious Service Award – July 18, 1986 <br>
					Medal of Valor, American Legion – April 4, 1986 <br>
					</p>
					<br>
					<br>
					<br>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>

	<!-------------------------------END OF CESAR MODAL---------------------------->		
				
    			<div class="col-sm-3">
    				<div class="team-member">
    					<div class="member-thumb">
    						<img src="img/jeff01.jpg" alt="">
    						<div class="member-social">
    							<!--a href="#"><i class="fa fa-facebook"></i></a-->
    							<!--a href="#"><i class="fa fa-linkedin"></i></a>
    							<!--a href="#"><i class="fa fa-skype"></i></a-->
								<a href="#" data-toggle="modal" data-target="#jeffModal"><i class="fa fa-info-circle"></i></a>
    						</div>
    					</div>
    					<h3 class="member-name">JEFF A. HANSEN</h3>
    					<!--span class="designation">Legal Expert</span-->
    				</div>
    			</div><!-- .col -->
<!-------------------------------JEFF MODAL---------------------------->
			<div id="jeffModal" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><b>JEFF  A.  HANSEN</b></h4>
					<br>
				  </div>
				  <div class="modal-body">
					<p class="modal-res-par"><b><u>PROFESSIONAL  EXPERIENCE:</u></b></p>
					<br>

					<p class="modal-res-par"><b> TESTIMONIES:</b></p>
					
				    <p class="modal-res-par"> 
					<b> • </b> <i>  Craig Casey v. Valley Center Insurance Agency Inc.,</i>  Case No. 37-2008-00004378-SC-SC-CTL ( San Diego Superior Court )<br>
					<b> • </b> <i>  Stemple v. QC Holdings, Inc., </i>  Case No. 12-CV-1997-CAB-WVG ( S.D. Cal. ) <br> 
					<b> • </b> <i>  Hahn v. Massage Envy Franchising,  </i>  Case No: 3:12-cv-00153-DMS-BGS ( S.D. Cal. ) <br>
					<b> • </b> <i>  Abdeljalil v. General Electric Capital Corporation,  </i>  Case No: 12-cv-02078-JAH-MDD ( S.D. Cal. ) <br>		
					<b> • </b> <i>  Balschmiter v TD Auto Finance, LLC,  </i>  Case No: 2:13-cv-01186 (E.D. Wisc.) <br>
					<b> • </b> <i>  Jordan Marks v Crunch San Diego, LLC,  </i>  Case No. 14-CV-0348-BAS (BLM) ( S.D.Cal. ) <br> 	
					<b> • </b> <i>  Peter Olney v Job.com,  </i> Case No: 1:12-cv-01724-LJO-SKO (E.D. Cal.) <br> 
					<b> • </b> <i>  Carlos Guarisma v ADCAHB Medical Coverages, Inc. and Blue Cross and Blue Shield of Florida, Inc.,  </i>  Case No: 1:13-cv-21016-JLK ( S.D. Fla. ) <br> 
					<b> • </b> <i>  Farid Mashiri v Ocwen Loan Servicing, LLC,  </i>  Case No: 3:12-cv-02838 ( S.D. Cal. ) <br> 
					<b> • </b> <i>  Monty J. Booth, Attorney at Law, P.S. v Appstack, Inc.,  </i>   Case No. 2:13-cv-01533-JLR ( W.D. Wash. ) <br> 
					<b> • </b> <i>  Rinky Dink, Inc. d/b/a Pet Stop v World Business Lenders, LLC,   </i>  Case No. 2:14-cv-00268-JCC ( W.D. Wash. ) <br> 
					<b> • </b> <i>  Michael Reid and Dave Vacarro v. I.C. Sytems, Inc.,  </i>   Case No. 2:12-cv-02661-ROS ( D. Ariz. ) <br> 			
					<b> • </b> <i>  Jeffrey Molar v NCO Financial Systems  </i>  Case No. 3:13-cv-00131-BAS-JLB ( S.D. Cal. ) <br> 			
					<b> • </b> <i>  Latonya Simms v Simply Fashion Stores LTD, and ExactTarget, Inc.,  </i>   Case No. 1:14-CV-00737-WTLDKL ( D. Ind. ) <br>			
					<b> • </b> <i>  Sueann Swaney v Regions Bank,  </i>   Case No. CV-13-RRA-0544-S ( N.D. Ala. ) <br> 
					<b> • </b> <i>  Hooker v SiriusXM,   </i>  Case No. 4:13-cv-00003 ( AWA ) ( E.D. Va. ) <br> 
					<b> • </b> <i>  Diana Mey v Frontier Communications,   </i>  Case No. 13-cv-01191-RNC ( D. Conn. ) <br> 
					<b> • </b> <i>  Rachel Johnson v Yahoo! Zenaida Calderin v Yahoo!   </i>  Case No. 14-cv-2028 14-cv-2753 (N.D. IL) <br> 
					<b> • </b> <i>  Philip Charvat v Elizabeth Valente,  </i>  Case No. 12-cv-5746 ( N.D. IL ) <br> 
					<b> • </b> <i>  Robert Zani v Rite Aid Hdqtrs. Corp.,  </i>  Case No. 14-cv-9701 ( AJN )  ( RLE )  ( S.D. NY ) <br> 
					<b> • </b> <i>  A.D. v Credit One Bank   </i>  Case No. 1:14-cv-10106 ( N.D. IL ) <br> 
					<b> • </b> <i>   Oerge Stoba, and Daphne Stoba v Saveology.com, LLC, Elephant Group, Inc., Time Warner Cable, Inc.  </i>  Case No. 13-cv-2925-BAS-NLS ( S.D. Cal. ) <br> 
					<b> • </b> <i>  Shyriaa Henderson v United Student Aid Funds, Inc.  </i>  Case Number: 3:13-cv-1845-L-BLM ( S.D. Cal. ) <br> 
					<b> • </b> <i>  Marciano v Fairwinds Financial Services  </i>  Case No. 6:15-CV-1907-ORL-41 KRS ( M.D. Fla ) <br> 
					<b> • </b> <i>  Alice Lee v Global Tel*Link Corporation  </i>   Case No. 2:15-cv-02495-ODW-PLA [ consolidated with 2:15-cv03464-ODW-PLA
( C.D. Cali ) <br> 
					<b> • </b> <i>  Alan Brinker v Normandin’s   </i>  Case No. 5:14-cv-03007-EJD-HRL ( N.D. Cali ) <br> 
					<b> • </b> <i>  Spencer Ung v Universal Acceptance Corporation,  </i>   Case No. 15cv127 RHK/FLN ( D. Minn ) <br> 
					<b> • </b> <i>  Seana Goodson v Designed Receivable Solutions,  </i>  Case No. 2:15-cv-03308-MMM-JPR ( C.D. Cal ) <br> 
					<b> • </b> <i>  Dominguez v Yahoo!, Inc.,   </i>  Case No. 2:13-cv-01887 ( E.D. Penn ) <br> 
					<b> • </b> <i>  Eli Ashkenazi v Bloomingdales, Inc.,   </i>  Case No. 3:15-cv-02705-PGS-DEA ( D. N.J. ) <br> 
					<b> • </b> <i>  Abante Rooter and Plumbing, Inc. v Birch Communications, Inc.  </i>  Case No. 1:15-cv-03562 ( N.D. GA ) <br> 
					<b> • </b> <i>  Roark v Credit One Bank,  </i>  Case No. 0:16-cv-00173-RHK-FLN ( D.Minn ) <br> 
					<b> • </b> <i>  Carl Lowe And Kearby Kaiser v CVS Pharmacy, Inc., Minuteclinic, LLC, and West Corporation,  </i>  Case No.
1:14-cv-03687 ( N.D. Ill ) <br> 
					<b> • </b> <i>  Zaklit v Nationstar Mortgage, LLC.,  </i>  Case No. 5:15-CV-02190-CAS-KK ( C.D. Cal ) <br> 		
					<b> • </b> <i>  Charles Banks v Conn Appliance, Inc.,   </i>   Case No. 01-16-0001-0736 ( American Arbitration Association ) <br> 		
					<b> • </b> <i>  Rajesh Verma v Memorial Healthcare Group,  </i>   Case No. 3:16-CV-00427-HLA-JRK ( M.D. Fla ) <br> 
					</p>
					<br>
					<br>

					<p class="modal-res-par"><b> <<  Founder ( 2013-Present )  >></b> <br>
					Hansen Legal Technologies, Inc., San Diego, CA <br>
					• Retained as testifying and non-testifying expert in over 300 cases, most of which are consumer class actions. <br>
					• Established and incorporated Hansen Legal Technologies, Inc. in 2013 <br>
					• Developed operating procedures for computer forensic examinations. <br>
					• Developed proper protocols in preserving electronic evidence and following chain of custody. <br>
					• Provided Forensic services for clients for class action, civil, and other consumer cases. <br>
					• Oversee all discovery phase of cases. <br>
					• Assist counsel in interrogatories, depositions, and meet and confer meetings. <br>
					• Participated in Meet and Confer, 26f conferences and misc pre-trial meetings. <br>
					• Assisted counsel in developing litigation strategies in cases <br>
					• Assisted counsel in preparing discovery including interrogatories and document requests <br>
					• Assisted counsel in evaluating responses to interrogatories and document requests <br>
					• Assisted counsel in witness examination in depositions. <br>
					• Prepaired declarations for Class Certifications, and for Motions for Summary Judgment. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Co-Founder ( 2007-2013 )  >></b> <br>
					Hansen and Levey Forensics, Ft Lauderdale, FL <br>
					• Established and incorporated Hansen & Levey Forensics, Inc. in 2007 <br>
					• Established secure forensics laboratory for the San Diego office. <br>
					• Developed operating procedures for computer forensic examinations. <br>
					• Developed proper protocols in preserving electronic evidence and following chain of custody. <br>
					• Provided Forensic services for clients for class action, employment, civil, domestic, and juvenile cases. <br>
					• Oversee all discovery phase of cases. <br>
					• Assist counsel in interrogatories, depositions, and meet and confer meetings, and preparation for sanction hearings against opposing counsel and parties. <br>
					• Participated in Meet and Confer, 26f conferences and misc pre-trial meetings. <br>
					• Assisted counsel in developing litigation strategies in cases <br>
					• Assisted counsel in preparing discovery including interrogatories and document requests <br>
					• Assisted counsel in evaluating responses to interrogatories and document requests <br>
					• Assisted counsel in witness examination in depositions <br>
					• Performed on site acquisitions. <br>
					• Participated in mediation sessions. <br>
					• Provided Expert Testimony in Craig Casey vs. Valley Center Insurance Agency Inc. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Owner ( 2000-2016 )  >>  </b> <br>
					Pns724 San Diego, CA <br>
					• Provided complete IT solutions for hundreds of businesses and individuals including network design, configuration, forensics, and data recovery. <br>
					• Set up and maintained 864 line outbound call center with numerous auto dialers and predictive dialers. Maintained call lists, and DNC lists used to place hundreds of millions of calls over a five year period. <br>
					• Installed hundreds of POTS lines, “Turned up” at least 38 T1's and PRI's. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Volunteer ( 2006 ) >>  </b> <br>
					San Diego Regional Computer Forensics Laboratory (FBI sponsored computer forensics Lab) <br>
					• Built several forensic machines with large fiber channel RAID assemblies for use in the field. <br>
					• Installed and configured systems for mobile laboratory <br>
					• Provided support in all areas from taking in evidence to calling case agents to pick up their evidence from finished cases gaining valuable experience in evidence handling. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Systems Analyst ( 2004-Present ) >>  </b> <br>
					Amsec San Diego, CA / Lateott Bremerton, WA / HP Enterprise Services <br>
					• Provided ATM and Ethernet fiber connectivity for secure and unsecured DOD networks. <br>
					• Troubleshot fiber connectivity issues on shore and ship facilities. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Director of Training / IT Director ( 2000-2004 ) >>  </b> <br>
					Laptop Training Solutions, San Diego, CA <br>
					• Provided Intrusion detection, incident response, and forensic services in a continuing effort keep the network and
					workstations secure. <br>
					• Planned, designed, and implemented network security for vital network services for 4 facilities, that were heavily attacked by varying methods, saving the company hundreds of thousands of dollars. <br>
					• Performed security risk assessment, performed IT control audits, developed countermeasures and provided a security policy to insure confidentiality, integrity and availability of resources. <br>
					• Performed Gap Analysis of existing systems and desired systems and migrated from Windows 2000 DNS and Exchange 2000 servers to Linux servers running Postfix and BIND to provide a more scalable network for 4 facilities providing the company the means to achieve a 450% growth. <br>
					• Planned, installed and maintained several school networks involving numerous Domain Controllers, UNIX servers, print servers, multiple nodes and routers. <br>
					• Installed and programmed Nortel phone system improving the company’s ability to handle calls. <br>
					• Planned, organized and instructed computer certification courses including Microsoft Certified Systems Engineer ( NT4.0, Win2000 MCSE, 2003 MCSE ) , Cisco  ( CCNA ) , A+, N+, Linux+, I-Net+, Security+, MOUS and Web Page Design (HTML, Javascript, DHTML, Flash 4, Flash 5, Fireworks3, Photoshop 5) resulting in hundreds of certified students. <br>
					• Provided students with a hands on training environment involving networks with Multiple Windows NT and Windows 2000 Domain Controllers, several workstations  ( Windows 95,98,NT,ME, and 2000 Professional ) , Novell, Unix, and Exchange Servers, and Cisco routers. <br>
					• Planned, organized and instructed a corporate training environment for TCP/IP which included addressing, standards, troubleshooting, subnetting, routing and Frame Relay <br>
					• Provided long distance support via telephone to hundreds of MCSE students throughout the country. <br>
					• Managed other instructors on training techniques for the MCSE, CCNA, Linux+, A+, Security+ and Network + courses providing a consistent system of training in all facilities. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Electronic Test Technician 3 ( 1998-2000 ) >>  </b> <br>
					Action Instruments, San Diego, CA <br>
					• Tested various types of electronics for industry and signal conditioning. <br>
					• Troubleshot and documented nearly 10,000 component level repairs. <br>
					• Assisted in improvements to the manufacturing process. <br>
					• Identified problems in product design and provided solutions to correct the problems. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Network, Computer, and Computer Monitor Technician / Instructor ( 1996-1997 ) >>  </b> <br>
					• Installed and connectorized fiber optic computer networks throughout Naval Station San Diego and North Island. <br>
					• Provided network troubleshooting and management for large scale mission-critical DoD networks with over 600 nodes, routers, and servers. <br>
					• Provided upgrades, maintenance, troubleshooting, security, and repair of personal computers for 600 station LAN
					and the US Pacific Fleet. <br>
					• Troubleshot and repaired over 100 computer monitors to component level without technical manuals. <br>
					• Increased successful monitor repair from 10% to 95%. <br>
					• Trained shop personnel on computer monitor troubleshooting and repair. <br>
					• Researched parts, materials and techniques for Computer Monitor repair. <br>
					• Developed curriculum and instructed monitor troubleshooting and repair for the Navy Microcomputer Repair course. <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Electronics Technician / Computer Technician ( 1993-1996 ) >>  </b> <br>
					United States Navy, USS Mahlon S. Tisdale (FFG-27), Combat Systems Division. <br>
					• Provided incident response and performed forensic type of services for 36 computers following Employee sabotage. <br>
					• Troubleshot and maintained Harris 300 AN/UYK-62(V) mini-mainframe, running Vulcan OS, and all terminals <br>
					• Troubleshot, maintained, and upgraded hardware and software for 36 shipboard computers. <br>
					• Identified security threats, and developed countermeasures for computer systems on board. <br>
					• Troubleshot, repaired and maintained – at component level - various Univac systems making up a complex network of computers used in communications, navigation, and weapons guidance. <br>
					• Assisted in planning and running work center <br>
					</p>
					<br>
					<p class="modal-res-par"><b> <<  Radio, Television, VCR Technician ( 1990-1992 ) >>  </b> <br>
					LBJ Television, Wheat Ridge, CO
					• Performed component level troubleshooting of televisions, VCRs, and stereos. <br>
					• Performed in home repair of televisions. <br>
					• Introduced the repair of CD players to the company. <br>
					• Provided technical support to customers over the telephone. <br>
					• Handled customer service issues related to television repair. <br>
					</p>
					<br>
					<br>
					<p class="modal-res-par"><b><u>CERTIFICATIONS: </u></b></p>
					<p class="modal-res-par">Since the start of Jeff's career, he have obtained certifications in MCP 4.0, A+, Network+, MCP 2000, MCSA, MCSE, Linux+, INet+, Security+, CIW Security Analyst.
					<br>
					He was certified by Bureau For Private Postsecondary And Vocational Education, in the States of California and Oregon, as an Instructor for Computer Installation and Repair Technology, Computer Systems Networking and Telecommunications, Micro Computer Applications, Microsoft, Windows, Excel in relation to my work at Laptop Training Solutions.
					</p>
					<br>
					<br>
					<p class="modal-res-par"><b><u>GUEST  APPEARANCES:  </u></b></p>
					<br>
					<p class="modal-res-par">
						• Featured in Microsoft Redmond Magazine Sep 2007 <br>
						• Computer Talk 760 KFMB San Diego, CA <br>
						• Computer Bits KBNP 1410AM and KOHI 1600 Portland, OR  <br>
						• San Diego Profiler 760 KFMB San Diego, CA <br>
					</p>
					<br>
					<br>					
					<p class="modal-res-par"><b><u>PUBLIC POSITIONS:</u></b></p>
					<br>
					<p class="modal-res-par"><b> << Present Board Member ( June 2012-Present ) >> </b><br>
					Spring Valley Community Planning Group <br>
					Elected board member of the Spring Valley Community Planning Group from April 2012 to Present. The purpose of the group is to advise the San Diego County Department of Planning and Land Use, the Planning Commission and theBoard of Supervisors on matters of planning and land use affecting Spring Valley south of Highway 94. Members are	volunteers and locally elected representing the interests of the people of Spring Valley. Items heard by the group include but are not limited to: Site Plans, Signs, Roads & Infrastructure, Parks & Recreation, Lot Splits, 2nd Dwelling Units, Day Care, Alcohol License, Tree Removal, Re-Zones. <br>
					</p>
					<br>
					<br>
					<p class="modal-res-par"><b><u>EDUCATION:</u></b></p>
					<br>
					<p class="modal-res-par">
					<b> << Access Data Forensic Toolkit ( 2006 ) >> </b><br>
					San Diego Regional Computer Forensics Laboratory, San Diego, CA <br>
					<b> <<  Guidance Software Encase Forensic Suite ( 2006 ) >> </b><br>
					San Diego Regional Computer Forensics Laboratory, San Diego, CA <br>
					<b> <<   E-discovery – Why Digital is different – by Craig Ball ( 2005 ) >> </b><br>
					San Diego County Bar Association, San Diego, CA <br>	
					<b> <<   Security: Hardening MS Windows 2000 Server Family, IIS and Exchange 2000 Servers ( 2003 ) >> </b><br>
					CBI Systems Integrators, San Diego, CA				
					<b> <<  Navy Standard Microcomputer Repair ( 1996 ) >> </b><br>
					PRC Inc., San Diego, CA <br>
					<b> <<  Fundamentals of Total Quality Management/ Team Skills and Concepts ( 1996 ) >> </b><br>
					Shore Intermediate Maintenance Activity, San Diego, CA <br>
					<b> <<  Navy Standard Microcomputer Repair ( 1996 ) >> </b><br>
					Shore Intermediate Maintenance Activity, San Diego, CA <br>
					<b> <<  AN/SPS-55 Surface Search Radar ( 1993 ) >> </b><br>
					Service School Command, San Diego, CA <br>
					<b> <<  Advanced Electronics School, Communication Systems and Radar Systems ( 1993 ) >> </b><br>
					Naval Training Center, Great Lakes, IL <br>			
					<b> <<  Electronic Theory ( 1992 ) >> </b><br>
					Naval Training Center, Orlando, FL <br>
					<b> <<  Radio, Television, VCR Repair ( 1990-1991) >> </b><br>
					Warren Occupational Technical Center, Golden, CO <br>
					<b> <<   Electronic Theory ( 1989-1990) >> </b><br>
					Warren Occupational Technical Center, Golden, CO <br>					
					</p>
					<br>
					<br>
					<br>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
	<!-------------------------------END OF JEFF MODAL---------------------------->						
				
    			<div class="col-sm-3">
    				<div class="team-member">
    					<div class="member-thumb">
    						<img src="/img/DanLibby.jpg" alt="">
    						<div class="member-social">
    							<!--a href="#"><i class="fa fa-facebook"></i></a-->
    							<!--a href="#"><i class="fa fa-linkedin"></i></a>
    							<!--a href="#"><i class="fa fa-skype"></i></a-->
								<a href="#" data-toggle="modal" data-target="#danModal"><i class="fa fa-info-circle"></i></a>
    						</div>
    					</div>
    					<h3 class="member-name">DANIEL LIBBY</h3>
    					<span class="designation"></span>
    				</div>
    			</div><!-- .col -->
<!-------------------------------DANIEL MODAL---------------------------->
			<div id="danModal" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><b>DANIEL  A.  LIBBY</b></h4>
					<br>
				  </div>
				  <div class="modal-body">
				  	<p class="modal-res-par"><b><u>SUMMARY</u></b></p>
					<br>
					<p class="modal-res-par">
					<b> U.S. Navy Commissioned Officer, CWO(W3) ret. 
					<br><br>					
					Served with honors as a member of the U.S. National Security Agency/Central Security Service (NSA/CSS) from 1976 through 2000 as a Cryptologist and Special Technical Operations Officer and post DOD career as digital forensic and information system security expert with wealth of expert testimony, operations and leadership experience.  </b><br>
					<br>
					</p>
				  
					<p class="modal-res-par"><b><u>PROFESSIONAL  EXPERIENCE  &  EMPLOYMENT</u></b></p>
					<br>
					<p class="modal-res-par">
					<b> <<   Director & Chief Examiner  ( 2000 - Present )   >> </b><br>
					Digital Forensics, Inc.<br>
					Lead team of 6 computer forensic agents in laboratory operations, project management and expert consulting.  Managed and conducted forensic acquisition of evidence from mobile devices through enterprise environment.
					</p>
					<br>
					<p class="modal-res-par"> >>  Computer Forensic Agent ( CFA ) for State of California, Department of Justice, Office of the Attorney General, Criminal Division. Responsibilities include, but not limited to, execution of search warrants, digital evidence identification, inventory, forensic acquisition, and analysis of evidence derived from corporate environments.
					<br>
					<br>
					>>  Appointed Special Master; Criminal, by several San Diego County Judges.  Charged with conducting independent forensic collection, analysis and production in very several sensitive matters wherein the court had lost confidence in governmental agents.     
					<br>
					<br>
					>>  Conducted forensic analysis of raw video evidence for San Diego County District Attorney’s office and participated in investigation of Murder in the First Degree.  Testified at jury trial to findings with judicial results being guilty of all charges.  Verdict affirmed on Appeal.
					<br>
					<br>
					>>  Digital Evidence ( DE ) discovery consultant and processor for State of California, Department of Justice, Office of the Attorney General, Criminal  Division in a major fraud case.  Tasking includes, but not limited to, processing of digital evidence acquired by U.S. Securities and Exchange Commission ( SEC ) , conversion of produced dataset from one ESI review platform to another ( e.g. IPro to Concordance ) .
					<br>
					<br>
					>>  Conducted in-depth emergent forensic examination and investigation into internal breach at major  pharmaceutical  corporation. 
					<br>
					<br>
					>>  Conducted in-depth emergent forensic examination and investigation major retain organization – this breach still holds the record for the largest compromise of customer’s personal and financial information in U.S. history. 					
					<br>
					<br>
					>>  Conducted in excess of one thousand ( 1000 ) forensic acquisitions, examinations, and evidence analysis in support of protectoral, defense, and court appointed Special Master in criminal and civil matters. 
					<br>
					<br>
					>>  Conducted in excess of 750 forensic acquisitions, both physical and logical, in support of electronic discovery processing of electronically stored information on devices in the Windows, MAC, UNIX and Linux families with devices ranging from Android and iPhone smartphones to Microsoft Exchange Server, IBM Domino Server, Symantec Enterprise Vault, etc. 
					<br>
					<br>					
					>>  Assisted in the development and fielding of an Electronic Discovery Readiness Assessment Program (RDRAP) which is a multi-functional assessment of Electronic Discovery readiness.  
					<br>
					<br>
					>>  Aided local insurance company in development of questionnaire designed to assess an organizations cyber security readiness prior to issuance of Cyber Insurance. 	
					<br>
					<br>	
					>>  Conducted extensive analysis for major international corporation of 100+ senior level custodian’s Lotus Domino Notes electronic mail repositories for violations of corporate policy involving racial and sexual matters. 
					<br>
					<br>
					>>  Conducted Information System Forensic Incident Response forensic examination of plaintiff’s computer systems in support of allegation of intentional placement of malware by major Department of Defense (DOD) contractor as retribution for self –proclaimed whistle blowing activity. 
					<br>
					<br>
					>>  Participated in forensic examination of compromised credit card processing server of major retailer TJ Maxx ( TJX Companies ) resulting in identification of evidence indicating theft of at least 45.7 million credit and debit cards. 
					<br>
					<br>
					>>  Security Consultant ( Forensics ) for Computer Network Defense, Incident Response, Information Assurance, Risk Management, and Internal Security for Corporate, Legal and Government clients. 
					<br>
					<br>
					>>  Professional lecturer on topics of Risk Management, Infrastructure Protection, Information Assurance, Information System Security, Information System Forensics. 
					<br>
					<br>
					>>  Instructor; University of California San Diego (UCSD) Extension Program; Information System Forensics. 
					<br>
					<br>
					>>  Provided expert testimony in following jurisdictions:  <br>
						---->>>>  U.S. District Court, District of Southern California <br>
						---->>>>  U.S. District Court, District of Southern Illinois <br>
						---->>>>  U.S. District Court, District of Connecticut <br>
						---->>>>  State of California, Superior Court for the Counties of; San Diego, Orange, Los Angeles and Ventura. 
					<br>
					<br>
					>>  Provided real-time expert forensic technical consulting during criminal trial proceeding in following jurisdiction: <br> 
						---->>>>  U.S. District Court, District of Connecticut. <br>
						---->>>>  U.S. District Court, District of Southern California. <br>
					<br>
					<br>
					>>  Appointed Forensic Investigator ( Criminal / Civil ) in accordance with Section 730 of the State of California Evidence
					Code In and For the Counties of: San Diego, Los Angeles, and Ventura. 
					<br>
					<br>					
					>>  Appointed Forensic Investigator ( Criminal ) in accordance with Title 5 of the Washington State Evidence Code. 
					<br>
					<br>
					>>  Appointed Forensic Investigator ( Criminal / Civil  ) at U.S. District Court, District of Southern California. 
					<br>
					<br>
					>>  Accepted Forensic Expert in accordance with Federal Rules of Evidence 702 for the U.S. District Court, Southern District of Illinois. 
					<br>
					<br>
					>>  Designed, built, and managed the DFI’s Advanced Data Analysis Center ( “ADAC” ) which facilitates  client review of electronically stored and derived evidence.  Lab is offered to clients as an alternative to often impersonal hosted data review.  Clients within the ADAC are afforded the luxury of 58” displays per work station to maximize evidence review efforts.
					<br>
					<br>
					>>  Presently conducting forensic video analysis in support of U.S. Attorney Office, Phoenix, AZ in a very sensitive and politically charged matter. 
					<br>
					<br>			
					>>  Sector Chief - Information Technology ( IT ) for the San Diego County INFRAGARD Chapter.  INFRAGARD is an information sharing and analysis effort combining the resources U.S. Government; led by the U.S. Federal Bureau of Investigation ( FBI ) and business, academic institutions, state and local law enforcement agencies who are dedicated to increasing security of the United States Critical Infrastructure. 
					<br>
					<br>
					>>  Created forensic “travel kits” which are outfitted with special hardware, software and tools tailored to the world of digital forensics and electronic discovery and are employed to acquire and preserve data at on-site locations.  Equipment ranges from: Tableau TD-1 duplicators; HDD adapter kits; varying lengths and derivations of popular connection cables ( e.g. FireWire 400 -800; USB mini/micro; e-SATA; et al., ) . The kit also contains tools such as a security bits for proprietary hardware configurations such as HP systems, torx bits, pentalobes for Apple Mac products. It is also equipped with evidence handling equipment, tags, bags, triage tools such as custom WinFE builds, Raptor, Helix, Paladin and other Linux-based boot environments for imaging RAID’d servers if downtime is not permissible. 
					<br>
					<br>
					>>  DFI’s forensic lab also includes Linux and Apple systems for forensic analysis of suspect systems in these native environments. In addition, these systems are used to create forensic images of devices incapable of being recognized by industry-standard hardware and for reverse sector imaging of physically damaged magnetic media. Our Linux imaging environments are also capable of creating suspect HDD reports to include not only normalized nomenclature, but hard drive SMART data as well. All of these efforts have been instituted as a result of past experiences or client requests / needs. 
					<br>
					<br>
					>>  Co-founder; National Law Enforcement Training Institute ( NLETI ). 
					<br>
					<br>
					>>  Forensic Technical Consultant ( On-Air ) for: <br>
						---->>>>  National Broadcasting Corporation ( NBC ) <br>
						---->>>>  FOX Broadcasting Corporation <br>
						---->>>>  American Broadcast Corporation ( ABC ) <br> 
						---->>>>  Columbia Broadcasting System ( CBS ) <br> 
						---->>>>  Independent Broadcasting Station ( KUSI ) <br>
					<br>
					<br>
					>>  Host Weekly Radio Show dedicated to the High Technology Threat and Forensics / EDiscovery on KCBQ w/ listenership >20,000 per show.
					<br>
					<br> 
					>>   Publisher of two daily online newspaper( s ): <br>
						---->>>>  High Technology Threat Brief  ( HTTB ) <br>
						---->>>>  Digital Evidence And Discovery ( DEAD )
					<br>
					<br>
					>>  Significant producer of trending information system threat information via social media. 
						---->>>>  Largest #infosec producer via Twitter – 86,252 tweets as of 15 July 2013. 
					<br>
					<br>
					>>  Forensic Technical Consultant and Published Columnist for E-Discovery Advisor Magazine.
					<br>
					<br>
					<p class="modal-res-par">
					<b><u> <<   Information Operations Officer; Commanding General, First Marine Expeditionary Force ( CG 1MEF ) & Command and Control Commander Warfare Commander ( C2WC ); COMPHIBRON Five / 11th Marine Expeditionary Unit ( MEU / SOC ) ( 1996 – 1999  )   >> </u></b>
					</p>
					<br>
					<p class="modal-res-par">
					>>  Senior Information Operations Officer; Executive Level Planner, 1st Marine Expeditionary Force responsible for Information Operations ( IO ) Cell Operations in support of Commander’s strategic and tactical objectives. 
					<br>
					<br>
					Commander’s strategic and tactical objectives. - Command & Control Warfare Commander; South East & South West Asia Operations with Special Operations Certified, U.S. Marine Corps Expeditionary Warfare Unit ( MEU / SOC ) responsible for C2W operations afloat and ashore.  Responsible for protection of Department of Defense Critical Information Infrastructure and Exploitation of foreign networks. 
					</p>
					<br>
					
					<p class="modal-res-par"> <b><u>					
					<<   U.S. Naval Information Warfare Activity ( NIWA ) / Commander U.S. Naval Security Group ( GX ) A Service Cryptologic Element, U.S. National Security Agency ( NSA )  ( 1992 - 1996 )   >> </b></u>   
					</p>
					<br>
					<p class="modal-res-par">
					>>  Special Technical Operations Officer and Senior Analyst. Inspector General ( IG ) For National Command Authority ( NCA ) Regulated Organization. 
					<br><br>
					>>  Information System Special Security Officer for Special Compartmented Information Facilities. 
					<br><br>
					>>  Officer in Charge, C2W Threat Range.  Responsible for personnel, operations, analysis of airborne C2W platform performance against authentic and modeled foreign military systems. 
					<br><br>
					>>  Office in Charge, Foreign Military Acquisition and Foreign Military Exploitation/Operations Detachment. 
					<p>
					<br>
					<p class="modal-res-par">
					<b><u><<   U.S. Naval Security Group Command/ Service Cryptologic Element, U.S. National Security Agency ( NSA )  ( 1976 - 1992 )   >>  </u></b>
					</p>
					<br>
					<p class="modal-res-par">
					>>  Officer-in-Charge, Special Cryptologic Operations ( Collections ) International CounterNarcotics. 
					<br><br>
					>>  Cryptologic operations in South East & South West Asia area of operations.					
					<br><br> 
					>>  Force Cryptologic Readiness, Training and Evaluation Officer for Commander, Air Forces U.S. Pacific Fleet. 
					<br><br>
					>>  Supervised 850 people and managed $500,000 budget to perform maintenance and configuration management for military telecommunications, Automatic Information System, and tactical cryptologic systems. 	
					</p>					
					<br>
					<p class="modal-res-par"><b><u>PROFESSIONAL EDUCATION & CERTIFICATIONS</u></b></p>
					<p class="modal-res-par">
					<b> << American College of Forensic Examiners Inst. ( 2011 ) >> </b><br>
					Diplomat American Board of Forensic Examiners  <br>
					<b> <<  AccessData Certified Examiner ( 2011 ) >> </b><br>
					Access Data Corporation <br>
					<b> <<  Certified Computer Examiner ( 2009 ) >> </b><br>
					 International Society of Computer Forensic Examiners ( ISCFE ) – Enrolled at Champlain College <br>
					<b> <<  Certified Forensic Consultant ( 2008 ) >> </b><br>					
					American College of Forensic Examiners<br>
					<b> <<  Masters Certificate Program ( Pending ) >> </b><br>					
					Villanova University - Information System Security<br>
					<b> <<  Certified Homeland Security III  ( 2006 ) >> </b><br>
					American College of Forensic Examiners <br>
					<b> <<  Information System Forensics ( 2000 ) >> </b><br>
					University of California, San Diego <br>
					<b> <<  Joint IW Operations ( 1998 ) >> </b><br>
					National Defense University <br>
					<b> <<  IW Planner/MOOTW ( 1998 ) >> </b><br>
					Expeditionary Warfare Training Group <br>
					<b> <<  DOD IW/IO/CYBER Training Officer ( 1992 ) >> </b><br>
					U.S. Naval Security Group Command <br>
					</p>
					<br>
 
					<p class="modal-res-par">
					<b><u> PROFESSIONAL ASSOCIATIONS </u></b><br>
					• The American College of Forensic Examiners, Institute of Forensic Science <br>
					• Association of Former Intelligence Officers ( AFOI ) <br> 
					• Armed Forces Communications and Electronic Association ( AFCEA ) <br>
					• National Defense Industrial Association ( NDIA ) <br>
					• Association of Certified Fraud Examiners ( ACFE ) <br>
					• Consumers Attorneys of California <br>
					• Consumer Attorneys of San Diego ( CASD ) <br>
					• National Cryptologic Veterans Association ( NCVA ) <br>
					• High Technology Crime Network ( HTCN ) #150218100 <br> 
					• International Association of Computer Investigative Specialists ( IACIS ) #23190 
					</p>
					<br>
					
 					<p class="modal-res-par">
					<b><u>PERSONAL  QUALITIES</u></b><br>
					- Current Top Secret U.S. Government Security Clearance Based On SSBI <br>
					- Maintained continuous TS/SBI (with Counter Intelligence Polygraph)  From 1976 – 2000
					</p>
					<br>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
	<!-------------------------------END OF DANIEL MODAL---------------------------->			
    			<div class="col-sm-3">
    				<div class="team-member">
    					<div class="member-thumb">
    						<img src="img/julioDG.gif" alt="">
    						<div class="member-social">
    							<!--a href="#"><i class="fa fa-facebook"></i></a-->
    							<!--a href="#"><i class="fa fa-linkedin"></i></a>
    							<!--a href="#"><i class="fa fa-skype"></i></a-->
								<a href="#" data-toggle="modal" data-target="#julioModal"><i class="fa fa-info-circle"></i></a>
    						</div>
    					</div>
    					<h3 class="member-name">JULIO DE GUZMAN</h3>
    					<span class="designation"></span>
    				</div>
    			</div><!-- .col -->
			</div>
		</div>
    </section>
	
	<!-------------------------------JULIO MODAL---------------------------->
			<div id="julioModal" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><b>JULIO  DE  GUZMAN  JR.</b></h4>
					<br>
				  </div>
				  <div class="modal-body">
 					<p class="modal-res-par">
						<b><u>EMPLOYMENT  HISTORY</u></b><br><br>			
						
						<b><<  Community Relations Representative ( August 2009 to November 2016 )  >></b><br>
						Office of the City Attorney, San Diego, California <br>
						Experience:  Represented the city attorney’s office in all facets relative to its community outreach						
					</p>
					<p class="modal-res-par">			
						<b><<  Investigator ( August 2006 to August 2009 )  >></b><br>
						Office of the City Attorney, San Diego, California <br>
						Experience:  Conducted any and all investigations within the purview of the city attorney’s office						
					</p>
					<p class="modal-res-par">			
						<b><<  Criminal Investigator / Senior Special Agent GS-14 ( August 1999 to August 2006 )  >></b><br>
						US Postal Service, Office of Inspector General, San Diego, California <br>
						Experience:  Conducted criminal investigations on violations of federal statutes pertaining to health care fraud						
					</p>
					<p class="modal-res-par">			
						<b><<  Criminal Investigator / Senior Special Agent GS-13 ( April 1994 to August 1999 )  >></b><br>
						US Department of Defense, Office of Inspector General, San Diego, California <br>
						Experience:  Conducted criminal investigations relative to government contract and health care fraud				
					</p>
					<p class="modal-res-par">			
						<b><<  Criminal Investigator / Special Agent GS-7 to GS-12 ( February 1982 to April 1994 )  >></b><br>
						US Naval Criminal Investigative Service, Philippines <br>
						Experience:  Conducted general crimes, narcotics investigations, counter-intelligence, and counter-terrorism operations throughout the Philippines				
					</p>
					<p class="modal-res-par">			
						<b><<  Deputy Probation Officer ( September 1973 to February 1982 )  >></b><br>
						San Diego County Probation Department <br>
						Experience:  Supervised and monitored all levels probationers				
					</p>
					<br>
					 <p class="modal-res-par">
						<b><u>EDUCATION</u></b><br><br>			
						
						<b><<  Bachelor of Science Degree - Major Criminal Justice, Minor Political Science, and Accounting ( June 1973 )  >></b><br>
						San Diego State University <br>
						University Wrestling Team <br>
						Sigma Phi Epsilon Fraternity <br>
						Oceotl Honorary Men’s Fraternity <br> 
						Student Council Publications Board<br>
					</p>
					<br>
					<p class="modal-res-par">
						<b><u>COMMUNITY INVOLVEMENT</u></b><br><br>			
						
						• Region Chair >> Lions District 4-L6, San Diego County - July 2016 to present <br> 
						• President >> La Jolla Presidents Lions Club - June 2015 to present <br>
						• Race Director >> North Island Snow Ski Club - October 2001 to October 2013 <br>
						• Coach >> San Diego Alpine Junior Ski Team - October 2002 to October 2013 <br>
						• Assistant Coach >> La Jolla Junior Wrestling Club - October 2011 to March 2012 <br>
						• President >> Filipino Pangasinan Association of San Diego County - September 2001 to September 2006 and September 2011 to September 2015 <br>
						• Board Member >> Filipino American Law Enforcement Association - February 2014 to present <br>
						• Board Member >> Filipino American Chamber of Commerce - June 2011 to June 2014 <br>
					</p>
					<br>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
	<!-------------------------------END OF JULIO MODAL---------------------------->			
    <!-- End Team Section -->


    <!-- Start Contact Section -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="section-header">
                <a href="#contact"><h2>CONTACT</h2></a>
                <!--p class="section-line">Want to get involved? Want more information? Let us know. Please email us at <b><u>dfainternational@gmail.com</u></b></p-->
            </div>
			<!-- .section-header -->
            <form action>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="sender" placeholder="Enter Name">
                    </div>
                    <div class="col-sm-6">
						<select>
						  <option value="Select">Subject</option>
						  <option value="More Information">More Information</option>
						  <option value="volunteer">Volunteer</option>
						  <option value="other">Other</option>

						</select>
                    </div>
				</div>
				<br>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="email" placeholder="Enter Email">
                    </div>
                    <div class="col-sm-6">
                        <input type="tel" placeholder="Mobile No.">
                    </div>
				</div>
				<br>
				<br>
				<div class="row">
                    <div class="col-sm-12">
                        <textarea cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                    </div>
				</div>
				<div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="t-btn submit-btn">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
	
	
	<?php
		$to = "nikazaballa@gmail.com";
		$subject = "intro" ;
		$txt = "Hello world!";
		$headers = "From: webmaster@example.com" . "\r\n" .
		"CC: somebodyelse@example.com";

		mail($to,$subject,$txt,$headers);
	?>
	
	<?php 
		if(isset($_POST['submit'])){
			$to = "email@example.com"; // this is your Email address
			$from = $_POST['email']; // this is the sender's Email address
			$subject = "Form submission";
			$subject2 = "Copy of your form submission";
			$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
			$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

			$headers = "From:" . $from;
			$headers2 = "From:" . $to;
			mail($to,$subject,$message,$headers);
			mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
			echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
			// You can also use header('Location: thank_you.php'); to redirect to another page.
			}
		?>
	
    <!-- End Contact Section -->

    <!-- Start Footer -->
    <footer class="site-footer section black-bg text-center">
        <div class="container">
		<div>
			<div> 
				<p class="footer-details">2534 State Street, Suite 454, San Diego, CA 92101 &nbsp | &nbsp Telephone No. (619) 988-5544
				</p>

				<p class="footer-details">Web Developer: Karenina Zaballa</p>
			</div>
			<p class="copy-right">Copyright 2017.Design by Awesome Themez</p>
            <div class="social-btn">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
		</div>
        </div>
    </footer>
    <!-- End Footer -->
	
	<!-- Scripts -->
	<script src="js/vendor/jquery-3.2.0.min.js"></script>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/bootstrap.min.js"></script>	
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	

  </body>


</html>