<html>
    <head>
	    <title></title>
		<link rel="stylesheet" type="text/css" href="css/menu1.css"/>
		</head>
		
				
				
  <body>
			<?php
				include ('menu.php');
?>				
				<form action="samp.php" method="post">
				<center>
				<div class="about3">
				<p style="font-size:8px;margin-top:20px;">.</p>
				<h1><i>Give your feedback below</i></h1>
				</div>
			
				<table border="2">
				<tr>
				<th>Feedback description</th><th>Below Avg</th><th>Avg</th><th>Good</th><th>Very Good</th><th>Excellent</th>
				</tr>
				<tr><td>Punctuality in class</td><td><center><input type="radio" name="f1" id="f1" value="1" onclick="fn()"></td><td><center><input type="radio" name="f1" value="1" onclick="fn(2)"></td><td><center><input type="radio" name="f1" value="1"></td><td><center><input type="radio" name="f1" value="1"></td><td><center><input type="radio" name="f1" value="1"></td></tr>
				<tr><td>Knowledge of the subject</td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f2" value="1"></td><td><center><input type="radio" name="f2" value="1"></td></tr>
				<tr><td>Completes syllabus in time</td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td></tr>
				<tr><td>Grades fairly in internals</td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td></tr>
				<tr><td>Communicates effectively</td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td></tr>
				<tr><td>Conducting classroom discussion</td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td></tr>
				<tr><td>Ability to clear the doubts of the students</td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td></tr>
				<tr><td>Willingness to accept ideas from students</td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td><td><center><input type="radio" name="f" value="1"></td></tr>
				
				</table>
				
				<p><h2><i> Comments:  <textarea cols="40" rows="4" id="pos" >  </textarea></p>  <br>
				<div class="loginbox">
				<input type="submit" value="Submit" name="Submit">
				</div>
				</center>
				</form>
				
				<script>
				function fn()
				{
					//var a=document.getElementById("f1").value;
					var a=document.form.name.f1.value;
					
					window.alert("Your feedback has been recorded"+a);
					//window.alert("Thank You!!");
				}
				
				</script>
				
			
			
							
</body>
</html>			