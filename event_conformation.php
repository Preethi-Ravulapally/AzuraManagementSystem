<?php
$id=$_GET['id'];
 $connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
if($id=="accept"){
		//$email = 'rkpapreethi4@gmail.com,anuradha.inani08@gmail.com,magi123meghana@gmail.com';
		//$sunject = 'the subject';
		//$messahe = 'hello';
		//$headers = 'From: azuraproject123@gmail.com'."\r\n".
		//'Reply-To: azuraproject123@gmail' ."\r\n";
		//mail($email,$subject,$message,$headers);
		echo "<script>alert('Accepted successfully')</script>";
}
if($id=="reject"){
		$eventname=$_GET['eventname'];
		$myquery="DELETE from azura_user where role='organizer' and eventname='$eventname'";
		$r=mysqli_query($connector,$myquery) or die("failed to query database");
		echo "<script>alert('Rejected successfully')</script>";
	}
?>