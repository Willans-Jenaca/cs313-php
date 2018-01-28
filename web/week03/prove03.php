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
                        <!-- <li id="carttotal"><a href="cart.php">Cart 0</a></li>  --> 
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
                            
                           <!--  <div id="totalbooks">Total Books: 0</div>
                            <div id="totalDue">Total Due: $0.00</div> -->
                            <input type="hidden" name="orderbooks" 
                                   id="orderbooks">
                            <input type="hidden" name="orderDue" 
                                   id="orderDue">  
                        </div> <!--- class acw3 ---->
                            <button type="reset">Reset</button><br>
                            <button type="submit" id="carttotal">Go to Shopping Cart</button>
                        </div> <!--- class acw6 ---->
                    </form>
                    <br>
                </div> <!--- id booksform ---->   
	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>