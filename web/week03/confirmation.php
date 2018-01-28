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
          if ($_POST['finalsubmit'] == "confirm") {
              echo "Transaction successful. Thank you for your order.<br><br>";

              if ($_POST["book1"] != 0)
                        {
                            echo $_POST["book1"] 
                                    . " copies of Theodore Boone = $5.00/each";
                        }
                        if ($_POST["book2"] != 0)
                        {
                            echo $_POST["book2"] 
                                    . " copies of The Baby-Sitter's Club = $5.00/each<br>";
                        }
                        if ($_POST["book3"] != 0)
                        {
                            echo $_POST["book3"] 
                                    . " copies of Hardy Boys = $5.00/each<br>";
                        }
                        if ($_POST["book4"] != 0)
                        {
                            echo $_POST["book4"] 
                                    . " copies of Harry Potter = $5.00/each<br>";
                        }
                        if ($_POST["book5"] != 0)
                        {
                            echo $_POST["book5"] 
                                    . " copies of Island of the Blue Dolphins = $5.00/each<br>";
                        }
                        if ($_POST["book6"] != 0)
                        {
                            echo $_POST["book6"] 
                                    . " copies of Lean on Me = $5.00/each<br>";
                        }
                        if ($_POST["book7"] != 0)
                        {
                            echo $_POST["book7"] 
                                    . " copies of Ramona the Pest = $5.00/each<br>";
                        }
                        if ($_POST["book8"] != 0)
                        {
                            echo $_POST["book8"] 
                                    . " copies of A Wrinkle in Time = $5.00/each<br>";
                        }
                                            
                        echo "<br>Total books in order: " 
                        . $_POST["orderbooks"] . "<br>";
                        echo "Order total: $" . $_POST["orderDue"] . "<br><br>";
                       
              
              echo "Shipping Address: <br>";
              echo $_POST["firstname"] . " " . $_POST["lastname"] . "<br>";
              echo $_POST["streetaddress"] . "<br>";
              echo $_POST["city"] . ", " . $_POST["state"]
                        . " " . $_POST["zip"] . "<br><br>";
              echo "Phone: " . $_POST["phonenumber"] . "<br><br>";
                        
              echo $_POST["cardtype"] . " *"
                        . substr($_POST["creditcard"], -4) . "<br>";

                        $expdate = $_POST["expdate"];
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