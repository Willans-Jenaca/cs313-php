s<?php
// Start the Session
session_start();

if(!isset($_SESSION["user"])) {
        header('Location: index.php');
    }

 require_once("dbConnect.php");
 $db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database Retrieve Children List</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 7 List from Database">
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
                <h1 class="hide">Database Retrieve List</h1>
            </div>  <!---- class logodiv ---->
            <ul>
                <li><a href="prove07.php">Home</a></li>
                <li><a href="payments.php">Payments</a></li>
                <li><a href="logout.php">Logout <?php echo $_SESSION["user"]; ?></a></li>
            </ul> 
        </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
    	<section id="main">
    		<h2>Results</h2>
        <div id="phpdiv">
          <?php
                
                $statement = $db->query('SELECT * FROM acw.child');
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results as $row)
                {
                  echo "<p>" . $row['child_last_name'] . ", " . $row['child_first_name'] . "</p>";
                }
            
          ?> 
                <br>
            </div> <!--- id phpdiv ---->  
            <div>
                <form method="post" name="edit_childlist" id="edit_childlist"
                  action="editchild.php" >                     
                   
                <label for="edit_child_select">Edit Child:</label><br>
                <select name="child_id" id="edit_child_select" required>
                    <option value="">Select a Child</option>
                <?php                     

                    $statement = $db->query('SELECT * FROM acw.child');
                    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($results as $row)
                    {
                      echo '<option value="' . $row['child_id'] . '">' . $row['child_last_name'] . ', ' 
                      . $row['child_first_name'] . ' ' . $row['child_dateofbirth'] . '</option>';

                    }
                ?>
                </select><br><br>
                <input type="submit"><br><br>
            </div>   
      </section>
		<footer> 
            &copy; 2018 | Jenaca Willans
    </footer>
  </div> <!--- wrapper ---->
</body>
</html>