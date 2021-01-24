<!DOCTYPE HTML>
<html>
	<head>
		<title>student view events</title>
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
										<li><a href="stu_feedback.php" data-tab="tab-4">FILL FEEDBACK FORM</a></li>
										<li><a href="org_register.php" data-tab="tab-5">REGISTER AS ORGANIZER</a></li>
									</ul>
								<div class="tabs">
									<section class="wrapper style2">
									<div class="inner">
									<header>
									<h3>EVENT LIST</h3>
									</header>
						<!-- Tabbed Video Section -->
							<div class="flex flex-tabs">
								<ul class="tab-list">
									<li><a href="stu_technical.php" data-tab="tab-6">TECHNICAL EVENT</a></li>
									<li><a href="stu_nontechnical.php" data-tab="tab-7">NON TECHNICAL EVENT</a></li>
									</ul>

							</div>
								</div>
				</section>
				</div>
				</div>
				</div>
				</section>
	</body>
</html>

