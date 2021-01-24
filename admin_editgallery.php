<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Access</title>
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
								<li><a href="admin_access.php" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="admin_add_con.php" data-tab="tab-2">ADD CONVENER</a></li>
									<li><a href="admin_delete_con.php" data-tab="tab-3">DELETE CONVENER</a></li>
									<li><a href="admin_viewconvener.php" data-tab="tab-4">VIEW CONVENER</a></li>
									<li><a href="admin_viewevents.php" data-tab="tab-5">VIEW EVENTS</a></li>
									<li><a href="admin_vieworganizers.php" data-tab="tab-6">VIEW ORGANIZERS</a></li>
									<li><a href="admin_editgallery.php" data-tab="tab-6">EDIT GALLERY</a></li>
									</ul>
									<div class="tabs">
									<h3>AZURA FEST</h3>
									<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="gallery.php?name=AZURA"  enctype="multipart/form-data" onsubmit="<script>alert('Upload successfully')</script>">
								<div class="table-wrapper">
								<table>
								<tr><td>
										<td><label><h3>Poster</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="posterfile"  required="required" id="file" value="" placeholder="Poster" />
										</div>
										</td>
										</tr>
										<tr><td>
										<td><label><h3>Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="abstractfile"  required="required" id="file" value="" placeholder="Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
		<h3>CSE DEPARTMENT</h3>
									<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="gallery.php?name=CSE"  enctype="multipart/form-data">
								<div class="table-wrapper">
								<table>
								<tr><td>
										<td><label><h3>Poster</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="posterfile" id="file" value="" placeholder="Poster" />
										</div>
										</td>
										</tr>
										<tr><td>
										<td><label><h3>Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="abstractfile" id="file" value="" placeholder="Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
		<h3>ECE DEPARTMENT</h3>
									<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="gallery.php?name=ECE"  enctype="multipart/form-data">
								<div class="table-wrapper">
								<table>
								<tr><td>
										<td><label><h3>Poster</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="posterfile" id="file" value="" placeholder="Poster" />
										</div>
										</td>
										</tr>
										<tr><td>
										<td><label><h3>Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="abstractfile" id="file" value="" placeholder="Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
		<h3>EEE DEPARTMENT</h3>
									<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="gallery.php?name=EEE"  enctype="multipart/form-data" >
								<div class="table-wrapper">
								<table>
								<tr><td>
										<td><label><h3>Poster</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="posterfile" id="file" value="" placeholder="Poster" />
										</div>
										</td>
										</tr>
										<tr><td>
										<td><label><h3>Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="abstractfile" id="file" value="" placeholder="Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
		<h3>CIVIL DEPARTMENT</h3>
									<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="gallery.php?name=CIVIL"  enctype="multipart/form-data">
								<div class="table-wrapper">
								<table>
								<tr><td>
										<td><label><h3>Poster</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="posterfile" id="file" value="" placeholder="Poster" />
										</div>
										</td>
										</tr>
										<tr><td>
										<td><label><h3>Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="abstractfile" id="file" value="" placeholder="Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
		<h3>MECHANICAL DEPARTMENT</h3>
									<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="gallery.php?name=MECH"  enctype="multipart/form-data" >
								<div class="table-wrapper">
								<table>
								<tr><td>
										<td><label><h3>Poster</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="posterfile" id="file" value="" placeholder="Poster" />
										</div>
										</td>
										</tr>
										<tr><td>
										<td><label><h3>Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="abstractfile" id="file" value="" placeholder="Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
		<h3>MBA DEPARTMENT</h3>
									<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="gallery.php?name=MBA"  enctype="multipart/form-data">
								<div class="table-wrapper">
								<table>
								<tr><td>
										<td><label><h3>Poster</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="posterfile" id="file" value="" placeholder="Poster" />
										</div>
										</td>
										</tr>
										<tr><td>
										<td><label><h3>Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="abstractfile" id="file" value="" placeholder="Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
								</div>
								</div>
								</div>
				</section>
				
	</body>
</html>

