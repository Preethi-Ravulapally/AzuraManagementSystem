<?php
 session_start();
if(isset($_POST['submit'])){
	//connect to database
	$link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"azura");
    $_SESSION['email'] = $_POST['email'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $role=$_POST['role'];
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysqli_real_escape_string($link,$email);
	$password=mysqli_real_escape_string($link,$password);
	$sql="select * from azura_user where email='$email' and password='$password' and role='$role'";
	$result=mysqli_query($link,$sql) or die("failed to query database");
	$row=mysqli_fetch_array($result);
	if(($row['email']== $email )&& ($row['password'] == $password))
	{
		if($row['role']=='convener'){
			header("Location:con_access.php");
			exit();}
	    if($row['role']=='student'){
			header("Location:stu_access.php");
			exit();}
		if($row['role']=='organizer'){
			header("Location:org_access.php");
			exit();}
	}
	else
	{
		echo "<script type='text/javascript'>alert('enter correct email and password')</script>";
	}
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

			<h3>LOGIN</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#"">
								<div class="table-wrapper">
								<table>
								<tr><td>
								        <label><h3>Role</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="role" id="role">
													<option value="student">Student</option>
													<option value="organizer">Organizer</option>
													<option value="convener">Convener</option>
												</select>
											</div>
										</div></td></tr>
								<tr><td>
								        <label><h3>Email</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email"  required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="" placeholder="Email" />
										</div></td></tr>
										<tr>
										<td><label><h3>Password</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="password" pattern=".{6,}" id="password"  required="required" value="" placeholder="Password" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Submit" /></li>
												<li><input type="reset" name="submit" value="Reset" class="alt" /></li>
											</ul>
											<h4>New user?<a href="stu_register.php">sign up</a></h4>
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