<?php
	$hostname = "localhost";
	$username = "root";
	$password = "best14##";
	$dbname = "smart_farm";

	$connect = new mysqli($hostname, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$query = "SELECT * FROM User";	
	$chk = false;
	$result = mysqli_query($connect, $query);

 	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
 		if(!(strcmp($_POST['ID'],$row['id'])) && !(strcmp($_POST['PW'],$row['pw']))){
			$chk = true;
			echo "<script>location.href='./index.php';</script>;";
 		}
  	
	}

	if(!$chk) {
		echo "<script>alert('잘못된 ID 또는 Password 입니다.');";
		echo "location.href='./index.php';</script>;";
	}
	mysqli_free_result($result);

	mysqli_close($connect);
?>
