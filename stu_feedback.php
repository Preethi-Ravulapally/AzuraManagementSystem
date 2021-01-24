<?php
session_start();
if(isset($_POST['submit']))
{
$connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
$email=$_SESSION['email'];
$eventname=$_POST['eventname'];
$feedback=$_POST['feedback'];
$rating=$_POST['rating'];
$organizer=mysqli_query($connector,"select name from azura_user where eventname='$eventname' and role='organizer'") or die("failed to query database");
while( $row = mysqli_fetch_array($organizer))
	{
	$org=$row['name'];
	$sql="insert into feedbackform(email,organizer,eventname,feedback,rating) values ('$email','$org','$eventname','$feedback','$rating')";
$result=mysqli_query($connector,$sql) or die("failed to query database");
	}
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>student feedback</title>
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
								<li><a href="stu_access.php" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="stu_viewevents.php" data-tab="tab-2">VIEW EVENTS</a></li>
									<li><a href="stu_participate_events.php" data-tab="tab-3">REGISTERED EVENTS</a></li>
									<li><a href="stu_feedback.php" data-tab="tab-7">FILL FEEDBACK FORM</a></li>
									<li><a href="org_register.php" data-tab="tab-5">REGISTER AS ORGANIZER</a></li>
									</ul>
								<div class="tabs">
											<h3>FILL FEEDBACK FORM</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#" onsubmit="alert('feedback submitted successfully')">
								<div class="table-wrapper">
								<table><tr><td>
								        <label><h3>Event Name</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="eventname" id="eventname"required="required" value="" placeholder="Event Name" />
										</div></td></tr>
										<tr>
										<td><label><h3>Feed Back</h3></label></td>
										<td>
										<div class="12u$">
											<textarea name="feedback" id="feedback" required="required" placeholder="Enter Feed Back" rows="6"></textarea>
										</div>
										</td>
										</tr>
										<tr><td>
								        <label><h3>Rating</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											 <input type="radio" id="1" name="rating" value="Excellent" >
											<label for="1" value="Excellent">Excellent</label>
											<input type="radio" id="2" name="rating" value="Good">
											<label for="2" value="Good">Good</label>
											<input type="radio" id="3" name="rating" value="Not Bad">
											<label for="3" value="Not Bad">Not Bad</label>
											<input type="radio" id="4" name="rating" value="Poor">
											<label for="4" value="Poor">Poor</label>
										</div></td></tr>
										</table>
										<div class="12u$">
											
												<input type="submit" name="submit" value="submit" />
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

