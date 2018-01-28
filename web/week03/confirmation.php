<?php
// Start the Session
session_start();

// Set CLEAN session variables

// $_SESSION["book1"] = htmlspecialchars($_POST["book1"]);
// $_SESSION["book2"] = htmlspecialchars($_POST["book2"]);
// $_SESSION["book3"] = htmlspecialchars($_POST["book3"]);
// $_SESSION["book4"] = htmlspecialchars($_POST["book4"]);
// $_SESSION["book5"] = htmlspecialchars($_POST["book5"]);
// $_SESSION["book6"] = htmlspecialchars($_POST["book6"]);
// $_SESSION["book7"] = htmlspecialchars($_POST["book7"]);
// $_SESSION["book8"] = htmlspecialchars($_POST["book8"]);

// $_SESSION["orderbooks"] = htmlspecialchars($_POST["orderbooks"]);
// $_SESSION["orderDue"] = htmlspecialchars($_POST["orderDue"]);

$_SESSION["finalsubmit"] = htmlspecialchars($_POST["finalsubmit"]);

$_SESSION["firstname"] = htmlspecialchars($_POST["firstname"]);
$_SESSION["lastname"] = htmlspecialchars($_POST["lastname"]);
$_SESSION["streetaddress"] = htmlspecialchars($_POST["streetaddress"]);
$_SESSION["city"] = htmlspecialchars($_POST["city"]);
$_SESSION["state"] = htmlspecialchars($_POST["state"]);
$_SESSION["zip"] = htmlspecialchars($_POST["zip"]);
$_SESSION["phonenumber"] = htmlspecialchars($_POST["phonenumber"]);
$_SESSION["cardtype"] = htmlspecialchars($_POST["cardtype"]);
$_SESSION["creditcard"] = htmlspecialchars($_POST["creditcard"]);
$_SESSION["expdate"] = htmlspecialchars($_POST["expdate"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Confirmation</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 03">
        <link href="../normalize.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <link href="prove03.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <script type="text/javascript" src="cart.js"></script>
</head>
<body>
	<div class="wrapper">
            <header class="headernav">
            	<nav class="logonav">
                    <div class="logodiv">
                        <a href="prove03.php">
                            <img src="../images/ACWLogo.png" 
                            alt="A Child's World Logo"
                            width="518" height="108" class="logo"></a>
                        <h1 class="hide">Confirmation Page</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove03.php">Browse</a></li>
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
    <h2>Confirmation</h2>
       <p><?php

          if ($_SESSION['finalsubmit'] == "confirm") {

              echo "Transaction successful. Thank you for your order.<br><br>";

              if ($_SESSION["book1"] != 0)
              {
                  echo $_SESSION["book1"] 
                           . " copies of Theodore Boone = $5.00/each";
              }
              if ($_SESSION["book2"] != 0)
              {
                  echo $_SESSION["book2"] 
                          . " copies of The Baby-Sitter's Club = $5.00/each<br>";
              }
              if ($_SESSION["book3"] != 0)
              {
                  echo $_SESSION["book3"] 
                          . " copies of Hardy Boys = $5.00/each<br>";
              }
              if ($_SESSION["book4"] != 0)
              {
                  echo $_SESSION["book4"] 
                          . " copies of Harry Potter = $5.00/each<br>";
              }
              if ($_SESSION["book5"] != 0)
              {
                  echo $_SESSION["book5"] 
                          . " copies of Island of the Blue Dolphins = $5.00/each<br>";
              }
              if ($_SESSION["book6"] != 0)
              {
                  echo $_SESSION["book6"] 
                          . " copies of Lean on Me = $5.00/each<br>";
              }
              if ($_SESSION["book7"] != 0)
              {
                  echo $_SESSION["book7"] 
                          . " copies of Ramona the Pest = $5.00/each<br>";
              }
              if ($_SESSION["book8"] != 0)
              {
                  echo $_SESSION["book8"] 
                          . " copies of A Wrinkle in Time = $5.00/each<br>";
              }
                                        
              echo "<br>Total books in order: " 
                      . $_SESSION["orderbooks"] . "<br>";
              echo "Order total: $" . $_SESSION["orderDue"] . "<br><br>";
                       
              
              echo "Shipping Address: <br>";
              echo $_SESSION["firstname"] . " " . $_SESSION["lastname"] . "<br>";
              echo $_SESSION["streetaddress"] . "<br>";
              echo $_SESSION["city"] . ", " . $_SESSION["state"]
                        . " " . $_SESSION["zip"] . "<br><br>";
              echo "Phone: " . $_SESSION["phonenumber"] . "<br><br>";
                        
              echo $_SESSION["cardtype"] . " *"
                        . substr($_SESSION["creditcard"], -4) . "<br>";

                        $expdate = $_SESSION["expdate"];
                        $date = strtotime($expdate);
                        echo "Expires: " . date("F Y", $date)
                        . "<br><br>";
        } else {
        echo "This transaction has been canceled.";
        } 
                     
        ?>    <p>
		</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>