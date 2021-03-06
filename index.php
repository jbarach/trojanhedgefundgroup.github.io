<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>



	<head>
		<title>Trojan Hedgefund Group</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/loader.css" />

		
	</head>
	<body class="homepage"  id="body">
		<?php
			if (isset($_POST['addbutton']))  {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$addButton = $_POST['addbutton'];
				$to = "jcc394@cornell.edu";//Substitute with Josh's email address
				$subject = "Website Contact US";
				$txt = "You've received a message from".$name ."at ".$email.".  The message is listed below:\n".$message;
				$headers = "From: admin@example.com" . "\r\n" ;//swap admin@example.com with admin@url url being our domain
				mail($to,$subject,$txt,$headers);
}
		?>

	<!-- Loading Screen -->
	<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

	<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Home</a></li>
									<li><a href="#intro-wrapper">Introduction</a></li>
											
									<li><a href="#features">Our Board Members</a></li>
									<li><a href="#highlights">Readings</a></li>
									<li><a href="#footer-wrapper">Contact Us</a></li>
									
								</ul>
							</nav>

							<h1>Trojan Hedgefund Group</h1>
							<div id="logo">
								
								<span class="logo" position="fixed"><img src="images/logo.gif" alt="middle" align="middle" /></span>
							</div>
					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">Introduction </div>
					<section id="intro" class="container">
						<p class="style2">
							The Trojan Hedge Fund Group is a selective group of students who share a passion for financial markets and a strong interest in the hedge fund industry. The group meets weekly to discuss the previous week's events and potential future events/hypothetical investment plays. The group educates members on various investment strategies such as global macro, distressed, value, event driven, activist, etc
						 

						</p>

							
                    
                  

					
				
			</section>
		</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Our Board Members</div>
					<div id="main" class="container">

							<section id="features">
								<header class="style1">
									<h2>Meet our managers and associates!</h2>
									<h3>Together, we will prepare for careers in the hedgefund industry.</h3>
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section> <h3 /> Josh Barach</h3><h5 >Founder and President</h5><a href="#" class="image featured"><img src="images/josh.png" alt="" /></a>
												<h4>Josh attends the University of Southern California, where he majors in philosophy, politics & law with a minor in finance. Josh was Captain of his high school tennis and basketball teams. He has interned at Gramercy Funds Management, the Charles Koch Institute, Bison Interests, and has participated in a program at Google. He was founder and CEO of Smoak Enterprises, was founder and President of the Wall Street Club, and has co-founded Grey Space Art and Celebria. In his free time, he enjoys conversing with intellectually curious people, and reading financial newspapers and books. He also likes to stay active, travel, and indulge in physical pleasures such as good food and wine.</h4>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section> <h3 /> Yijing Zhao</h3><h5 >Director of Communications and Corporate Outreach</h5><a href="#" class="image featured"><img src="images/yijing.jpg" alt="" /></a>
											
												<h4>Yijing Zhao is a junior majoring in Business Administration at Marshall School of Business. She is passionate about investing, startups, and the capital market. This past summer, she interned at Credit Suisse and with a superstar investor a PE fund. In her spare time, Yijing loves reading, connecting with interesting people, photography, modern arts, Pilates, and traveling the world to explore different cultures.</h4>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section> <h3 /> Mick Swarts</h3><h5 >Faculty Advisor</h5><a href="#" class="image featured"><img src="images/swartz.png" alt="" /></a>
												
												<h4> Mick Swartz graduated with a Phd in Finance from the University of Iowa in 1994. Mick has received many teaching awards for teaching corporate finance, investments, and derivatives (options and futures). Mick has over twenty presentations at finance conferences. He has been a member of many academic finance organizations in the US, including the Financial Management Association, American Finance Association, Midwest Finance Association, Eastern Finance Association, Multi-National Finance Association (charter member), South-Western Finance Association and other finance organizations. He has been a speaker for community groups, consulted state legislators concerning executive compensation and given advice on merger legislation, and taught in many countries (Australia,Ukraine, United Kingdom, Canada, Poland, Germany) and presented at finance conferences in many countries (Mexico, Greece, Great Britian, Germany, Poland and the United States). Mick has appeared on NBC and CNN, as well as many radio broadcasts, discussing topics such as: the financial crisis, executive pay, investment strategies, retirement planning, bail outs, derivatives, options, SWAPS and the general economic environment.</h4>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section> <h3 /> Madison Gesser </h3><h5 >Director of Recruitment</h3><a href="#" class="image featured"><img src="images/gesser.png" alt="" /></a>
												
												<h4>
