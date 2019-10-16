<?php
	session_start();
	require_once('dbconfig/config.php');
?>

<!DOCTYPE html>
<html>
     <head>
        <title>Login Page</title>
            <link rel="stylesheet" href="css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
            <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
<body>
	<header>
		<br><br>
		<center>
		<marquee direction="left" scrollamount="7">
			<font size="4"><b>
				<h1>If you are an old user then login and have a new user then register.</h1></b></font>
		</marquee>
		</center>
	<div id="main-wrapper">

		<ul class="main-sav animated slideInDown"  id="check-class">
        <li><a href="../responsible Home/index.php">Back</a></li></ul><br><br>

        <a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>


	<center><h2><span class="colorchange"><font size="7">Login Form</font></span></h2></center>
			<div class="imgcontainer">
				<img src="image/NoProfile-Chef.png" alt="Avatar" class="avatar">
			</div>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b><font size="5">Username</font></b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
                
                <label><b><font size="5">Password</font></b></label>
				<input type="password" placeholder="********" name="password" required>

				<button class="btn login_button" name="login" type="submit">Login</button>

				<a href="register.php"><button type="button" class="btn register_btn">Register</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];


				$query = "select * from user WHERE username='$username' AND password='$password'";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
					{
					//valid
					$_SESSION['username'] = $username;
					header( "Location: ../4 state.php");
					}
					else
					{
						//invalid
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
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