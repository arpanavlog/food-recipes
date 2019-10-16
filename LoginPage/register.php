<?php
	session_start();
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Page</title>
            <link rel="stylesheet" href="css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
            <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
<body>
	<header>
		<div id="main-saver">

		<ul class="main-sav animated slideInDown"  id="check-class">
        <li><a href="../responsible Home/index.php">Back</a></li></ul>
        <br>
        <a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>

		</div>


	<div id="main-wrapper">
	<center><h2><span class="colorchange"><font size="7">Registration Form</font></h2></center>
		<form action="register.php" method="post">
			<div class="imgcontainer">
				<img src="image/NoProfile-Chef.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b><font size="5">Username</font></b></label>
				<input type="text" placeholder="Enter Username" name="username" required>

				<label><b><font size="5">Password</font></b></label>
				<input type="password" placeholder="********" name="password" required>

				<label><b><font size="5">Confirm Password</font></b></label>
				<input type="password" placeholder="********" name="cpassword" required>

				<button name="register" class="btn sign_up_btn" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="btn back_btn">Back</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				
				if($password==$cpassword)
				{
				
					$query = "select * from user WHERE username='$username'";
					
				    $query_run = mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into user values('$username','$password')";

							$query_run = mysqli_query($con, $query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: homepage.php");
							}
							else
							
					        {
						        echo '<script type="text/javascript">alert(" Error!")</script>';
					        }
				        }
				
				
			    }
			    else{
			    	  echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';

			    }
			}

			
		?>
	</div>

</header>


<script type="text/javascript">
      	
          function slideshow(){
              var x = document.getElementById('check-class');
              if (x.style.display === "none"){
              	  x.style.display="block";
              }else{
              	  x.style.display="none";
              }
          }

      </script>

</body>
</html>