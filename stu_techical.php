<!DOCTYPE HTML>
<html>
	<head>
		<title>student cse events</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
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
									<!-- Tab 1 -->
										<div class="tab tab-1 flex flex-3 active">
											<!-- Table -->
								
									<section class="wrapper style2">
					<div class="inner">
						<header>
						<h3>EVENT LIST</h3>
							</header>
						<!-- Tabbed Video Section -->
							<div class="flex flex-tabs">
								<ul class="tab-list">
									<li><a href="stu_cse.php" data-tab="tab-1">CSE</a></li>
									<li><a href="stu_ece.php" data-tab="tab-2">ECE</a></li>
									<li><a href="stu_eee.php" data-tab="tab-3">EEE</a></li>
									<li><a href="stu_civil.php" data-tab="tab-4">CIVIL</a></li>
									<li><a href="stu_mech.php" data-tab="tab-5">MECHANICAL</a></li>
									<li><a href="stu_mba.php" data-tab="tab-6">MBA</a></li>
									</ul>
									</div></div>
				</section></div></div></div></div></section>
	</body>
</html>