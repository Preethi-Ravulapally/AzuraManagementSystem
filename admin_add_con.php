<?php
session_start();
if(isset($_POST['submit'])){
	//connect to database
	$db=mysqli_connect("localhost","root","","azura");
    
	$role="convener";
	$name=$_POST['name'];
	$password="convener";
	$college=$_POST['college'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$branch=$_POST['branch'];
	$designation=$_POST['designation'];
	
	$_SESSION['name']=$name;

	$sql="INSERT INTO azura_user (role,email,password,name,branch,college,phoneno,designation) VALUES ('$role','$email','$password','$name','$branch','$college','$phoneno','$designation')";
	mysqli_query($db,$sql);
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin add convener</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
	<header id="header">
				<h1><a href="#">AZURA <span>by CMR COLLEGE OF ENGINEERING AND TECHNOLOGY</span></a></h1>
			</header>
	   <section class="wrapper style2">
					<div class="inner">
						<header>
						<h3>WELCOME ADMIN</h3>
							</header>
							<div class="flex flex-tabs">
								<ul class="tab-list">
								<li><a href="admin_access.php" data-tab="tab-1">DASHBOARD</a></li>
									<li><a href="admin_add_con.php" data-tab="tab-1">ADD CONVENER</a></li>
									<li><a href="admin_delete_con.php" data-tab="tab-3">DELETE CONVENER</a></li>
									<li><a href="admin_viewconvener.php" data-tab="tab-4">VIEW CONVENER</a></li>
									<li><a href="admin_viewevents.php" data-tab="tab-7">VIEW EVENTS</a></li>
									<li><a href="admin_vieworganizers.php" data-tab="tab-8">VIEW ORGANIZERS</a></li>
									<li><a href="admin_editgallery.php" data-tab="tab-6">EDIT GALLERY</a></li>
									</ul>
								<div class="tabs">
									<!-- Tab 1 -->
									
											<div class="box alt">
											<h3>ADD CONVENER</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#" onsubmit="alert('Convener Added Successfully')">
								<div class="table-wrapper">
								<table>
								<tr><td>
								        <label><h3>Username</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="name"  required="required" id="name" value="" placeholder="Username" />
										</div></td></tr>
								        
										<tr><td>
								        <label><h3>College</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="college"  required="required" id="college" value="" placeholder="College" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Email</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email"  required="required" id="email" value="" placeholder="Email" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Phoneno</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phoneno" id="phoneno" value="" placeholder="Phoneno" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Branch</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="branch" id="branch">
													<option value="cse">CSE</option>
													<option value="ece">ECE</option>
													<option value="eee">EEE</option>
													<option value="civil">CIVIL</option>
													<option value="mech">MECHANICAL</option>
													<option value="mba">MBA</option>
												</select>
											</div>
										</div></td></tr>
										<tr><td>
								        <label><h3>Designation</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="designation"  required="required" id="designation" value="" placeholder="Designation" />
										</div></td></tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
											
										</div>
								</form>
								</div>
								<hr />
		</center>
	</body>
</html>