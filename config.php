<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>농장 환경설정</title>
	<style>
		body {
			margin-left: 300px;
            margin-right: 300px;
            border:1px solid black;
		}
		input[type="text"] {
			margin-bottom: 0px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
		}
		.form-control {
			position: relative;
			font-size: 16px;
			height: auto;
			padding: 10px;
        }
        h1,h3 {
			text-align: center;
		}
		h3 {
			border: 1px solid black;
			margin : 50px;
			margin-left: 100px;
			margin-right: 100px;
		}
		table, td{
			font-size: 17px;
			padding: 8px;
		}
		table {
			padding: 20px;
			padding-right: 130px;
			padding-left: 130px;
			border:1px solid black;
        }
        img {
			padding-top: 10px;
        }
        form {
        	padding-top: 30px;
        	padding: 20px;
        }
		#button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
    
        }
	</style>
</head>
<body>
	<header>
		<img src="image/logo.png" height="150px" width="300px"></img>
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
				<td><input type="radio" name="Farm_Size" class="form-control" value="Big"></td>
			</tr>
			<tr>
				<td>중규모</td>
				<td><input type="radio" name="Farm_Size" class="form-control" value="Medium"></td>
			</tr>
			<tr>
				<td>소규모</td>
				<td><input type="radio" name="Farm_Size" class="form-control" value="Small"></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right;"><button type="submit" form="form1" id="button" formaction="index.php">Next</button></td>
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
