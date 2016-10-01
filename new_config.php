<?php
	include('session.php');
	include('db_config.php');
	$num=4;
	if($_POST['Farm_Size']=="중규모")
		$num=3;
	
	else if($_POST['Farm_Size']=="소규모")
		$num=2;
	$query1="SELECT * FROM Check_Info WHERE idx like '1%' AND size<$num order by size asc";
	$result1 = mysqli_query($connect, $query1);
	$query2="SELECT * FROM Check_Info WHERE idx like '2%' AND size<$num order by size asc";
	$result2 = mysqli_query($connect, $query2);
	$query3="SELECT * FROM Check_Info WHERE idx like '3%' AND size<$num order by size asc";
	$result3 = mysqli_query($connect, $query3);
	$query4="SELECT * FROM Check_Info WHERE idx like '4%' AND size<$num order by size asc";
	$result4 = mysqli_query($connect, $query4);
	

?>

<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='nfnf.css' />
	<meta charset="utf-8">
	<title>농장 점검</title>
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
				<td><?php echo $_POST['Farm_Name']; ?></td>
			</tr>
			<tr>
				<td>점검날짜</td>
				<td><?php echo $_POST['Day']; ?></td>
			</tr>
			<tr>
				<td>농장규모</td>
				<td><?php echo $_POST['Farm_Size'];?></td>
			</tr>
		</table><br>
		<table align="center">
			<tr>
				<th conspan="4">통제항목 대분류1</th>
			</tr>
			<tr>
				<td>세부내용</td>
				<td>Y</td>
				<td>P</td>
				<td>N</td>
			</tr>
			<?php
				while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
					echo "
					<tr>
					<td>$row[content]</td>
					<td><input type='radio' name='idx_$row[idx]' value='Y'></td>
					<td><input type='radio' name='idx_$row[idx]' value='P'></td>
					<td><input type='radio' name='idx_$row[idx]' value='N'></td>
					</tr>";
				}
			?>
		</table>
		<br>
		<table align="center">
			<tr>
				<th conspan="4">통제항목 대분류2</th>
			</tr>
			<tr>
				<td>세부내용</td>
				<td>Y</td>
				<td>P</td>
				<td>N</td>
			</tr>
			<?php
				while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
					echo "
					<tr>
					<td>$row[content]</td>
					<td><input type='radio' name='idx_$row[idx]' value='Y'></td>
					<td><input type='radio' name='idx_$row[idx]' value='P'></td>
					<td><input type='radio' name='idx_$row[idx]' value='N'></td>
					</tr>";
				}
			?>
		</table>
		<br>
		<table align="center">
			<tr>
				<th conspan="4">통제항목 대분류3</th>
			</tr>
			<tr>
				<td>세부내용</td>
				<td>Y</td>
				<td>P</td>
				<td>N</td>
			</tr>
			<?php
				while($row = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
					echo "
					<tr>
					<td>$row[content]</td>
					<td><input type='radio' name='idx_$row[idx]' value='Y'></td>
					<td><input type='radio' name='idx_$row[idx]' value='P'></td>
					<td><input type='radio' name='idx_$row[idx]' value='N'></td>
					</tr>";
				}
			?>
		</table>
		<br>
		<table align="center">
			<tr>
				<th conspan="4">통제항목 대분류4</th>
			</tr>
			<tr>
				<td>세부내용</td>
				<td>Y</td>
				<td>P</td>
				<td>N</td>
			</tr>
			<?php
				while($row = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
					echo "
					<tr>
					<td>$row[content]</td>
					<td><input type='radio' name='idx_$row[idx]' value='Y'></td>
					<td><input type='radio' name='idx_$row[idx]' value='P'></td>
					<td><input type='radio' name='idx_$row[idx]' value='N'></td>
					</tr>";
				}
			?>
		</table>
		<br>
			<center><button type="submit" form="form1" id="button" formaction="answer_save.php">검사완료</button></center>
	<?php
		$post_key = array_keys($_POST);
		for($i=0; $i<count($post_key); $i++){
			$value = addslashes($_POST[$post_key[$i]]);
			echo "<input type='hidden' name='{$post_key[$i]}' value='$value'>\n";
		}

	?>
	</form>
	<hr>
	<footer>
        <h3>미림타워 테헤란로 3층 니팜내팜</h3>
        <h3>채두걸 김승환 임정묵 손단비 장재훈</h3>
</footer>
</body>
</html>
