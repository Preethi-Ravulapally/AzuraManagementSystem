<!DOCTYPE HTML>
<html>
	<head>
		<title>student participate events</title>
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
								<li><a href="stu_access.php" data-tab="tab-1">DASHBOARD</a></li>
										<li><a href="stu_viewevents.php" data-tab="tab-7">VIEW EVENTS</a></li>
										<li><a href="stu_participate_events.php" data-tab="tab-7">REGISTERED EVENTS</a></li>
										<li><a href="stu_feedback.php" data-tab="tab-7">FILL FEEDBACK FORM</a></li>
										<li><a href="org_register.php" data-tab="tab-5">REGISTER AS ORGANIZER</a></li>
									</ul>
									<div class="tabs">
								<?php
								  $connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
								  $email=$_SESSION['email'];
								  $sql="select eventname from azura_user where role='student' and email='$email'";
								  $result=mysqli_query($connector,$sql) or die("failed to query database");
								  ?>
								  <div class="table-wrapper">
								  <table>
								  <thead>
									<tr>
									<th><h4>Event Name</h4></th>
									<th><h4>Organizer Name</h4></th>
									</tr>
								  </thead>
								  <tbody>
									 <?php  
									while( $row = mysqli_fetch_array($result))	
									{
										$sql2="select eventname,organizername from events where participant='$email'";
										$result2=mysqli_query($connector,$sql2) or die("failed to query database");
										while( $row2 = mysqli_fetch_array($result2))	
										{
										echo "<tr><td>$row2[0]</td><td>$row2[1]</td>";
										}
									}
						  ?>
						  </tbody>
						</table>
						<?php mysqli_close($connector); ?>
							</div>
							</div>
							</div>
						</div>
				</section>
	</body>
</html>