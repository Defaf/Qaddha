<?php
require 'connect.php';
session_start();
if (isset($_GET['id'])){

	$sql="DELETE FROM task WHERE Tid='$_GET[id]'";
	if (mysqli_query($link,$sql)){
		header("location:profile.php");
	}
	else{
		echo "error";
	}
}

else if (isset($_GET['id_g'])){
	$sql="DELETE FROM goal WHERE Gid='$_GET[id_g]'";
	if (mysqli_query($link,$sql)){
		header("location:profile.php");
	}
	else{
		echo "error";
	}
}
?>