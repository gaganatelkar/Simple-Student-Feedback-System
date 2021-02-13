<?php
function alert($msg){
	echo"<script type='text/javascript'>alert('$msg');</script>";
}

$conn=mysqli_connect('localhost','root','','feedback') or die("unable to connect");
//$sql=mysql_select_db('shopping',$conn) or die("unable database");
$name=$_POST['name'];
$pas=$_POST['pwd'];
$cn=$_POST['pwd1'];
if($pas==$cn)
{
		$r="Insert into login values('$name','$pas')";
		$result=mysqli_query($conn,$r);
		if($result)
		{
		echo "Inserted".$result;
		}
}
		else
		{
						
			echo '<script type="text/javascript">';
			echo 'alert("Password not Same...")';
			echo '</script>';
		
	    }
		
	

	echo "<a href='login.html'>Click to Go Home Page</a>;"





?>