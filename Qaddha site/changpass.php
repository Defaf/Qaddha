<?php 
require("connect.php");
session_start();
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$up1=$_POST['pass'];
$up2=$_POST['pass2'];
$msg='';
$up1=md5($up1);
	$up2=md5($up2);
	$sql="SELECT * FROM user WHERE Uname='$user' and Upass='$up1'";
$res=mysqli_query($link,$sql);
if (mysqli_num_rows($res)==1){
	$sql2="UPDATE user SET Upass='$up2' WHERE Uname='$user'";
	if (mysqli_query($link,$sql2)){
         $msg="Done";
		header('location:profile.php?msg='.$msg.'');
	}
	else{
		echo 'error1';
	}
}
else{
	
	echo 'error2';
}







?>