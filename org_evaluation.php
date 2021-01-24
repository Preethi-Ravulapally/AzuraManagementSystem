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
								<li><a href="org_access.php" data-tab="tab-1">DASHBOARD</a></li>
									<li><a href="org_upload_abstract.php" data-tab="tab-2">UPLOAD ABSTRACT</a></li>
									<li><a href="org_upload_poster.php" data-tab="tab-3">UPLOAD POSTER</a></li>
									<li><a href="org_upload_video.php" data-tab="tab-7">UPLOAD VIDEO</a></li>
									<li><a href="org_suborganizer.php" data-tab="tab-1" >ADD SUBORGANIZER</a></li>
									<li><a href="org_evaluation.php" data-tab="tab-1" >EVALUATION PATTERN</a></li>
									<li><a href="org_scheduling.php" data-tab="tab-1" >EVENT SCHEDULING</a></li>
									<li><a href="org_viewparticipants.php" data-tab="tab-1" >VIEW PARTICIPANTS</a></li>
									</ul>
								<div class="tabs">
									<H3>EVALUATION PATTERN</H3>

								</div>
				</section>
	</body>
</html>

