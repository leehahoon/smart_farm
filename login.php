<?php
	include("db_config.php");
	session_start();	
	$userid = mysqli_real_escape_string($connect,$_POST['ID']);
	$userpw = mysqli_real_escape_string($connect,$_POST['PW']);
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$query = "SELECT * FROM User WHERE id='$userid' AND pw='$userpw'";	
		$result = mysqli_query($connect, $query);
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		if($count == 1) {
         		$_SESSION['login_user'] = $userid;
         
         		header("location: farm_config.php");
      		}
		
		else {
               		echo "<script>alert('잘못된 ID 또는 Password 입니다.');";
                	echo "location.href='./index.php';</script>;";
      		}	
	}

	mysqli_free_result($result);

	mysqli_close($connect);
?>
