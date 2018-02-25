<?php
// Start the Session
session_start();

if(!isset($_SESSION["user"])) {
        header('Location: index.php');
    }

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 07 Database">
        <link href="../normalize.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <link href="prove07.css" rel="stylesheet" 
              media="screen" type="text/css"/>
</head>
<body>
	<div class="wrapper">
            <header class="headernav">
            	<nav class="logonav">
                    <div class="logodiv">
                        <a href="prove07.php">
                            <img src="../images/ACWLogo.png" 
                            alt="A Child's World Logo"
                            width="518" height="108" class="logo"></a>
                        <h1 class="hide">PHP Database Access</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove07.php">Home</a></li>
                        <li><a href="payments.php">Payments</a></li>
                        <li><a href="logout.php">Logout <?php echo $_SESSION["user"]; ?></a></li>
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
        <h2>Prove 07 Database Access</h2>
            
            <form method="post" name="displaychild_form" id="displaychild_form"
                  action="listchildren.php" >      
                    
                <button type="submit" id="displaychild">List Children</button><br>
            </form>
            <form method="post" name="displayguardian_form" id="displayguardian_form"
                  action="listguardian.php" >      
                   
                <button type="submit" id="displayguardian">List Guardians</button><br> 
            </form>
            <form>
            <button type="button"><a href="payments.php">Search Payments</a></button><br><br>
            </form>
            
            <form method="post" name="teach07_form" id="teach07_form"
                  action="post.php" >  
                <label for="clname">Search by child's last name:</label><br>
                <input type="text" name="clastname" id="clname" size="40" ><br><br> 
                <label for="glname">Search by guardian's last name:</label><br>
                <input type="text" name="glastname" id="glname" size="40" ><br><br>   
                <input type="submit"><br><br>                    
            </form>


	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>