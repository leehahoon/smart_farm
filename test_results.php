<?php
	error_reporting(E_ALL);
	ini_set("display_errors","on");
	include("session.php");
	include("db_config.php");
	$name=$_POST['Farm_Name'];
	$day=$_POST['Day'];
	$size=$_POST['Farm_Size'];
		
	$query = "SELECT * FROM Answer_Info WHERE name='$name' and day='$day' and size='$size';";
	$connect->query("set names utf8");
	$result = mysqli_query($connect, $query);
	$info = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$query = "SELECT * FROM Idx_Num WHERE name='$size';";
	$result = mysqli_query($connect, $query);
	$num = mysqli_fetch_array($result,MYSQLI_ASSOC);
	for($i=1;$i<=4;$i++)
	{
		for($j=0;$j<3;$j++)
			$testresult[$i][$j]=0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='nfnf.css' />
	<link rel="stylesheet" type="text/css" href="Graph.css"/>
	<script src="http://d3js.org/d3.v3.min.js"></script>
	<script src="RadarChart.js"></script>
	<style>
		body {
		  margin: 0;
		  font-size: 14px;
		  font-family: "Helvetica Neue", Helvetica;
		}
	
		#chart {
		}
	</style>
	<meta charset="utf-8">
	<title>점검 결과</title>
</head>
<body>
	<header>
		<img src="image/logo.png" height="150px" width="300px"></img>
		<hr>
		<?php  echo "<h2 align='right'>".$_SESSION['login_user'];?>
		 | <a href="logout.php">Logout</a></h2>
	</header>
	<hr>
	<table align="center">
		<tr>
			<td>점검 결과</td>
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
	</table>
	<table align="center" width="80%">
		<tr>
			<td>그래프</td>
		</tr>
		<tr>
			<td>
				<table align="center" width="70%">
					<tr><td>대단원</td><td>Y</td><td>P</td><td>N</td></tr>
<?php
for($i=1;$i<=4;$i++)
{
	echo "<tr><td>".$i."</td>";
	for($j=11;$j<=13;$j++){
		switch($info["idx_".$i.$j]){
		case 'Y':
			$testresult[$i][0]++;
			break;
		case 'N':
			$testresult[$i][1]++;
			break;
		case 'P':
			$testresult[$i][2]++;;
			break;
		}
	}
	echo "<td>".$testresult[$i][0]."</td><td>".$testresult[$i][2]."</td><td>".$testresult[$i][1]."</td></tr>";
}
?>
				</table>
			</td>
		</tr>	
		<tr>
			<td>
				<body marginwidth="0" marginheight="0">
					<div id="body">
						<div id="chart"></div>
					</div>
				</body>
			</td>
		</tr>
	</table>
				<script>
var d = [
		  [
<?php
for($i=1;$i<=4;$i++)
{
	echo "{axis:\"".$i."\",value:".round($testresult[$i][0]/$num["idx_".$i],2)."}";
	if($i!=4)
		echo ",";
}
?>
		],[
<?php
for($i=1;$i<=4;$i++)
{
	echo "{axis:\"".$i."\",value:".round($testresult[$i][1]/$num["idx_".$i],2)."}";
	if($i!=4)
		echo ",";
}
?>
		  
]
		];

				</script>
				<script type="text/javascript" src="script.js"></script>

	<table align="center" width="80%">
		<tr>
			<td><h1>총평</h1></td>
		</tr>
		<tr>
			<td>그렇다고 합니다.</td>
		</tr>	
	</table>	
	<hr>
	<footer>
        	<h3>미림타워 테헤란로 3층 니팜내팜</h3>
        	<h3>채두걸 김승환 임정묵 손단비 장재훈</h3>
	</footer>
</body>
</html>	
