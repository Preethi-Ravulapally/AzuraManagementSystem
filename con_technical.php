<!DOCTYPE HTML>
<html>
	<head>
		<title>Convener viewevents</title>
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
									<li><a href="con_cse.php" data-tab="tab-1">CSE</a></li>
									<li><a href="con_ece.php" data-tab="tab-2">ECE</a></li>
									<li><a href="con_eee.php" data-tab="tab-3">EEE</a></li>
									<li><a href="con_civil.php" data-tab="tab-4">CIVIL</a></li>
									<li><a href="con_mech.php" data-tab="tab-5">MECHANICAL</a></li>
									<li><a href="con_mba.php" data-tab="tab-6">MBA</a></li>
									</ul>
								<div class="tabs">

									<!-- Tab 1 -->
										<div class="tab tab-1 flex flex-3 active">
											<!-- Table -->
								
									    </div>
								</div>
				</section>
	</body>
</html>

