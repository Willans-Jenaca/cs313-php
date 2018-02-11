<?php
// Start the Session
session_start();

// Set CLEAN session variables

$_SESSION["name"] = htmlspecialchars($_POST["name"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database Retrieve</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 5 PHP with Database">
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
                <h1 class="hide">Database Retrieve</h1>
            </div>  <!---- class logodiv ---->
            <ul>
                <li><a href="prove05.php">Home</a></li>
            </ul> 
        </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
    	<section id="main">
    		<h2>Results</h2>
        <div id="phpdiv">
          <?php

                $dbUrl = getenv('DATABASE_URL');
                $dbopts = parse_url($dbUrl);

                $dbHost = $dbopts["host"];
                $dbPort = $dbopts["port"];
                $dbUser = $dbopts["user"];
                $dbPassword = $dbopts["pass"];
                $dbName = ltrim($dbopts["path"], '/');

                try {
                 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
                }
                catch (PDOException $ex) {
                 print "<p>error: $ex->getMessage() </p>\n\n";
                 die();
                }

            
  $statement = $db->query("SELECT * FROM acw.child WHERE child_first_name='" . $_SESSION['name'] . "'");
  $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                if ($statement = NULL) {
                  echo "No data for this query";
                }

                foreach ($results as $row)
                {
                   echo "<p>" . $row['child_first_name'] . "</p>";
                    // echo "<p>" . $row['child_last_name'] . ", " . $row['child_first_name'] "</p>";
                }


                ?> 
                
              <!--   <br><button onclick="goBack()">Back Search</button>
                <script>
                    function goBack() {
                      window.history.back();
                    }
                </script> -->
                <br>
            </div> <!--- id phpdiv ---->   
      </section>
		<footer> 
            &copy; 2018 | Jenaca Willans
    </footer>
  </div> <!--- wrapper ---->
</body>
</html>