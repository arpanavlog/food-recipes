<?php
    
    include("dbconnect.php");
  
?>


<html>
<head>
    <title>Contact Form</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <li><a href="../responsible Home/index.php"><font color="#fff" size="5">Back</font></a></li>


<div id="page-wrap">
    
   
<h1>Contact Form</h1>

    <div id="contact-area">

        <form method="post" action="user_process.php"  name="user">
            <label for="Name">Name:</label>
            <input type="text" name="name" id="Name" />

            <label for="City">City:</label>
            <input type="text" name="city" id="City" />

            <label for="Email">Email:</label>
            <input type="text" name="email" id="Email" />

            <label for="Message">Message:</label><br />
            <textarea name="message" rows="20" cols="20" id="Message"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>

</div>

</body>
</html>