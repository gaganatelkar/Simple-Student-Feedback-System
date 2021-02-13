
	<?php
			
if(isset($_POST['Submit']))
{
try{
	
				$snam=$_POST["snam"];
				$fid=$_POST["fid"];
				$f1=$_POST["f1"];
				$f2=$_POST["f2"];
				$f3=$_POST["f3"];
				$f4=$_POST["f4"];
				$f5=$_POST["f5"];
				$f6=$_POST["f6"];
				$f7=$_POST["f7"];
				$f8=$_POST["f8"];
			    $com=$_POST["f9"];
				$con=mysqli_connect('localhost','root','','feedback');
				$sql1="insert into fb values('$snam','$fid','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$com')";
				mysqli_query($con,$sql1);
				echo "inserted";
				$sql2="select * from login";
				$res=mysqli_query($con,$sql2);
				$flag=0;
				while($row=mysqli_fetch_array($res))
				{
					//if($row["name"]==$snam)
					//{
						//$flag=1;
						//echo '<script type="text/javascript">';
						//echo 'alert("enter registered name please...")';
						//echo '</script>';
					//}
				}
				
				echo "<a href='menu1.html'>Click here to give another feedback</a>";
				mysqli_close($con);
}
catch(Exception $e)
{
	echo "db error";
}
}
			
				
		
if(isset($_POST['fnames']))
{
try
{
$fb_data=array();
$con = mysqli_connect('localhost' ,'root' ,'','feedback') or die("Error " . mysqli_error($con));
$sql="SELECT * from fb";
$result = mysqli_query($con,$sql);
$cnt=0;
while($row = mysqli_fetch_array( $result))
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
$fb_data[$cnt][10]=$row['f9'];

++$cnt;
}
echo "<table border><tr><th>student name<th>Faculty Name<th>f1<th>f2<th>f3<th>f4<th>f5<th>f6<th>f7<th>f8<th>f9<th>comments<th></tr>";
for($j=0;$j<$cnt;$j++)
{
$snam=$fb_data[$j][0];
$fid=$fb_data[$j][1];
$f1=$fb_name[$j][2];
$f2=$fb_name[$j][3];
$f3=$fb_name[$j][4];
$f4=$fb_name[$j][5];
$f5=$fb_name[$j][6];
$f6=$fb_name[$j][7];
$f7=$fb_name[$j][8];
$f8=$fb_name[$j][9];
$f9=$fb_name[$j][10];
echo "<tr><td>$snam</td><td>$fid</td><td>$f1</td><td>$f2</td><td>$f3</td><td>$f4</td><td>$f5</td><td>$f6</td><td>$f7</td><td>$f8</td><td>$f9</td></tr>";
}

echo "</table><a href=menu1.html>Go Back</a>";
}
catch(Exception $e)
{
	echo "db error";
}
}
?>