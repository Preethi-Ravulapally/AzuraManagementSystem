<!DOCTYPE HTML>
<?php
session_start();
if(isset($_POST['submit'])){
	//connect to database
	$db=mysqli_connect("localhost","root","","azura");
	
	$email='admin@gmail.com';
	$photo = $_FILES['posterfile'];
$photoname = $_FILES['posterfile']['name'];
echo $photoname;
$phototmpname = $_FILES['posterfile']['tmp_name'];
$photoerror = $_FILES['posterfile']['error'];
$phototype = $_FILES['posterfile']['type'];
$photosize = $_FILES['posterfile']['size'];

$photoExt=explode('.',$photoname);
$photoactualExt = strtolower(end($photoExt));
	
	$photoallowed=array('jpg','jpeg','png');

	
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dob = $_POST['Dob'];
	$phoneno = $_POST['phonenumber'];
	$branch = $_POST['branch'];
	$designation = $_POST['Designation'];
	$acheivement = $_POST['Achievements'];
	
	
	//$sql="INSERT INTO azura_user (email,firstname,lastname,dob,phoneno,branch,designation,achievements) VALUES ('$email','$firstname','$lastname','$dob','$phoneno','$branch','$designation','$acheivement')";
	
	$sql="update azura_user set firstname='$firstname',lastname='$lastname',dob='$dob',phoneno='$phoneno',branch='$branch',designation='$designation',achievements='$acheivement',photo='$photoname' where email='".$email."'";
	mysqli_query($db,$sql);//stores the submitted data into the database
	$filedestination='uploads/'.basename($photoname);
    if(in_array($photoactualExt,$photoallowed)) 
	{
		if($photoerror === 0)
		{
			if($photosize < 100000000000000000) 
			{
				//$filenamenew = uniqid('',true).".".$fileactualExt;
				
				if(move_uploaded_file($phototmpname,$filedestination)){
					header("Location:admin_editprofile.php");
				}
			}
			else 
		    {
				echo "your file is too big.";
			}
		}
		else 
		{
				echo "there was an error uploading your file";
		}
	}
	else 
	{
        echo "you cannot upload files of this type.";
    }
}
	
			

?>
<html>
	<head>
		<title>Admin editprofile</title>
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
						<h3>WELCOME ADMIN</h3>
							</header>
							<div class="flex flex-tabs">
								<ul class="tab-list">
								<li><a href="admin_access.php" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="admin_add_con.php" data-tab="tab-2">ADD CONVENER</a></li>
									<li><a href="admin_delete_con.php" data-tab="tab-3">DELETE CONVENER</a></li>
									<li><a href="admin_viewconvener.php" data-tab="tab-4">VIEW CONVENER</a></li>
									<li><a href="admin_viewevents.php" data-tab="tab-7">VIEW EVENTS</a></li>
									<li><a href="admin_vieworganizers.php" data-tab="tab-8">VIEW ORGANIZERS</a></li>
									<li><a href="admin_editgallery.php" data-tab="tab-6">EDIT GALLERY</a></li>
									</ul>
								<div class="tabs">
									<!-- Tab 1 -->
									 <h3>EDIT PROFILE</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#" onsubmit="alert('Profile Updated Successfully')" enctype="multipart/form-data">
								<div class="table-wrapper">
								<table><tr><td>
								        <label><h3>First Name</h3></label></td>
										<td>
										<div class="6u$ 12u$()">
											<input type="text" name="firstname"  required="required" id="firstname" value="" placeholder="First Name" />
										</div></td></tr>
										<tr>
										<td><label><h3>Last Name</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="lastname"  required="required" id="lastname" value="" placeholder="Last Name" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Date Of Birth</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="date" name="Dob"  required="required" id="Dob" value="" placeholder="date of birth" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Phone number</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phonenumber"  required="required" id="phonenumber" value="" placeholder="Phone number" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Branch</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="branch"  required="required" id="branch" value="" placeholder="Branch" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Designation</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="Designation"  required="required" id="Designation" value="" placeholder="Designation" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Achievements</h3></label></td>
										<td>
										<div class="12u$">
											<textarea name="Achievements"  required="required" id="Achievements" placeholder="Enter Achievements" rows="6"></textarea>
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>UploadPic</h3></label></td>
										<td>
										<div class="12u$">
											<input type="file" id="file"  required="required" name="posterfile" placeholder="Uploadpic" ></textarea>
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
											
												<input type="submit" name="submit" value="Update" />
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

