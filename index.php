<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
	<title>니팜내팜 Login</title>
	<style>
		input[type="text"] {
		  margin-bottom: 0px;
		  border-bottom-left-radius: 0;
		  border-bottom-right-radius: 0;
		}

		input[type="password"] {
		 margin-bottom: 20px;
 		 border-top-left-radius: 0;
 		 border-top-right-radius: 0;
		}
		.form-control {
		  position: relative;
		  font-size: 16px;
		  height: auto;
		  padding: 10px;
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
		body {
			margin-left: 300px;
			margin-right: 300px;
			border:1px solid black;
		}
		table, td{
			font-size: 20px;
		}
		table {
			padding: 50px;
			padding-right: 130px;
			padding-left: 130px;
			border:1px solid black;
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
		img {
			padding-top: 10px;
		}
		form {
			padding-top: 30px;
			padding: 20px;
		}	
	</style>
</head>
<body>
<header>
	<img src="image/logo.png" height="150px" width="300px"></img>
</header>
<hr>
<form method="POST" action="login.php" id="form1">
<h1>스마트팜 체크리스트 점검 시스템</h1>
<table align="center"> 
         <tr>    
                <td width="50">ID </td>
                <td><input type="text" name="ID" class="form-control"></td>
         </tr>
         <tr>
                <td width="50">PW </td>
                <td><input type="password" name="PW" class="form-control"></td>
         </tr>
         <tr>
		<td></td>
                <td style="text-align:right;"><button type="submit" form="form1" id="button" formaction="login.php">Login</button></td>
         </td>
 </table>
 </form>
<hr>
<footer>
	<h3>미림타워 테헤란로 3층 니팜내팜</h3>
	<h3>채두걸 김승환 임정묵 손단비 장재훈</h3>
</footer>
 </body>
 </html>

