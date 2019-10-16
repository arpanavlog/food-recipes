<?php
	session_start();
	require_once('dbconfig/config.php');
  if(!isset($_SESSION['username'])){
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
            <link rel="stylesheet" href="css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
            
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
<body>
	<header><br><br><br><br>
	<div id="main-wrapper">
		<center><h2><span class="colorchange"><font size="7">Home Page</font></h2></center><br><br>
		<center><h3><font size="6">Welcome <?php echo $_SESSION['username']; ?></font></h3></center>
		
		<form action="homepage.php" method="post">
			<div class="imgcontainer">
				<img src="image/NoProfile-Chef.png" alt="Avatar" class="avatar">
			</div><br>
			<div class="inner_container">

				<center>
          <font size="6">If you want to go to the Home page then please <a href="../4 state.php" class="click-here">Click here.</a><br>
          otherwise Click to Logout Button.</font><br><br>

          <button name="logout" class="btn logout_button" type="submit">Log Out</button></center>	
			</div>
		</form>

		<?php
                if(isset($_POST['logout']))
                {
                    session_start();
                    session_destroy();
                    header('location: index.php');
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