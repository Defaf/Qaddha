<?php 
require 'connect.php';
session_start();
$user=$_SESSION['user'];
if (isset($_POST['subimg'])){
	if (isset($_FILES['fil'])){
     print_r($_FILES['fil']);
     $name=$_FILES['fil']['name'];
     $type=$_FILES['fil']['type'];
     $size=$_FILES['fil']['size'];
     $tem=$_FILES['fil']['tmp_name'];
     $avali=array('jpge','jpg','png');
   //  $exc=
     $ext=strtolower(end(explode(".", $name)));
     if (in_array($ext, $avali)){
move_uploaded_file($tem, "image/".$name);
$pa="image/".$name;
$sql="UPDATE user SET paths='$pa' WHERE Uname='$user'";
if (mysqli_query($link,$sql)){
	header('location:profile.php');
}
     }
     else{
     	echo "not image";
     }
	}
	else{
		echo "error about file ";
	}
}

if (isset($_POST['submit_image'])){
	if (isset($_FILES['files'])){
     print_r($_FILES['files']);
     $name=$_FILES['files']['name'];
     $type=$_FILES['files']['type'];
     $size=$_FILES['files']['size'];
     $tem=$_FILES['files']['tmp_name'];
     $avali=array('jpge','jpg','png','pdf');
   //  $exc=
     $ext=strtolower(end(explode(".", $name)));
     if (in_array($ext, $avali)){

//$pa="image/".$name;
//$sql="UPDATE user SET paths='$pa' WHERE Uname='$user'";
if (move_uploaded_file($tem, "file/".$user."".$name)){
	header('location:profile.php');
}
     }
     else{
     	echo "noy support ";
     }
	}
	else{
		echo "error about file ";
	}
}




?>