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
								<li><a href="admin_access.html" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="admin_add_con.php" data-tab="tab-1">ADD CONVENER</a></li>
									<li><a href="admin_delete_con.php" data-tab="tab-3">DELETE CONVENER</a></li>
									<li><a href="admin_viewconvener.php" data-tab="tab-4">VIEW CONVENER</a></li>
									<li><a href="admin_add_event.php" data-tab="tab-5">ADD EVENT</a></li>
									<li><a href="admin_delete_event.php" data-tab="tab-6">DELETE EVENT</a></li>
									<li><a href="admin_viewevents.php" data-tab="tab-7">VIEW EVENTS</a></li>
									<li><a href="admin_vieworganizers.php" data-tab="tab-8">VIEW ORGANIZERS</a></li>
									</ul>
								<div class="tabs">
									<!-- Tab 1 -->
									
											<div class="box alt">
									    <h3>DELETE EVENT</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="admin_access.html"">
								<div class="table-wrapper">
								<table><tr><td>
								        <label><h3>Event Name</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="eventname" id="eventname" value="" placeholder="Event Name" />
										</div></td></tr>
										<tr>
										<td>
										<label><h3>Branch</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="branch" id="branch" value="" placeholder="Branch" />
										</div></td></tr>
										</table>
										<div class="12u$">
												<input type="submit" value="Delete Event" />
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

