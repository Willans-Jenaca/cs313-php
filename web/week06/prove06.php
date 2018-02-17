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
        <meta name="description" content="Prove 06 Database">
        <link href="../normalize.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <link href="prove06.css" rel="stylesheet" 
              media="screen" type="text/css"/>
</head>
<body>
	<div class="wrapper">
            <header class="headernav">
            	<nav class="logonav">
                    <div class="logodiv">
                        <a href="prove06.php">
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
        <h2>Prove 06 Database Access</h2>
            
            <form method="post" name="displaychild_form" id="displaychild_form"
                  action="list.php" >      
                    
                    <button type="submit" id="displaychild">List of Children</button><br>
            </form>

            <p>Enter child's last name:</p>

            <form method="post" name="teach06_form" id="teach06_form"
                  action="post.php" >   
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