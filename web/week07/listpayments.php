<?php
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
	<title>Jenaca Willans | Database Retrieve Payment List</title>
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
            <table id="paymenttable">
                <thead id="payment_table">
                    <tr>
                        <th>CHILD</th>
                        <th>GUARDIAN</th>
                        <th>PAYMENT DUE DATE</th>
                        <th>PAYMENT DATE</th>
                        <th>AMOUNT DUE</th>
                        <th>AMOUNT PAID</th>
                        <th>PAYMENT NOTE</th>
                    </tr>
                </thead>
                <tbody>

          <?php
                
                $statement = $db->query('SELECT * FROM acw.payment INNER JOIN acw.guardian 
                ON payment.payment_guardian_id = guardian.guardian_id INNER JOIN acw.child 
                ON payment.payment_child_id = child.child_id');
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results as $row)
                {
                echo "<tr>
                        <td>" . $row['child_last_name'] . ", " . $row['child_first_name'] . "</td>
                        <td>" . $row['guardian_last_name'] . ", " . $row['guardian_first_name'] . "</td>
                        <td>" . $row['payment_due_date'] . "</td>
                        <td>" . $row['payment_date'] . "</td>
                        <td>" . "$" . $row['payment_amount_due'] . "</td>
                        <td>" . "$" .  $row['payment_amount_paid'] . "</td>
                        <td>" . $row['payment_note'] . "</td>
                    </tr>";
                }
            
          ?> 
              </tbody>  
              </table>
                <br>
            </div> <!--- id phpdiv ---->             
      </section>
		<footer> 
            &copy; 2018 | Jenaca Willans
    </footer>
  </div> <!--- wrapper ---->
</body>
</html>