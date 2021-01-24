<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
	   <section class="wrapper style2">
					<div class="inner">
						<header>
						<h3>WELCOME ADMIN</h3>
							</header>
							<div class="flex flex-tabs">
								<ul class="tab-list">
								<li><a href="admin_access.html" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="admin_add_con.php" data-tab="tab-2">ADD CONVENER</a></li>
									<li><a href="admin_delete_con.php" data-tab="tab-3">DELETE CONVENER</a></li>
									<li><a href="admin_viewconvener.php" data-tab="tab-4">VIEW CONVENER</a></li>
									<li><a href="admin_add_event.php" data-tab="tab-5">ADD EVENT</a></li>
									<li><a href="admin_delete_event.php" data-tab="tab-6">DELETE EVENT</a></li>
									<li><a href="admin_viewevents.php" data-tab="tab-7">VIEW EVENTS</a></li>
									<li><a href="admin_vieworganizers.php" data-tab="tab-8">VIEW ORGANIZERS</a></li>
									</ul>
								<div class="tabs">
									<!-- Tab 1 -->
									 <h3>EDIT PROFILE</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="admin_access.html" onsubmit="return validate(this);">
								<div class="table-wrapper">
								<table><tr><td>
								        <label><h3>First Name</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="firstname" id="firstname" value="" placeholder="First Name" />
										</div></td></tr>
										<tr>
										<td><label><h3>Last Name</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="lastname" id="lastname" value="" placeholder="Last Name" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Date Of Birth</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="date" name="Dob" id="Dob" value="" placeholder="date of birth" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Phone number</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phonenumber" id="phonenumber" value="" placeholder="Phone number" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Branch</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="branch" id="branch" value="" placeholder="Branch" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Designation</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="Designation" id="Designation" value="" placeholder="Designation" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Achievements</h3></label></td>
										<td>
										<div class="12u$">
											<textarea name="Achievements" id="Achievements" placeholder="Enter Achievements" rows="6"></textarea>
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
											
												<input type="submit" value="Update" />
												<input type="reset" value="Reset" class="alt" />
											
										</div>
								</form>
								</div>
								<hr />
							</center>
								</div>
				</section>
	</body>
</html>

