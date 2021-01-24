<?php
session_start();
if(isset($_POST['submit'])){
	//connect to database
	$db=mysqli_connect("localhost","root","","azura");
    
	$emailid=$_SESSION['email'];
	$role='organizer';
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$password='default';
	$college=$_POST['college'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$branch=$_POST['branch'];
	$s=mysqli_query($db,"select eventname,eventabstract,eventposter,eventvideo,eventtype from azura_user where role='organizer' and email='$emailid'");
	while($row = mysqli_fetch_array($s)){
		$eventname=$row['eventname'];
		$eventabstract=$row['eventabstract'];
		$eventposter=$row['eventposter'];
		$eventvideo=$row['eventvideo'];
		$eventtype=$row['eventtype'];
	$sql="INSERT INTO azura_user (role,email,password,name,rollno,branch,college,phoneno,eventname,eventabstract,eventposter,eventvideo,eventtype) VALUES ('$role','$email','$password','$name','$rollno','$branch','$college','$phoneno','$eventname','$eventabstract','$eventposter','$eventvideo','$eventtype')";
	mysqli_query($db,$sql);
	}
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Oranizer add SubOrganizer</title>
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
									<h3>ADD SUB ORGANIZER</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#" onsubmit="alert('Sub Organizer Registered Successfully')">
								<div class="table-wrapper">
								<table><tr><td>
								        <label><h3>Username</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="name" required="required" id="name" value="" placeholder="Username" />
										</div></td></tr>
										<tr>
										<td><label><h3>Roll No</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="rollno" required="required" pattern="[0-9]{1}+[0-9]{1}+H51A0+[12345]{1}+[a-zA-Z0-9]{1}+[0-9]{1}" id="rollno" value="" placeholder="Roll no" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Email</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" value="" placeholder="Email" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Phone number</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phoneno" pattern="[0-9]{10}" id="phoneno" required="required" value="" placeholder="Phone number" />
										</div>
										</td>
										</tr>
										<tr><td>
								        <label><h3>Branch</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="branch" id="branch" required="required" >
													<option value="cse">CSE</option>
													<option value="ece">ECE</option>
													<option value="eee">EEE</option>
													<option value="civil">CIVIL</option>
													<option value="mech">MECHANICAL</option>
													<option value="mba">MBA</option>
												</select>
											</div>
										</div></td></tr>
										<tr>
										<td><label><h3>College</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="college" required="required" id="college" value="" placeholder="College" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Add" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
							</center>
								</div>
				</section>
	</body>
</html>

