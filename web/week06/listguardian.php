<?php
// Start the Session
session_start();

 require("dbConnect.php");
 $db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database Retrieve Guardian List</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 6 List from Database">
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
                <h1 class="hide">Database Retrieve List</h1>
            </div>  <!---- class logodiv ---->
            <ul>
                <li><a href="prove06.php">Home</a></li>
            </ul> 
        </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
    	<section id="main">
    		<h2>Results</h2>
        <div id="phpdiv">
          <?php
                
                $statement = $db->query('SELECT * FROM acw.guardian');
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results as $row)
                {
                  echo "<p>" . $row['guardian_last_name'] . ", " . $row['guardian_first_name'] . "</p>";
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