<?php
// Start the Session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Checkout</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 3 PHP">
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
                        <h1 class="hide">Checkout Page</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove03.php">Browse</a></li>
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
		<h2>Check Out</h2>
    <div id="checkoutform">
                    <form action="confirmation.php"  id="form"
                          onReset="resetBorders()" class="checkoutform" method="post" >
                        
                        <div class="acw4">
                            <input onfocus="resetFirstName()" name="firstname"
                                   onInput="validateFirstName(this.value)" required
                                   id="firstname" placeholder="First Name">
                            <input onfocus="resetLastName()" name="lastname"
                                   onInput="validateLastName(this.value)" required 
                                   id="lastname" placeholder="Last Name">
                            <input onfocus="resetPhone()" name="phonenumber"
                                   onBlur="validatePhone(this.value)" required 
                                   id="phonenumber" placeholder="Phone Number">
                            <input type="email" name="email" placeholder="Email">
                        </div> <!--- class acw4 ---->
                        <div class="acw5">    
                            <input onfocus="resetStreet()" name="streetaddress"
                                   onBlur="validateStreet(this.value)" required 
                                   id="streetaddress" placeholder="Street Address">
                            <input onfocus="resetCity()" name="city"
                                   onInput="validateCity(this.value)" required 
                                   id="city" placeholder="City">
                            <input onfocus="resetState()" name="state"
                                   onBlur="validateState(this.value)" required 
                                   id="state" placeholder="State Abbreviation">
                            <input onfocus="resetZip()" name="zip"
                                   onBlur="validateZip(this.value)" required 
                                   id="zip" placeholder="Zip Code">
                        </div> <!--- class acw5 ---->
                        <div class="acw6">
                            <select name="cardtype" id="cardtype">
                                <option value="Visa">Visa</option>
                                <option value="MasterCard">MasterCard</option>
                                <option value="Discover">Discover</option>
                                <option value="AMEX">AMEX</option>
                            </select>
                            <input onfocus="resetCardNum()" name="creditcard"
                                   onBlur="validateCardNum(this.value)" required 
                                   id="creditcard" placeholder="Credit Card Number">
                            <input onfocus="resetExpDate()" name="expdate"
                                   onBlur="validateExpDate(this.value)" required 
                                   id="expdate" placeholder="Expiration Date">
                            
                            <button type="submit" name="finalsubmit" 
                            value="confirm">Complete your Purchase</button>
                            <button type="reset">Reset</button>
                        </div> <!--- class acw6 ---->
                    </form>
                    <br><button onclick="goBack()">Back to Cart</button>
                    <script>
                        function goBack() {
                          window.history.back();
                        }
                    </script>
                    <br>
                </div> <!--- id acwpaymentform ---->   
	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>