Madison is an Economics Major going into his junior year at USC. After playing soccer for Boston College's Men's Soccer team, he decided to focus on his academic interests and made the switch to USC. Most recently he worked for PeerStreet, an online marketplace for real estate backed loans. Madison brings a unique perspective on debt, real estate, and private equity. His other activities, studies, and interests include: a Business Finance Minor, CA Real Estate Salesperson License, and Co-founder ofwww.StudentInstinct.com – an online marketplace for college room decor.</h4>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section> <h3 /> Drew Cohen</h3><h5 >Vice President </h5><a href="#" class="image featured"><img src="images/daenerys.png" alt="" /></a>
									
												<h4>Drew Cohen is currently pursuing his B.S. in Business Administration at the Marshall School of Business and his B.S. in Accounting at the Leventhal School of Accounting. While at USC, Drew has participated in the USC student government Philanthropy Fund, the Trojan Investing Society's Leader’s Program, and has helped conduct research studies at the Marshall School. He also is currently the exchequer for the Alpha Epsilon Pi fraternity. He has worked for a year and a half at Old West Investment Management, a value-investing firm, as a research equity analyst. This summer he interned in New York at Goldman Sachs in the Global Investment Research group as an equity analyst.</h4>
											</section>
										</div>
										
									</div>
								</div>
								
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">Readings</div>
					<div id="highlights" class="container">

						<p class="style2"> Our readings include the Wall Street Journal, Alchemy of Finance, Intelligent Investor, Beating the Street, One up on Wall Street, Reminiscences of a Stock Operator, Market Wizards, New Market Wizards, Hedge Fund Market Wizards, Winning on Wall Street--some of which are posted below!</p>
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/WSJ.png" alt="" /></a>

									
									<ul class="actions">
										<li><a href="http://www.wsj.com/" class="button style1">Read Wall Street Journal</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/intelligentinvestor.png" alt="" /></a>
								
									<ul class="actions">
										<li><a href="https://www.amazon.com/Intelligent-Investor-Definitive-Investing-Essentials/dp/0060555661" class="button style1">Buy on Amazon</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/oneup.png" alt="" /></a>
							
						
									<ul class="actions">
										<li><a href="http://www.barnesandnoble.com/w/one-up-on-wall-street-peter-lynch/1102006420;jsessionid=B21176658EE3DFB8422B75367945B79F.prodny_store02-atgap03?ean=9780743200400&st=AFF&2sid=Simon%20&%20Schuster_7567305_NA&sourceId=AFFSimon%20&%20SchusterM000023" class="button style1">Buy on Barnes and Noble</a></li>
									</ul>
								</section>
							</div>
						</div>

						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/marketwizards.png" alt="" /></a>

							
							
									<ul class="actions">
										<li><a href="https://play.google.com/store/books/details?id=YFffQ6JgMZ0C&source=productsearch&utm_source=HA_Desktop_US&utm_medium=SEM&utm_campaign=PLA&pcampaignid=MKTAD0930BO1&gl=US&gclid=CPiwksStys4CFYxlNwodU_AOcA&gclsrc=ds" class="button style1">Free Sample</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/alchemyoffinance.png" alt="" /></a>
								
									<ul class="actions">
										<li><a href="https://www.youtube.com/watch?v=TI0V04dP4t8" class="button style1">Listen to Audiobook </a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/beatingthestreet.png" alt="" /></a>
								
									<ul class="actions">
										<li><a href="https://www.amazon.com/Beating-Street-Peter-Lynch/dp/0671891634" class="button style1">Buy on Amazon </a></li>
									</ul>
								</section>
							</div>
						</div>

						<br> 
						<br>

						<p class="style2"> Our Favorite Videos include (Josh help me fill this in real quick!)</p>

						<br>

						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<iframe width="400" height="260" src="https://www.youtube.com/embed/PHe0bXAIuk0" frameborder="0" allowfullscreen></iframe>

									
									
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<iframe width="400" height="260" src="https://www.youtube.com/embed/r2h84TORcJI" frameborder="0" allowfullscreen></iframe>

									
									
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<iframe width="400" height="260" src="https://www.youtube.com/embed/K_oET45GzMI" frameborder="0" allowfullscreen></iframe>

									
									
								</section>
							</div>
						</div>

						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<iframe width="400" height="260" src="https://www.youtube.com/embed/itsetyz4GKc" frameborder="0" allowfullscreen></iframe>

									
									
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<iframe width="400" height="260" src="https://www.youtube.com/embed/TI0V04dP4t8" frameborder="0" allowfullscreen></iframe>
					

									
									
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<iframe width="400" height="260" src="https://www.youtube.com/embed/RHSEEJDKJho" frameborder="0" allowfullscreen></iframe>

									
									
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">Contact Us</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>emaiil us your resume and etc </h2>
							<p><strong>
								;asldkfja;lsdkfj;laskdjf;lasdjg;lksg;khsdghsdf;lkhds;flkjasd;fj;asdkf<br>j;ldskfj;asdkfj;sakdfj;sdlakjf</strong>
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								
								<!-- Contact Form -->
									<section>
										<form method="post" action="uploads.php" enctype="multipart/form-data">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" name="addbutton" class="style1" value="Send" /></li> 
							<li><input type="file" name="uploadme" id="uploadme" /></li>
													</ul>

												</div>
											</div>
										</form>
									</section>


							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-home">Mailing Address</h3>
													<p>
														als;dkjf;adsjf;ladsjf;ajsdf<br />
														as;dlkfja;sdkfj;adsfj<br />
														asd;fljasd;fjasd;fasldf
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Social</h3>
													<p>
														<a href="#">@youremail.com</a><br />
														<a href="#">linkedin.com/feelfreetosendtome</a><br />
														<a href="#">facebook.com/haveaFacebookpageyet?</a>
													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#">emailgoeshere</a>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-phone">Phone</h3>
													<p>
														a;sdlfkj;asdjf;as
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Josh Barach</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-viewport.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>			
		<script src="assets/js/bs-scrollspy.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

	</body>
</html>