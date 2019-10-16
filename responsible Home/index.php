<html>
<head>
      <title>WebHome</title>
      <link rel="stylesheet" type="text/css" href="CSS/style.CSS">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

      <header>
      	<nav>
      		<div class="row clearfix">
      			<img src="image/kisspng-social-media-computer-icons-linkedin-logo-recipe-5ac1b575ac0654.3159717515226443417046.png" class="logo">

      			<ul class="main-nav animated slideInDown"  id="check-class">
      				<li><a href="../LoginPage/index.php">Login or Signup</a></li>
      				
              <li><a href="../contact form/index.php">Contact us</a></li>
      			</ul>
      			<a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
      		</div>
      	</nav>

        <div class="main-content-header">
        <h1>WELCOME TO<br>
            <span class="colorchange">INDIAN TRADITIONAL FOOD RECIPE</span>.</h1> 

         <a href="../about.php" class="btn btn-full"> About</a>
         <a href="../membership.php" class="btn btn-nav"> Add Membership</a>
		 <a href="../upload_image" class="btn btn-asd"> Upload Recipes</a>
     <a href="../top 10 recipes.php" class="btn btn-abd"> Free Top10 indian Dishes</a>

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
       