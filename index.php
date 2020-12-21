
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
     
            
            <form  action="login.php" method="post">
            <div class="container">
            <div class="para"> 
               <h2>LOGIN</h2>
               <h4>Please enter your registered details<h4>
    <hr>
</div>    
                
     	<br>
     	<label>Email Id</label>
     	<input type="text" name="uname" class="input" placeholder="Enter your email"><br><br>

     	<label>Password</label>
     	<input type="password" name="password" class="input" placeholder="Password"><br><br>

     	<button type="submit" class="registerbtn">Login</button>
     </div>    
     <div class="container signin">
        <h3>If not Registered?<a href="register.php">register</a><h3>
</div>
     </form>
</body>
</html>
