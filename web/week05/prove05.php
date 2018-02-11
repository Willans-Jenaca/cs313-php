<!-- <?php
// Start the Session
session_start();

// Set CLEAN session variables

$_SESSION["book1"] = htmlspecialchars($_POST["book1"]);


?> -->


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

            $statement = $db->query('SELECT * FROM child');
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row)
            {
                // echo "<p><strong>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</strong> - \"" . $row['content'] . "\"</p><br>";
                echo $row['child_first_name'];
            }


            // $statement = $db->query("SELECT * FROM scriptures WHERE book='" . $_GET['book'] . "'");
            // $results = $statement->fetchAll(PDO::FETCH_ASSOC);


            ?>

           <!--  <form method="get" name="teach05_form" id="teach05_form"
                  action="teach05.php" >   
                    <label for="name">What child is this payment for?</label><br>
                    <input type="text" name="child_first_name" id="name" size="40" required><br><br>        
                    
                    <input type="submit"><br><br>

                    <p>All fields are required.</p><br>
            </form> -->

            <?php
            // foreach ($results as $row)
            // {
            //    echo $row['child_last_name'] $row['child_first_name'];
            // }
            ?> 

	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>