<?php
// Start the Session
session_start();

// Set CLEAN session variables

$_SESSION["book1"] = htmlspecialchars($_POST["book1"]);
$_SESSION["book2"] = htmlspecialchars($_POST["book2"]);
$_SESSION["book3"] = htmlspecialchars($_POST["book3"]);
$_SESSION["book4"] = htmlspecialchars($_POST["book4"]);
$_SESSION["book5"] = htmlspecialchars($_POST["book5"]);
$_SESSION["book6"] = htmlspecialchars($_POST["book6"]);
$_SESSION["book7"] = htmlspecialchars($_POST["book7"]);
$_SESSION["book8"] = htmlspecialchars($_POST["book8"]);

$_SESSION["orderbooks"] = htmlspecialchars($_POST["orderbooks"]);
$_SESSION["orderDue"] = htmlspecialchars($_POST["orderDue"]);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Cart</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 03 Cart">
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
                        <h1 class="hide">Cart Page</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove03.php">Browse</a></li>
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
		<h2>Shopping Cart</h2>
                <div id="display">
                    
                    <h3>Purchase Information:</h3>
                    <p><?php
                    
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
                                            
                        echo "<br><br>Total books in order: " 
                        . $_SESSION["orderbooks"] . "<br>";
                        echo "Total due today: $" . $_SESSION["orderDue"] . "<br><br>";
                        ?></p> 
                    
                </div> <!--- display ---->
                <form action="checkout.php"  name="reviewForm" method="post" >
                    <button type="submit">Check Out</button>
                </form>
	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>