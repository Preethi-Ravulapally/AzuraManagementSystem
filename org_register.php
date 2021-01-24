<?php
session_start();
if(isset($_POST['submit'])){
	//connect to database
	$email=$_SESSION['email'];
	$file = $_FILES['file'];
	$filename = $_FILES['file']['name'];
	$filetmpname = $_FILES['file']['tmp_name'];
	$fileerror = $_FILES['file']['error'];
	$filetype = $_FILES['file']['type'];
	$filesize = $_FILES['file']['size'];

	$role='organizer';
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$password=$_POST['password'];
	$college='cmrcet';
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$branch=$_POST['branch'];
	$eventname=$_POST['eventname'];
	$eventtype=$_POST['eventtype'];

	$fileExt=explode('.',$filename);
	$fileactualExt = strtolower(end($fileExt));
	$msg="";
	$allowed=array('txt','docx');

	//connect to database
	$db = mysqli_connect("localhost","root","","azura");
    $filedestination='AbstractUploads/'.basename($filename);
    if(in_array($fileactualExt,$allowed)) 
	{
		if($fileerror === 0)
		{
			if($filesize < 100000000000000000) 
			{
				//$filenamenew = uniqid('',true).".".$fileactualExt;
				
				if(move_uploaded_file($filetmpname,$filedestination)){
					$msg="uploaded succesfully";
					$sql="INSERT INTO azura_user (role,email,password,name,rollno,branch,college,phoneno,eventname,eventabstract,eventtype) VALUES ('$role','$email','$password','$name','$rollno','$branch','$college','$phoneno','$eventname','$filename','$eventtype')";
					mysqli_query($db,$sql);//stores the submitted data into the database
					echo "<script>alert('Registered as Organizer successfully')</script>";
				}
			}
			else 
		    {
				echo "<script>alert('your file is too big.')</script>";
			}
		}
		else 
		{
				echo "<script>alert('there was an error uploading your file')</script>";
		}
	}
	else 
	{
        echo "<script>alert('you cannot upload files of this type.')</script>";
    }
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Organizer Register</title>
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
									<li><a href="org_register.php" data-tab="tab-7">REGISTER AS ORGANIZER</a></li>
									</ul>
								<div class="tabs">
									<!-- Tab 1 -->
									
											<div class="box alt">
									    <h3>REGISTER AS ORGANIZER</h3>
								<center>
								<form method="post" action="#" onsubmit="return validate(this);"  enctype="multipart/form-data">
								<div class="table-wrapper">
								<table><tr><td>
								        <label><h3>Username</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="name" required="required" id="name" value="" placeholder="Username" />
										</div></td></tr>
										<tr><td>
								        <label><h3>Roll No</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="rollno" required="required" pattern="[0-9]{1}+[0-9]{1}+H51A0+[12345]{1}+[a-zA-Z0-9]{1}+[0-9]{1}" id="rollno" value="" placeholder="Roll No" />
										</div></td></tr>
										<tr>
										<td><label><h3>Password</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="password" required="required" pattern=".{6,}" id="password" value="" placeholder="Password" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Confirm Password</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="conpassword" required="required" id="conpassword" pattern=".{6,}" value="" placeholder="Confirm Password" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Email</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" required="required" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="" placeholder="Email" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Phone number</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phoneno" required="required" id="phoneno" pattern="[0-9]{10}" value="" placeholder="Phone number" />
										</div>
										</td>
										</tr>
										<tr><td>
								        <label><h3>Branch</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="branch" id="branch">
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
										<td><label><h3>Event name</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="eventname" required="required" id="eventname" value="" placeholder="Event Name" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Event Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="file" required="required" id="file" value="" placeholder="Event Abstract" />
										</div>
										</td>
										</tr>
										<tr><td>
								        <label><h3>Event Type</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="eventtype" id="eventtype">
													<option value="technical">Technical</option>
													<option value="nontechnical">Non Technical</option>
												</select>
											</div>
										</div></td></tr>
										<tr><td>
								        <label><h3>College</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="college" id="college">
													<option value="cmrcet">CMRCET</option>
												</select>
											</div>
										</div></td></tr>
										</table>
										<div class="12u$">
											
												<input type="submit" name="submit" value="submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
											
										</div>
								</form>
								<hr />
							</center>
						  </div>
	
										
				</section>
	</body>
</html>

