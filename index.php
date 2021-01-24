<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	Broadcast by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="assets/css/coin-slider.css" />

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript" src="assets/js/coin-slider.min.js"></script>

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="#"><span></span></a></h1>
				<a href="#menu">MENU</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="stu_register.php">SIGN UP</a></li>
					<li><a href="login.php">SIGN IN</a></li>
					<li><a href="admin.html">ADMIN</a></li>
				</ul>
			</nav>

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner" data-video="images/banner">
					<div class="inner">
						<header>
							<h1><a href="about.php">AZURA FEST</a></h1>
							<p>CMR COLLEGE OF ENGINEERING AND TECHNOLOGY
							</p>
						</header>
						
					</div>

				</section>

		<!-- Main -->
			<div id="main">

			<!-- One -->
				 <!--<section class="wrapper style1">
				 
					<div class="inner">
						<header class="align-center">
							</header> -->
						<!-- 2 Column Video Section -->
							<!-- <div class="flex flex-2">
								<div class="video col">
									<div class="image fit">
										<img src="images/pic07.jpg" alt="" />
										<div class="arrow">
											<!-- <div class="icon fa-play"></div> -->
										<!-- </div> 
									</div>
									<p class="caption">
										</p>
									</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/pic08.jpg" alt="" />
										<div class="arrow">
											<!-- <div class="icon fa-play"></div> -->
										<!-- </div>
									</div>
									<p class="caption">
										</p>
									</div> --> 
							<!-- </div> -->
 				<!-- </div>--!>
				</section> 
