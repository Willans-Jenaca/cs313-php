<?php
// Start the Session
session_start();

if(!isset($_SESSION["user"])) {
        header('Location: index.php');
    }

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Database Payments</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prove 07 Database">
        <link href="../normalize.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <link href="prove07.css" rel="stylesheet" 
              media="screen" type="text/css"/>
</head>
<body>
	<div class="wrapper">
            <header class="headernav">
            	<nav class="logonav">
                    <div class="logodiv">
                        <a href="prove07.php">
                            <img src="../images/ACWLogo.png" 
                            alt="A Child's World Logo"
                            width="518" height="108" class="logo"></a>
                        <h1 class="hide">PHP Database Access</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove07.php">Home</a></li>
                        <li><a href="payments.php">Payments</a></li>
                        <li><a href="logout.php">Logout <?php echo $_SESSION["user"]; ?></a></li>
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
        <h2>Prove 07 Database Payment Access</h2>
            
            <form method="post" name="addpayment_form" id="addpayment_form"
                  action="addpayment.php" >      
                    
                <button type="submit" id="addpayment">Add Payment</button><br>
            </form>
            <form method="post" name="displaypayment_form" id="displaypayment_form"
                  action="listpayments.php" >      
                    
                <button type="submit" id="displaypayment">List Payments</button><br>
            </form>
                        
            <form method="post" name="teach07_paymentform" id="teach07_paymentform"
                  action="paymentpost.php" >  
                <label for="clname">Search payments by child's last name:</label><br>
                <input type="text" name="pay_clastname" id="clname" size="40" ><br><br> 
                <p>OR</p>
                <label for="glname">Search payments by guardian's last name:</label><br>
                <input type="text" name="pay_glastname" id="glname" size="40" ><br><br>   
                <input type="button" value="Submit" onclick="validateAndSend()"><br><br>                    
            </form>
            <script>
                function validateAndSend() {
                    if (teach07_paymentform.clname.value == '' 
                        && teach07_paymentform.glname.value == '') {
                        alert('Search by child OR guardian.');
                        return false;
                    } else if (!(teach07_paymentform.clname.value == '') 
                        && (!(teach07_paymentform.glname.value == ''))) {
                        alert('Search by child OR guardian, but not both.');
                        return false;
                    } else {
                    teach07_paymentform.submit();
                    }
                }
    </script>

	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>