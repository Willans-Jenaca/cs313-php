<?php
// Start the Session
session_start();

require("dbConnect.php");
$db = get_db();
                
// Set CLEAN session variables

$_SESSION["child_select"] = htmlspecialchars($_POST["child_select"]);
$_SESSION["guardian_select"] = htmlspecialchars($_POST["guardian_select"]);
$_SESSION["payment_duedate"] = htmlspecialchars($_POST["payment_duedate"]);
$_SESSION["payment_paiddate"] = htmlspecialchars($_POST["payment_paiddate"]);
$_SESSION["payment_amountDue"] = htmlspecialchars($_POST["payment_amountDue"]);
$_SESSION["payment_amountPaid"] = htmlspecialchars($_POST["payment_amountPaid"]);
$_SESSION["payment_note"] = htmlspecialchars($_POST["payment_note"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database Post Payment</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Post New Payment to Database">
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
                <h1 class="hide">Database Post Payment</h1>
            </div>  <!---- class logodiv ---->
            <ul>
                <li><a href="prove06.php">Home</a></li>
                <li><a href="payments.php">Payments</a></li>
            </ul> 
        </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
    	<section id="main">
    		<h2>Post New Payment</h2>
        <div id="phpdiv">
            
                <br>
            </div> <!--- id phpdiv ---->   
      </section>
		<footer> 
            &copy; 2018 | Jenaca Willans
    </footer>
  </div> <!--- wrapper ---->
</body>
</html>