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
                        <h1 class="hide">Confirmation Page</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove03.php">Browse</a></li>
                        <li><a href="cart.php">Cart</a></li>  
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
    <h2>Confirmation</h2>
                <?php
                echo "Transaction successful. Thank you for your order.";
                
                if ($_POST['finalsubmit'] == "confirm") {
                    echo "Transaction successful. Thank you for your order.";
                } else {
                    echo "This transaction has been canceled.";
                }
                ?>    
		</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>