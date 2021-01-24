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
									<div class="tab tab-1 flex flex-3 active">
											<!-- Table -->
								<div class="table-wrapper">
								<?php
								  $connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
								  $eventname=$_GET['eventname'];
								  $sql="select name,rollno,branch,phoneno,college from azura_user where role='student' and eventname='$eventname'";
								  $result=mysqli_query($connector,$sql) or die("failed to query database");
								  ?>
								  <div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th><h4>Participant Name</h4></th>
												<th><h4>Rollno</h4></th>
												<th><h4>Branch</h4></th>
												<th><h4>Phone no</h4></th>
												<th><h4>College</h4></th>
											</tr>
										</thead>
								  <tbody>
								 <?php  
								 if(!$result){
								while( $row = mysqli_fetch_array($result))
								{
									echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
								}
								}
								
								  ?></tbody>
								</table>
								 <?php mysqli_close($connector); ?>
								 </div>
								 </div>
								</div>
								</div>
								</div>
								</div>
				</section>
	</body>
</html>

