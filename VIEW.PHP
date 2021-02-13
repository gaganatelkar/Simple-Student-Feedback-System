<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
</head>
<body>
	<?php
			
	
				//$snam=$_POST["snam"];
				//$fid=$_POST["fid"];
				//$f1=$_POST["f1"];
				//$f2=$_POST["f2"];
				//$f3=$_POST["f3"];
				//$f4=$_POST["f4"];
				//$f5=$_POST["f5"];
				//$f6=$_POST["f6"];
				//$f7=$_POST["f7"];
				//$f8=$_POST["f8"];
			    //$com=$_POST["f9"];
				//$fb_data=array();
				$con=mysqli_connect('localhost','root','','feedback');
				//$sql1="insert into fb values('$snam','$fid','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$com')";
				//mysqli_query($con,$sql1);
				//echo "inserted";
				$sql2="select * from fb";
				$res=mysqli_query($con,$sql2);
				$flag=0;
				$cnt=0;
				while($row=mysqli_fetch_array($res))
				{
					$fb_data[$cnt][0]=$row['snam'];
$fb_data[$cnt][1]=$row['fid'];
$fb_data[$cnt][2]=$row['f1'];
$fb_data[$cnt][3]=$row['f2'];
$fb_data[$cnt][4]=$row['f3'];
$fb_data[$cnt][5]=$row['f4'];
$fb_data[$cnt][6]=$row['f5'];
$fb_data[$cnt][7]=$row['f6'];
$fb_data[$cnt][8]=$row['f7'];
$fb_data[$cnt][9]=$row['f8'];
$fb_data[$cnt][10]=$row['com'];

++$cnt;
				}
				echo "<table border><tr><th>student name<th>Faculty Name<th>f1<th>f2<th>f3<th>f4<th>f5<th>f6<th>f7<th>f8<th>f9</tr>";
for($j=0;$j<$cnt;$j++)
{
$snam=$fb_data[$j][0];
$fid=$fb_data[$j][1];
$f1=$fb_data[$j][2];
$f2=$fb_data[$j][3];
$f3=$fb_data[$j][4];
$f4=$fb_data[$j][5];
$f5=$fb_data[$j][6];
$f6=$fb_data[$j][7];
$f7=$fb_data[$j][8];
$f8=$fb_data[$j][9];
$f9=$fb_data[$j][10];
echo "<tr><td>$snam</td><td>$fid</td><td>$f1</td><td>$f2</td><td>$f3</td><td>$f4</td><td>$f5</td><td>$f6</td><td>$f7</td><td>$f8</td><td>$f9</td></tr>";
}


			
				echo "FEEDBACK GIVEN BY A STUDENT";
				mysqli_close($con);


?>
</body>
</html>