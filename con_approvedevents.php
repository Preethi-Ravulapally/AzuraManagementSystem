<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Login</title>
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
						<h3>
						<?php
						session_start();
						echo  "welcome ".$_SESSION['email'];
						?>
						</h3>
							</header>
							<div class="flex flex-tabs">
								<ul class="tab-list">
								<li><a href="con_access.php" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="con_viewevents.php" data-tab="tab-2">VIEW EVENTS</a></li>
									<li><a href="con_approvedevents.php" data-tab="tab-2">APPROVED EVENTS</a></li>
									<li><a href="con_feedback.php" data-tab="tab-3">VIEW FEEDBACK</a></li>
									<li><a href="con_rating.php" data-tab="tab-7">VIEW VOLUNTEER RATING</a></li>
									<li><a href="con_vieworganizers.php" data-tab="tab-7">VIEW ORGANIZER LIST</a></li>
									
									</ul>
								<div class="tabs">
											<!-- Table -->
											<?php
								  $connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
								  $sql="select eventname,name from azura_user where role='organizer'";
								  $result=mysqli_query($connector,$sql) or die("failed to query database");
								  ?>
								  <div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th><h4>Event Name</h4></th>
												<th><h4>Organizer Name</h4></th>
												<th><h4>Faculty Incharge</h4></th>
											</tr>
										</thead>
								  <tbody>
								 <?php  
								while( $row = mysqli_fetch_array($result))
								{
									echo "<tr><td>$row[0]</td><td>$row[1]</td>";
									echo '<td>
												<div class="6u$ 12u$(xsmall)">
												<form method="post" action="#">
											<input type="text" name="faculty" id="faculty" value="" placeholder="Faculty Name" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="category" id="category">
													<option value="cse">CSE</option>
													<option value="ece">ECE</option>
													<option value="eee">EEE</option>
													<option value="civil">CIVIL</option>
													<option value="mech">MECH</option>
													<option value="mba">MBA</option>
												</select>
											</div>
											</div>
											<input type="submit" name="submit" id="submit" value="Submit"/>
											</form>
											</div>
												</td></tr>';
								}
								  ?></tbody>
								</table>
								 <?php mysqli_close($connector); ?>
								 </div>
								 </div>
								</div>
								</div>
								</div>
				</section>
	</body>
</html>

