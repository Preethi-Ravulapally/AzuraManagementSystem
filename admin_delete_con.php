<?php
session_start();
if(isset($_POST['submit'])){
	//connect to database
	$db=mysqli_connect("localhost","root","","azura");
    
	$role="convener";
	$name=$_POST['name'];
	$email=$_POST['email'];

	$sql="DELETE from azura_user where name='$name' and email='$email' and role='$role'";
	mysqli_query($db,$sql);
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin delete convener</title>
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
									<li><a href="admin_add_con.php" data-tab="tab-2">ADD CONVENER</a></li>
									<li><a href="admin_delete_con.php" data-tab="tab-3">DELETE CONVENER</a></li>
									<li><a href="admin_viewconvener.php" data-tab="tab-4">VIEW CONVENER</a></li>
									<li><a href="admin_viewevents.php" data-tab="tab-5">VIEW EVENTS</a></li>
									<li><a href="admin_vieworganizers.php" data-tab="tab-6">VIEW ORGANIZERS</a></li>
									<li><a href="admin_editgallery.php" data-tab="tab-6">EDIT GALLERY</a></li>
									</ul>
								<div class="tabs">
									<!-- Tab 1 -->
									
											<div class="box alt">
									    <h3>DELETE CONVENER</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#" onsubmit="alert('Convener Removed Successfully')">
								<div class="table-wrapper">
								<table><tr><td>
								        <label><h3>Username</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="name"  required="required" id="name" value="" placeholder="Username" />
										</div></td></tr>
										<tr>
										<td><label><h3>Email</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email"  required="required" id="email" value="" placeholder="Email" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Delete Convener" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
							</center>
						  </div>
				</section>
	</body>
</html>

