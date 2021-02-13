<?php
function alert($msg){
	echo"<script type='text/javascript'>alert('$msg');</script>";
}

$conn=mysqli_connect('localhost','root','','feedback') or die("unable to connect");
$name=$_POST['username'];
$pas=$_POST['password'];

		$r="Insert into hodlogin values('$name','$pas')";
		$result=mysqli_query($conn,$r);
		if($result)
		{
		echo "Inserted".$result;
		}
$sql="select * from hodlogin";
$result2=mysqli_query($conn,$sql);
$flag=0;
	while($row=mysqli_fetch_array($result2))
	{
		
		
			if($row["name"]==$name && $row["pass"]==$pas)
			{
			$flag=1;
			header("Location:/Feedback System/VIEW.PHP");
			}
			else
			{
				echo "not found";
			}
	}
			
						
		                
	
	







?>