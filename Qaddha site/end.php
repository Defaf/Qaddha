<?php
require 'connect.php';
session_start();

if(isset($_GET['id'])){
	$sql="UPDATE task SET Tstatus=1 WHERE Tid='$_GET[id]'";

if(mysqli_query($link,$sql)){
	header("location:taskpage.php?id=".$_SESSION['gid']."");
}
else{
	echo "error2";
}

}
else{
	echo "error";
}


?>