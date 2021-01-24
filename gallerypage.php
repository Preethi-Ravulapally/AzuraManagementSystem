<!DOCTYPE HTML>
<!--
	Broadcast by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<!--<header id="header">
				<h1><a href="#"><span></span></a></h1>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<!--<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="stu_register.php">SIGN UP</a></li>
					<li><a href="login.php">SIGN IN</a></li>
					<li><a href="admin.html">ADMIN</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">

			<!-- One -->
				<section class="wrapper style1">
					<div class="inner">
						<header class="align-center">
						<?php
						session_start();
						
						$galleryname=$_GET['id'];
						
								$db = mysqli_connect("localhost","root","","azura");
							    $sql="select * from gallery where galleryname='$galleryname'";
								$result=mysqli_query($db,$sql);?>
							<h2><?php echo $galleryname?></h2>
							<p></p>
						</header>
						
							<div class="video">
							<div class="video-wrapper">
								<?php 
								while($row=mysqli_fetch_array($result))
								{
								echo "<img src='GalleryUploads/".$row['galleryposter']."'/>";
								?>
								</div>
								</div>
							
						<?php
echo file_get_contents("GalleryUploads/".$row['galleryabstract']."");
}
								?>
						<p>Curabitur venenatis lorem ut finibus finibus. Ut quis eleifend libero, nec ultricies metus. Morbi magna risus, congue sit amet pellentesque eget, malesuada ut justo. Sed ac pretium quam. Ut vel ex vitae enim sagittis posuere ac id erat. Vestibulum vel ullamcorper tellus. Donec sapien massa, venenatis ac felis vel, vestibulum sagittis enim. Maecenas ut egestas lorem, nec luctus ligula. Vestibulum neque diam, aliquet non enim a, cursus lacinia metus. Aenean fringilla luctus rhoncus. Integer vulputate massa ac suscipit venenatis. Integer luctus elit non nulla fringilla, ullamcorper maximus sem congue. Integer tristique eu nisi nec fermentum. Ut malesuada quis massa at ultricies.</p>
						<p>Donec molestie tellus eu tincidunt dignissim. Sed sollicitudin bibendum ultricies. Vivamus tristique justo lacinia dui tempus consequat. Sed hendrerit justo in nisl auctor, id rutrum tortor congue. Vivamus mattis nibh et sem rutrum, vel viverra purus viverra. Donec et justo at orci euismod hendrerit vel vel neque. Donec gravida ipsum in augue volutpat laoreet. Ut lobortis turpis sit amet sodales ultrices.</p>
					</div>
				</section>

			<!-- Three 
				<section class="wrapper ">
					<div class="inner">
						<header class="align-center">
							<h2>Aliquam ipsum purus dolor</h2>
							<p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
						</header>

						<!-- 3 Column Video Section -->
							<!--<div class="flex flex-3">
								<div class="video col">
									<div class="image fit">
										<img src="images/pic09.jpg" alt="" />
										<div class="arrow">
											<div class="icon fa-play"></div>
										</div>
									</div>
									<p class="caption">
										Cras eget lacus sed mauris scelerisque tincidunt
									</p>
									<a href="generic.html" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/pic10.jpg" alt="" />
										<div class="arrow">
											<div class="icon fa-play"></div>
										</div>
									</div>
									<p class="caption">
										Vivamus vulputate lacus non massa auctor lobortis
									</p>
									<a href="generic.html" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/pic11.jpg" alt="" />
										<div class="arrow">
											<div class="icon fa-play"></div>
										</div>
									</div>
									<p class="caption">
										Nam eu nisi non ante sodales interdum a vitae neque
									</p>
									<a href="generic.html" class="link"><span>Click Me</span></a>
								</div>
							</div>
					</div>
				</section>-->

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