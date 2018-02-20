<?php
// Start the Session
session_start();

require_once("dbConnect.php");
$db = get_db();
                
// Set CLEAN session variables

$_SESSION["clastname"] = htmlspecialchars($_POST["clastname"]);
$_SESSION["glastname"] = htmlspecialchars($_POST["glastname"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database Retrieve</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 7 PHP with Database">
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
                <h1 class="hide">Database Retrieve</h1>
            </div>  <!---- class logodiv ---->
            <ul>
                <li><a href="prove07.php">Home</a></li>
                <li><a href="payments.php">Payments</a></li>
            </ul> 
        </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
    	<section id="main">
    		<h2>Results</h2>
        <div id="phpdiv">
          <?php

            echo "<h3>Children:</h3><br>";
                            
            $statement = $db->query("SELECT * FROM acw.child 
              WHERE child_last_name='" . $_SESSION['clastname'] . "'");
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            if($results != NULL) {
                foreach ($results as $row)
                {
                    echo "<p>" . $row['child_last_name'] . ", " . $row['child_first_name'] . "</p><br>";
                }
            } else {
                echo "<p>No children match your search</p><br>";
            }
               
            echo "<h3>Guardians: </h3><br>";

            $guardianStatement = $db->query("SELECT * FROM acw.guardian 
              WHERE guardian_last_name='" . $_SESSION['glastname'] . "'");
            $guardianResults = $guardianStatement->fetchAll(PDO::FETCH_ASSOC);

            if($guardianResults != NULL) {
                foreach ($guardianResults as $row)
                {
                  echo "<p>" . $row['guardian_last_name'] . ", " . $row['guardian_first_name'] . "</p>";
                }
            } else {
                echo "<p>No guardians match your search</p><br>";
            }

            ?> 
                
                <br>
            </div> <!--- id phpdiv ---->   
      </section>
		<footer> 
            &copy; 2018 | Jenaca Willans
    </footer>
  </div> <!--- wrapper ---->
</body>
</html>