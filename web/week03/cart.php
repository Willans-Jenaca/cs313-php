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
        <!-- source: https://www.youtube.com/watch?v=jrSFQ195L-I -->
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
                        <li><a href="cart.php">Cart</a></li>  
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
		<h2>Purchase Review</h2>
                <div id="display">
                    <h3>Client Information:</h3>
                    <p><?php
                        echo $_POST["firstname"] . " " . $_POST["lastname"] . "<br>";
                        echo $_POST["streetaddress"] . "<br>";
                        echo $_POST["city"] . ", " . $_POST["state"]
                        . " " . $_POST["zip"] . "<br><br>";
                        echo "Phone: " . $_POST["phonenumber"] . "<br><br>";
                        ?></p> 
                    <h3>Purchase Information:</h3>
                    <p><?php
                    
                        if ($_POST["book1"] != 0)
                        {
                            echo $_POST["book1"] 
                                    . " Theodore Boone = $5.00/each<br>";
                        }
                        if ($_POST["book2"] != 0)
                        {
                            echo $_POST["book2"] 
                                    . " The Baby-Sitter's Club = $5.00/each<br>";
                        }
                        if ($_POST["book3"] != 0)
                        {
                            echo $_POST["book3"] 
                                    . " Hardy Boys = $5.00/each<br>";
                        }
                        if ($_POST["book4"] != 0)
                        {
                            echo $_POST["book4"] 
                                    . " Harry Potter = $5.00/each<br>";
                        }
                        if ($_POST["book5"] != 0)
                        {
                            echo $_POST["book5"] 
                                    . " Island of the Blue Dolphins = $5.00/each<br>";
                        }
                        if ($_POST["book6"] != 0)
                        {
                            echo $_POST["book6"] 
                                    . " Lean on Me = $5.00/each<br>";
                        }
                        if ($_POST["book7"] != 0)
                        {
                            echo $_POST["book7"] 
                                    . " Ramona the Pest = $5.00/each<br>";
                        }
                        if ($_POST["book8"] != 0)
                        {
                            echo $_POST["book8"] 
                                    . " A Wrinkle in Time = $5.00/each<br>";
                        }
                                            
                        echo "<br>Total books in order: " 
                        . $_POST["orderbooks"] . "<br>";
                        echo "Total due today: $" . $_POST["orderDue"] . "<br><br>";
                        ?></p> 
                    <h3>Payment Information:</h3>
                    <p><?php
                        echo $_POST["cardtype"] . " *"
                        . substr($_POST["creditcard"], -4) . "<br>";

                        $expdate = $_POST["expdate"];
                        $date = strtotime($expdate);
                        echo "Expires: " . date("F Y", $date)
                        . "<br><br>";
                        ?></p> 
                </div> <!--- display ---->
                <form action="confirmation.php"  name="reviewForm" method="post" >
                    <button type="submit" name="finalsubmit" 
                            value="confirm">Confirm Order</button>
                    <button type="submit" name="finalsubmit" 
                            value="cancel">Cancel</button>
                </form>
	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>