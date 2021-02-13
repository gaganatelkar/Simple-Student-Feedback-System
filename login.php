<?php
$conn=mysqli_connect('localhost','root','','feedback') or die("unable to connect");
$nam=$_POST['username'];
$pas=$_POST['password'];
$sql="select * from login";
$result2=mysqli_query($conn,$sql);
$flag=0;
	while($row=mysqli_fetch_array($result2))
	{
		
		
			if($row["name"]==$nam && $row["pwd"]==$pas)
			{
			$flag=1;
			header("Location:/Feedback System/index.php");
			
			}
	}
					
		    				
		                echo '<script type="text/javascript">';
						echo 'alert("User not Found...")';
						echo '</script>';
					
			
	
		    
	
	echo "<a href='login.html'>Click to Go Home Page</a>;"
?>