<?php
	include('db_config.php');
	session_start();
	if(!isset($_SESSION['login_user'])){
		header("location:index.php");
	}
	$user_check = $_SESSION['login_user'];
	$sql = mysqli_query($connect,"SELECT id FROM User WHERE id='$user_check'");
	$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
	$login_session = $row['id'];
	if(!isset($_SESSION['login_user'])){
     		header("location:index.php");
	}
?>
