<?php
session_start();
if(isset($_POST['submit'])){
	//connect to database
	$db=mysqli_connect("localhost","root","","azura");
    
	$role='student';
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$password=$_POST['password'];
	$college=$_POST['college'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$branch=$_POST['branch'];

	$_SESSION['email']=$email;

	$sql="INSERT INTO azura_user (role,email,password,name,rollno,branch,college,phoneno) VALUES ('$role','$email','$password','$name','$rollno','$branch','$college','$phoneno')";
	mysqli_query($db,$sql);
	
			header("Location:stu_access.php");
			exit();
		

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
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
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
								        <label><h3>Username</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="name"  required="required" id="name" value="" placeholder="Username" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Rollno</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="rollno" required="required" pattern="[0-9]{1}+[0-9]{1}+H51A0+[12345]{1}+[a-zA-Z0-9]{1}+[0-9]{1}" id="rollno" value="" placeholder="Rollno" />
										</div></td></tr>
										<tr>
										<td><label><h3>Password</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="password"  required="required" pattern=".{6,}" title="Enter atleast 6 Characters"  id="password" value="" placeholder="Password" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Confirm Password</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="conpassword"  required="required" pattern=".{6,}" title="Enter atleast 6 Characters" id="conpassword" value="" placeholder="Confirm Password" />
										</div>
										</td>
										</tr>
										<tr><td>
								        <label><h3>College</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="college" id="college"  required="required" value="" placeholder="College" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Email</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required" value="" placeholder="Email" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Phoneno</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phoneno" id="phoneno" pattern="[0-9]{10}" required="required" value="" placeholder="Phoneno" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Branch</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="branch" id="branch" required="required">
													<option value="cse">CSE</option>
													<option value="ece">ECE</option>
													<option value="eee">EEE</option>
													<option value="civil">CIVIL</option>
													<option value="mech">MECHANICAL</option>
													<option value="mba">MBA</option>
												</select>
											</div>
										</div></td></tr>
										
										</table>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Submit" /></li>
												<li><input type="reset" name="reset" value="Reset" class="alt" /></li>
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