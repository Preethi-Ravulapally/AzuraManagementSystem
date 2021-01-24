<?php
	$connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
	$event=$_GET['event'];
	$organizername=$_GET['organizername'];
	$email=$_GET['email'];
	$myquery="insert into events(eventname,organizername,participant) values ('$event','$organizername','$email')";
	$r=mysqli_query($connector,$myquery) or die("failed to query database");
	echo "<script>alert('Registered Successfully')</script>";
	$email   = 'rkpapreethi4@gmail.com,anuradha.inani08@gmail.com,magi123meghana@gmail.com';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: azuraproject123@gmail.com' . "\r\n" .
	'Reply-To: azuraproject123@gmail' . "\r\n" ;
	//'X-Mailer: PHP/' . phpversion();
	mail($email, $subject, $message, $headers);
	//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>