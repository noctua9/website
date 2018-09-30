<?php 
    session_start();
    require 'C:\xampp\htdocs\login\login.php';
?>

<!DOCTYPE html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="style3.css">
<meta name="viewport" content="width=device-width initial scale=1">
</head>
<body>
	<div class="box">
	    <fieldset>
		<legend><h2>Login</h2></legend>	
		<form>	
		<div class="in-box">
		<b>Email:</b><input type="text" name="Email" value="" required="required"/>
				
		</div>
		<div class="in-box">
			<b>Password:</b><input type="password" name="pass" value="" required="required"/>		
		</div>
		<input type="submit" name="login" value="submit"/>
		<div style="text-align:center" >		
		<br><br>
		
		<a href="signup.html" text-decoration: "none" style="color:black" class="btn"><b>Sign up</b></a><br><br>
    
   
      <a href="#" style="color:black" class="btn"><b>Forgot password?</b></a>
		</div>      
      
		</fieldset>
		</form>	
		<?php
		if(isset($_POST['login']))
		{
			$Email=$_POST['email'];
			$pass=$_POST['password'];
			$query="select * from user WHERE email='$Email' AND password='$pass'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				$_SESSION['email']= $Email;
				header('location:
			}
			else
			{
				//invalid
				echo '<script type="text/javascript'> alert("Invalid credentials")</script>';
			}
		}
		?>
	</div>
</body>