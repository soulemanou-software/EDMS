<?php
include "../config\connection.php";
session_start();
if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['text_zone'];

	$sql="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($connection3,$sql);
	if($query)
	{
		header('Location: ../message\index.php');
	}
	else
	{
		echo "Something went wrong";
	}

	}
?>
