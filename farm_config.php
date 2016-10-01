<?php
	include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='nfnf.css' />
	<meta charset="utf-8">
	<title>농장 환경설정</title>
</head>
<body>
	<header>
		<img src="image/logo.png" height="150px" width="300px"></img>
		<hr>
		<?php  echo "<h2 align='right'>".$_SESSION['login_user'];?>
		 | <a href="logout.php">Logout</a></h2>
	</header>
	<hr>
	<form method="POST" action="new_check" id="form1">
		<table align="center">
			<tr>
				<td>농장명</td>
				<td><input type="text" name="Farm_Name" class="form-control"></td>
			</tr>
			<tr>
				<td>점검날짜</td>
				<td><input type="text" name="Day" class="form-control" placeholder="2016-00-00"></td>
			</tr>
			<tr>
				<td>농장규모</td>
				<td><br></td>
			</tr>
			<tr>
				<td>대규모</td>
				<td><input type="radio" name="Farm_Size" class="form-control" value="대규모"></td>
			</tr>
			<tr>
				<td>중규모</td>
				<td><input type="radio" name="Farm_Size" class="form-control" value="중규모"></td>
			</tr>
			<tr>
				<td>소규모</td>
				<td><input type="radio" name="Farm_Size" class="form-control" value="소규모"></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right;"><button type="submit" form="form1" id="button" formaction="new_config.php">Next</button></td>
			</tr>
		</table>
	</form>
	<hr>
	<footer>
        <h3>미림타워 테헤란로 3층 니팜내팜</h3>
        <h3>채두걸 김승환 임정묵 손단비 장재훈</h3>
</footer>
</body>
</html>