<!-- Three -->
				<!-- <section class="wrapper ">
					<div class="inner">
						<header class="align-center">
							<h2>Aliquam ipsum purus dolor</h2>
							<p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
						</header>

						<!-- 3 Column Video Section -->
							<div class="flex flex-3">

										<?php
														$db = mysqli_connect("localhost","root","","azura");
														$sql="select * from gallery";
														$result=mysqli_query($db,$sql);
														while($row=mysqli_fetch_array($result))
														{
															echo '<div class="video col">';
													        echo  '<div class="image fit">';
															echo "<img src='GalleryUploads/".$row['galleryposter']."'/>";
															echo '<div class="arrow"></div></div>';
															echo '<p class="caption">'.$row['galleryname'].'</p>';
															echo  '<a href="gallerypage.php?id='.$row['galleryname'].'" class="link"><span>Click Me</span></a></div>';
														}
														?>
														</div>
								<!--<div class="video col">
									<div class="image fit"> 
										 <img src="images/pic10.jpg" alt="" />
										<div class="arrow">
											
										</div>
									</div>
									<p class="caption">
										COMPUTER SCIENCE ENGINEERING(CSE) POSTER
									</p>
									<a href="generic.php" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/pic11.jpg" alt="" />
										<div class="arrow"> 
											
										</div>
									</div>
									<p class="caption">
										ELECTRONICS AND COMPUTER ENGINEERING(ECE) POSTER
									</p>
									<a href="generic.php" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/pic11.jpg" alt="" />
										<div class="arrow"> 
											
										</div>
									</div>
									<p class="caption">
										ELECTRICAL AND ELECTRONICS ENGINEERING(EEE) POSTER
									</p>
									<a href="generic.php" class="link"><span>Click Me</span></a>
								</div><div class="video col">
									<div class="image fit">
										<img src="images/pic11.jpg" alt="" />
										<div class="arrow"> 
											
										</div>
									</div>
									<p class="caption">
										CIVIL ENGINEERING POSTER
									</p>
									<a href="generic.php" class="link"><span>Click Me</span></a>
								</div><div class="video col">
									<div class="image fit">
										<img src="images/pic11.jpg" alt="" />
										<div class="arrow"> 
											
										</div>
									</div>
									<p class="caption">
										MECHANICAL ENGINEERING POSTER
									</p>
									<a href="generic.php" class="link"><span>Click Me</span></a>
								</div>
							</div>
					</div>
				</section> 

 		
			<!-- Two -->
				<section class="wrapper style2">
					<div class="inner">
						<header>
							</header>
						<!-- Tabbed Video Section -->
							<div class="flex flex-tabs">
								<ul class="tab-list">
									<li><a href="#" data-tab="tab-1" class="active">TECHNICAL EVENT POSTERS</a></li>
									<li><a href="#" data-tab="tab-2">NON TECHNICAL EVENT POSTERS</a></li>
									</ul>
								<div class="tabs">

									<!-- Tab 1 -->
										<div class="tab tab-1 flex flex-3 active">
												
														<!--<img src="images/pic01.jpg" alt="" />-->
														<?php
														$db = mysqli_connect("localhost","root","","azura");
														$sql="select eventposter,eventname from azura_user where role='organizer' and eventtype='technical'";
														$result=mysqli_query($db,$sql);
														while($row=mysqli_fetch_array($result))
														{
															$_SESSION['event']=$row['eventname'];
															echo '<div class="video col">';
													        echo  '<div class="image fit">';
															echo "<img src='uploads/".$row['eventposter']."'/>";
															echo '<div class="arrow"></div></div>';
															echo  '<a href="generic.php?id='.$row['eventname'].'" class="link"><span>Click Me</span></a></div>';
														}
														?>
														</div>
														
											<!-- Video Thumbnail -->
											<!--	<div class="video col">
													<div class="image fit">
														<img src="images/pic02.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
												<!--<div class="video col">
													<div class="image fit">
														<img src="images/pic03.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
											<!--<div class="video col">
													<div class="image fit">
														<img src="images/pic04.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
											<!--<div class="video col">
													<div class="image fit">
														<img src="images/pic05.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
											<!--<div class="video col">
													<div class="image fit">
														<img src="images/pic06.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>-->
												

									<!-- Tab 2 -->
										<div class="tab tab-2 flex flex-3">
											<?php
														$db = mysqli_connect("localhost","root","","azura");
														$sql="select eventname,eventposter from azura_user where role='organizer' and eventtype='nontechnical'";
														$result=mysqli_query($db,$sql);
														while($row=mysqli_fetch_array($result))
														{
															echo '<div class="video col">';
													        echo  '<div class="image fit">';
															echo "<img src='uploads/".$row['eventposter']."'/>";
															echo '<div class="arrow"></div></div>';
															echo  '<a href="generic.php?id='.$row['eventname'].'" class="link"><span>Click Me</span></a></div>';
														}
														?>
											</div>
												</div>
														</div>
														
												<!--<div class="video col">
													<div class="image fit">
														<img src="images/pic06.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											
												<div class="video col">
													<div class="image fit">
														<img src="images/pic05.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											
												<div class="video col">
													<div class="image fit">
														<img src="images/pic04.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											
												<div class="video col">
													<div class="image fit">
														<img src="images/pic03.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											
												<div class="video col">
													<div class="image fit">
														<img src="images/pic02.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
										
												<div class="video col">
													<div class="image fit">
														<img src="images/pic01.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
										</div>

									<!-- Tab 3 -->
										<div class="tab tab-3 flex flex-3">
											<!-- Video Thumbnail -->
												<div class="video col">
													<div class="image fit">
														<img src="images/pic03.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
												<div class="video col">
													<div class="image fit">
														<img src="images/pic02.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
												<div class="video col">
													<div class="image fit">
														<img src="images/pic01.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
												<div class="video col">
													<div class="image fit">
														<img src="images/pic06.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
												<div class="video col">
													<div class="image fit">
														<img src="images/pic05.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
											<!-- Video Thumbnail -->
												<div class="video col">
													<div class="image fit">
														<img src="images/pic04.jpg" alt="" />
														<div class="arrow">
															
														</div>
													</div>
													<a href="generic.php" class="link"><span>Click Me</span></a>
												</div>
										</div>

								</div>
							</div>
					</div>
				</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex flex-3">
						<div class="col">
							<h3>Contact Us</h3>
							<ul class="alt">
								<li><a href="http://www.cmrcet.ac.in/">www.cmrcet.ac.in</a></li>
								<li>CMRCET
										Kandlakoya(v), Medchal Road.
										Hyderabad - 501401
										Telangana, India</li>
								<li>91-9248-7272-10</li>
								<li><a href="http://www.gmail.com/">principal@cmrcet.org</a></li>
							</ul>
						</div>
						<div class="col">
							<h3>Quick Links</h3>
							<ul class="alt">
								<li><a href="#"> Alumni</a></li>
								<li><a href="#"> Placement Cell</a></li>
								<li><a href="#">Image Gallery</a></li>
								<li><a href="#">Virtual Tour</a></li>
							</ul>
						</div>
						<!--<div class="col">
							<h3>Accumsan</h3>
							<ul class="alt">
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
								<li><a href="#">Vis id faucibus montes tempor</a></li>
								<li><a href="#">Massa amet lobortis vel.</a></li>
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
							</ul>
						</div>-->
					</div>
				</div>
				<div class="copyright">
					<ul class="icons">
						<li><a href="https://twitter.com/login" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/login/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/accounts/login/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					&copy; Azura. Email: <a href="#">azuraproject123@gmail.com</a>. Done By: <a href="#">AzuraManagementTeam</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>