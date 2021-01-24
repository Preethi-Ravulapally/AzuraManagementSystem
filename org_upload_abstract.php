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

	$fileExt=explode('.',$filename);
	$fileactualExt = strtolower(end($fileExt));
	$msg="";
	$allowed=array('docx','txt');

	//connect to database
	$db = mysqli_connect("localhost","root","","azura");
   
    $filedestination='uploads/'.basename($filename);
    if(in_array($fileactualExt,$allowed)) 
	{
		if($fileerror === 0)
		{
			if($filesize < 100000000000000000) 
			{
				//$filenamenew = uniqid('',true).".".$fileactualExt;
				
				if(move_uploaded_file($filetmpname,$filedestination)){
					$msg="uploaded succesfully";
					$sql="update azura_user set eventabstract='$filename' where role='organizer' and email='".$email."'";
					mysqli_query($db,$sql);//stores the submitted data into the database
					echo "<script>alert('Abstract Uploaded successfully')</script>";
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
<!DOCTYPE HTML>
<html>
	<head>
		<title>Organizer Upload abstract</title>
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
									<h3>UPLOAD EVENT ABSTRACT</h3>
								<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#"  enctype="multipart/form-data">
								<div class="table-wrapper">
								<table><tr><td>
										<td><label><h3>Event Abstract</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="file" name="file" id="file" required="required" value="" placeholder="Event Abstract" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="Upload" />
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

