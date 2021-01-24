<!DOCTYPE HTML>
<html>
	<head>
		<title>student civil events</title>
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
									<div class="tabs">
									<div class="tab tab-1 flex flex-3 active">
								<?php
								$connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
								$sql="select eventname,name from azura_user where role='organizer' and branch='civil' and eventtype='technical'";
								$result=mysqli_query($connector,$sql) or die("failed to query database");
								?>
								<div class="table-wrapper">
      <table>
      <thead>
        <tr>
         <th><h4>Organizer Name</h4></th>
		<th><h4>Event Name</h4></th>
		<th><h4>Participate</h4></th>
		<th><h4>View Event</h4></th>
        </tr>
      </thead>
      <tbody>
     <?php  
	while( $row = mysqli_fetch_array($result))
	{
		echo "<tr><td>$row[1]</td><td>$row[0]</td>";
		$event=$row['eventname'];
		$organizername=$row['name'];
		$email=$_SESSION['email'];
	    echo "<td><form method='post' action='events.php?event=".$event."&organizername=".$organizername."&email=".$email."'>
		<input type='submit' name='submit' value='Participate'>
		</form></td>";
		echo "<td><form method='post' action='generic.php?id=".$row[0]."'>
		<input type='submit' name='submit' value='view'>
		</form></td></tr>";
	}
      ?></tbody>
    </table>
     <?php mysqli_close($connector); ?>
	 </div>
	 </div></div></div>

								</div>
				</section></div></div></div></div></section>
	</body>
</html>