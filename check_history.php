<?php
	include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='nfnf.css' />
	<meta charset="utf-8">
	<title>점검 이력</title>
</head>
<body>
	<header>
		<img src="image/logo.png" height="150px" width="300px"></img>
		<hr>
		<?php  echo "<h2 align='right'>".$_SESSION['login_user'];?>
		 | <a href="logout.php">Logout</a></h2>
	</header>
	<hr>
	<hr>
	<footer>
        	<h3>미림타워 테헤란로 3층 니팜내팜</h3>
        	<h3>채두걸 김승환 임정묵 손단비 장재훈</h3>
	</footer>
</body>
</html>	
