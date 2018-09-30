<?php
    session_start();
	require 'C:\xampp\htdocs\login\dbconfig\config.php';
?>
<!DOCTYPE html>
<head>
<title>Signups</title>
<link rel="stylesheet" type="text/css" href="styleups.css">
<meta name="viewport" content="width=device-width initial scale=1">
</head>
<body>
	<div class="box">
	    <fieldset>
		<legend><h2>Register</h2></legend>	
		<form class="myform" action="signups.php" method="post">	
		<div class="in-box">
		<b>Email</b><input type="text" name="email" value="" required="required"/></div>
		
		<div class="in-box">
		
			<b>Password:</b><input type="password" name="pass" value="" required="required"/>		
		</div>
		
		<div class="in-box">
			<b>Repeat Password:</b><input type="password" name="pass-repeat" value="" required="required"/>		
		</div>
		
		<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <input type="submit" name="submit_btn" value="submit"/>
		 <div class="z">    
       <p>Already have an account? <a href="login.html">Sign in</a>.</p>
       </div>
       </fieldset>
		</form>	
		<?php
		   if(isset($_POST['submit_btn']))
		   {
			  //echo'<script type="text/javascript"> alert("Sign In button clicked")</script>';		 
              
               $email= $_POST['email'];			
               $pass= $_POST['pass'];			   
			   $pass_repeat= $_POST['pass'];
			   
			   if($pass==$pass_repeat)
			   {
				   $query= "select * from user WHERE email='$email'";
				   $query_run = mysqli_query($con,$query);
				   
				   if(mysqli_num_rows($query_run)>0)
				   {
					   //there is already a user with the same email
					   echo '<script type="text/javascript"> alert("Email already exists.. try another email") </script>';
				   }
				   else
				   {
					 $query= "insert into  user values('$email',$pass')";
                     $query_run = mysqli_query($con,$query);
                     
                      if($query_run)
                      {
						  echo '<script type="text/javascript"> alert("email") </script>';
					  }
                       else
					   {
                         echo '<script type="text/javascript"> alert("Error!") </script>';						   
					  }						  
				   }
			   }
			   else{
				   echo'<script type="text/javascript"> alert("Password and repeat password doesnot match!") </script>';
			     }
			}
		?>
	</div>
</body>
