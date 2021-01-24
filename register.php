<?php
session_start();
if(isset($_POST['submit'])){
	//connect to database
	$db=mysqli_connect("localhost","root","meghana","azura");
    
	$role=$_POST['role'];
	if($role=='student'){
			header("Location:stu_register.php");
			exit();}
		if($role=='organizer'){
			header("Location:org_register.php");
			exit();}

}
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
	<body class="subclass">

		<!-- Header -->
			<header id="header">
				<h1><a href="#"><span></span></a></h1>
				<a href="#menu">MENU</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">HOME</a></li>
					<li><a href="generic.html">ABOUT</a></li>
					<li><a href="stu_register.php">SIGN UP</a></li>
					<li><a href="login.php">SIGN IN</a></li>
					<li><a href="admin.html">ADMIN</a></li>
				</ul>
			</nav>

			<h3>REGISTRATION</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#">
								<div class="table-wrapper">
								<table>
								<tr><td>
								        <h3>Want To Sign Up as</h3><br><br>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="role" id="role">
													<option value="student">Student</option>
													<option value="organizer">Organizer</option>
												</select>
											</div>
										</div></td></tr></table>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Submit" /></li>
												<li><input type="reset" name="submit" value="Reset" class="alt" /></li>
											</ul>
										</div>
								</form>
								</div>
								<hr />
		</center>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex flex-3">
						<div class="col">
							<h3>Vestibullum</h3>
							<ul class="alt">
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
								<li><a href="#">Vis id faucibus montes tempor</a></li>
								<li><a href="#">Massa amet lobortis vel.</a></li>
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
							</ul>
						</div>
						<div class="col">
							<h3>Lobortis</h3>
							<ul class="alt">
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
								<li><a href="#">Vis id faucibus montes tempor</a></li>
								<li><a href="#">Massa amet lobortis vel.</a></li>
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
							</ul>
						</div>
						<div class="col">
							<h3>Accumsan</h3>
							<ul class="alt">
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
								<li><a href="#">Vis id faucibus montes tempor</a></li>
								<li><a href="#">Massa amet lobortis vel.</a></li>
								<li><a href="#">Nascetur nunc varius commodo.</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Coverr</a>. Video: <a href="https://coverr.co">Coverr</a>.
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