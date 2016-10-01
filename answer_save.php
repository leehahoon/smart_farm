<body onload='window.document.fc.submit()'>
<form name='fc' action='./test_results.php' method='post'>
<?php
	error_reporting(E_ALL);
	ini_set("display_errors","on");
	include("db_config.php");
	$name=$_POST['Farm_Name'];
	$day=$_POST['Day'];
	$size=$_POST['Farm_Size'];	
	if($size=="대규모")
	{
		$query = "INSERT INTO Answer_Info (name, day, size,";
		for($i=1;$i<=4;$i++)
		{
			for($j=11;$j<=13;$j++)
			{
				$query .= " idx_".$i.$j.",";
			}
		}
		$query = substr($query,0,-1);
		$query .= ") VALUES ('$name', '$day', '$size', ";
		for($i=1;$i<=4;$i++)
		{
			for($j=11;$j<=13;$j++)
			{
				$query .="'".$_POST["idx_".$i.$j]."',";
			}
		}
		$query = substr($query,0,-1);
		$query .= ")";
	}

        else if($size=="중규모")
        {   
                $query = "INSERT INTO Answer_Info (name, day, size,";
                for($i=1;$i<=4;$i++)
                {   
                        for($j=11;$j<=12;$j++)
                        {   
                                $query .= " idx_".$i.$j.",";
                        }   
                }   
                $query = substr($query,0,-1);
                $query .= ") VALUES ('$name', '$day', '$size', ";
                for($i=1;$i<=4;$i++)
                {   
                        for($j=11;$j<=12;$j++)
                        {   
                                $query .="'".$_POST["idx_".$i.$j]."',";
                        }   
                }   
                $query = substr($query,0,-1);
                $query .= ")";
        }   

        else
	{   
                $query = "INSERT INTO Answer_Info (name, day, size,";
                for($i=1;$i<=4;$i++)
                {   
                        for($j=11;$j<=11;$j++)
                        {   
                                $query .= " idx_".$i.$j.",";
                        }   
                }   
                $query = substr($query,0,-1);
                $query .= ") VALUES ('$name', '$day', '$size', ";
                for($i=1;$i<=4;$i++)
                {   
                        for($j=11;$j<=11;$j++)
                        {   
                                $query .="'".$_POST["idx_".$i.$j]."',";
                        }   
                }   
                $query = substr($query,0,-1);
                $query .= ")";
        }   

		

	$connect->query("set names utf8");
	mysqli_query($connect, $query);
	echo "<input name=Farm_Name type=hidden value='".$name."'>";
	echo "<input name=Day type=hidden value='".$day."'>";
	echo "<input name=Farm_Size type=hidden value='".$size."'>";
	 
?>
</form>
</body>
