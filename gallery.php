<?php
session_start();

$galleryname=$_GET['name'];
$posterfile = $_FILES['posterfile'];
$posterfilename = $_FILES['posterfile']['name'];
echo $posterfilename;
$posterfiletmpname = $_FILES['posterfile']['tmp_name'];
$posterfileerror = $_FILES['posterfile']['error'];
$posterfiletype = $_FILES['posterfile']['type'];
$posterfilesize = $_FILES['posterfile']['size'];

$posterfileExt=explode('.',$posterfilename);
$posterfileactualExt = strtolower(end($posterfileExt));
	$msg="";
	$posterallowed=array('jpg','jpeg','png');


$abstractfile = $_FILES['abstractfile'];
$abstractfilename = $_FILES['abstractfile']['name'];
$abstractfiletmpname = $_FILES['abstractfile']['tmp_name'];
$abstractfileerror = $_FILES['abstractfile']['error'];
$abstractfiletype = $_FILES['abstractfile']['type'];
$abstractfilesize = $_FILES['abstractfile']['size'];

$abstractfileExt=explode('.',$abstractfilename);
$abstractfileactualExt = strtolower(end($abstractfileExt));
	
$abstractallowed=array('txt','docx','pdf');


	//connect to database
	$db = mysqli_connect("localhost","root","","azura");
   
    $posterfiledestination='GalleryUploads/'.basename($posterfilename);
	$abstractfiledestination='GalleryUploads/'.basename($abstractfilename);
    if(in_array($posterfileactualExt,$posterallowed) && in_array($abstractfileactualExt,$abstractallowed)) 
	{
		if($posterfileerror === 0 && $abstractfileerror === 0)
		{
			if($posterfilesize < 100000000000000000 && $abstractfilesize < 100000000000000000) 
			{
				//$filenamenew = uniqid('',true).".".$fileactualExt;
				
				if(move_uploaded_file($posterfiletmpname,$posterfiledestination) && move_uploaded_file($abstractfiletmpname,$abstractfiledestination)){
					$msg="uploaded succesfully";
					$sql="update gallery set galleryposter='$posterfilename',galleryabstract='$abstractfilename' where galleryname='$galleryname'";
					mysqli_query($db,$sql);//stores the submitted data into the database
					echo "<script>alert('Uploaded successfully')</script>";
					//header("Location: ".$_SERVER['HTTP_REFERER']."");
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

?>