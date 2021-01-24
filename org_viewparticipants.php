	<!DOCTYPE HTML>
	<html>
		<head>
			<title>Organizer View Participants</title>
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
									<?php
									$connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
									 $email=$_SESSION['email'];
									 $sql2="select eventname from azura_user where role='organizer' and email='$email'";
									 $result2=mysqli_query($connector,$sql2) or die("failed to query database");
									 while( $row = mysqli_fetch_array($result2))
									{
										$sql1="select participant from events where eventname='$row[0]'";
										$result3=mysqli_query($connector,$sql1) or die("failed to query database");
										while($row3=mysqli_fetch_array($result3))
										$sql="select email,name,rollno,branch,phoneno,college from azura_user where email='$row3[0]' and role='student'";
										$result=mysqli_query($connector,$sql) or die("failed to query database");
								  ?>
								  <div class="table-wrapper">
								  <table>
								  <thead>
									<tr>
									<th><h4>Participant email</h4></th>
									<th><h4>Participant Name</h4></th>
									<th><h4>Roll No</h4></th>
									<th><h4>Branch</h4></th>
									<th><h4>Phone No</h4></th>
									<th><h4>College</h4></th>
									</tr>
								  </thead>
								  <tbody>
								 <?php  
								while( $row2 = mysqli_fetch_array($result))
								{
									echo "<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td></tr>";
								}
								}
								?></tbody>
								</table>
								 <?php mysqli_close($connector); ?>
								 </div>
								<div>
								</div>
								</div>
					</section>
		</body>
	</html>