<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Prove 03</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 3 PHP">
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
                        <h1 class="hide">Browse Items Page</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove03.php">Browse</a></li>
                        <li><a href="cart.php">Cart</a></li>  
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
		<h2>Children's Books ~ $5.00 Each</h2>
                <div id="booksform">
                    <form action="cart.php"  id="form"
                          onReset="resetBorders()" class="booksform" method="post" >
                        <div id="books">
                        	<table id="bookstable1">
                                <tbody>
                                    <tr>
                                        <td><input onInput="addbook(this.value)" 
                                                   name="book1" id="book1" value="0"
                                                   maxlength="2"  size="2"/></td>
                                        <td><img src="../images/boone.jpg" 
                            				alt="Theodore Boone"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addbook(this.value)" 
                                                   name="book2" id="book2" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>

                                </tbody>
                            </table> <!--- bookstable1 ---->
                            <table id="bookstable2">
                                <tbody>
                                    <tr>
                                        <td><input onInput="addbook(this.value)" 
                                                   name="book3" id="book3" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/hardyboys.jpeg" 
                            				alt="Hardy Boys"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addbook(this.value)" 
                                                   name="book4" id="book4" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/harry.jpg" 
                            				alt="Harry Potter"></td>
                                    </tr>
                                </tbody>
                            </table> <!--- bookstable2 ---->
                            <table id="bookstable3">
                                <tbody>
                                    <tr>
                                        <td><input onInput="addbook(this.value)" 
                                                   name="book5" id="book5" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/island.jpg" 
                            				alt="Island of the Blue Dolphins"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addbook(this.value)" 
                                                   name="book6" id="book6" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/leanonme.jpg" 
                            				alt="Lean on Me">/td>
                                    </tr>
								</tbody>
                            </table> <!--- bookstable3 ---->
                            <table id="bookstable4">
                                <tbody>
                                    <tr>
                                        <td><input onInput="addbook(this.value)"  
                                                   name="book7" id="book7" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/ramona.jpg" 
                            				alt="Ramona"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addbook(this.value)" 
                                                   name="book8" id="book8" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/wrinkle.jpg" 
                            				alt="Wrinkle in Time"></td>
                                    </tr>                                    
                                </tbody>
                            </table> <!--- bookstable4 ---->
                        </div> <!--- id books ---->
                        <div class="acw3">
                            
                            <div id="totalbooks">Total Books: 0</div>
                            <div id="totalDue">Total Due: $0.00</div>
                            <input type="hidden" name="orderbooks" 
                                   id="orderbooks">
                            <input type="hidden" name="orderDue" 
                                   id="orderDue">  
                        </div> <!--- class acw3 ---->
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
                            <button type="reset">Reset</button>
                            <button type="submit">Submit</button>
                        </div> <!--- class acw6 ---->
                    </form>
                    <br>
                </div> <!--- id acwpaymentform ---->   
	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>