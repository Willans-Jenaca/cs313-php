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
		<h2 style="display:none">Children's Books</h2>
                <div id="booksform">
                    <form action="cart.php"  id="form"
                          onReset="resetBorders()" class="booksform" method="post" >
                        <div id="books">
                        	<table id="bookstable1">
                                <tbody>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)" 
                                                   name="week1" id="155" value="0"
                                                   maxlength="2"  size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)" 
                                                   name="week2" id="142" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)" 
                                                   name="week3" id="121" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)" 
                                                   name="week4" id="127" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>
                                </tbody>
                            </table> <!--- bookstable1 ---->
                            <table id="bookstable2">
                                <tbody>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)" 
                                                   name="week7" id="145" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)" 
                                                   name="week8" id="133" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club">/td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)"  
                                                   name="week9" id="113" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>
                                    <tr>
                                        <td><input onInput="addWeek(this.value)" 
                                                   name="week10" id="122" value="0"
                                                   maxlength="2" size="2"/></td>
                                        <td><img src="../images/BSC.png" 
                            				alt="Babysitter's Club"></td>
                                    </tr>                                    
                                </tbody>
                            </table> <!--- bookstable2 ---->
                        </div> <!--- id books ---->
                        <div class="acw3">
                            <input type="text" id="accountNumber" name="accountnumber" 
                                   placeholder="Account Number">
                            <label><input type="checkbox" id="multiple" name="multiple" 
                                          onClick="addWeek(this.value)"
                                 value="multiple"> 2+ children enrolled</label><br>
                            <div id="totalWeeks">Total Weeks: 0</div>
                            <div id="totalDue">Total Due: $0.00</div>
                            <input type="hidden" name="orderWeeks" 
                                   id="orderWeeks">
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