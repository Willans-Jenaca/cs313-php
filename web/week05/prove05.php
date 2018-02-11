<?php
// Start the Session
session_start();

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 05 Database">
        <link href="../normalize.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <link href="prove05.css" rel="stylesheet" 
              media="screen" type="text/css"/>
</head>
<body>
	<div class="wrapper">
            <header class="headernav">
            	<nav class="logonav">
                    <div class="logodiv">
                        <a href="prove05.php">
                            <img src="../images/ACWLogo.png" 
                            alt="A Child's World Logo"
                            width="518" height="108" class="logo"></a>
                        <h1 class="hide">PHP Database Access</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove05.php">Home</a></li>
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
        <h2>Prove 05 Database Access</h2>
            

            <form method="post" name="teach05_form" id="teach05_form"
                  action="post.php" >   
                    <label for="lname">Enter child's last name:</label><br>
                    <input type="text" name="lastname" id="lname" size="40" required><br><br>        
                    
                    <input type="submit"><br><br>

                    <p>All fields are required.</p><br>
            </form>

            

	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>