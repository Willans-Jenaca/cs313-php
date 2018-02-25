<?php
// Start the Session
session_start();

if(!isset($_SESSION["user"])) {
        header('Location: index.php');
    }

require_once("dbConnect.php");
$db = get_db();

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Add Database Payment Form</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Form to add payment to database">
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
                        <h1 class="hide">PHP Database Add Payment Form</h1>
                    </div>  <!---- class logodiv ---->
                    <ul>
                        <li><a href="prove07.php">Home</a></li>
                        <li><a href="payments.php">Payments</a></li>
                        <li><a href="logout.php">Logout <?php echo $_SESSION["user"]; ?></a></li>
                    </ul> 
                </nav> <!--- logonav ---->
			</header> <!--- class headernav ---->
	<section id="main">
        <h2>Prove 07 Database Add Payment</h2>
                                  
            <form method="post" name="add_paymentform" id="add_paymentform"
                  action="addpaymentpost.php" >  
               <!--  <label for="payment_clname">Child's Last Name:</label><br>
                <input type="text" name="payment_clastname" id="payment_clname" 
                    size="40" required><br><br> 
                <label for="payment_cfname">Child's First Name:</label><br>
                <input type="text" name="payment_cfirstname" id="payment_cfname" 
                    size="40" required><br><br>
                <label for="payment_cDOB">Child's Date of Birth:</label><br>
                <input type="date" name="payment_cDOB" id="payment_cDOB" 
                    size="40" min="1900-01-01" placeholder="year-month-day" 
                    pattern="\d{4}-{1}\d{2}-{1}\d{2}" required><br><br>

                <label for="payment_glname">Guardian's Last Name:</label><br>
                <input type="text" name="payment_glastname" id="payment_glname" 
                    size="40" required><br><br>
                <label for="payment_gfname">Guardian's First Name:</label><br>
                <input type="text" name="payment_gfirstname" id="payment_gfname" 
                    size="40" required><br><br> 
                <label for="payment_gphone">Guardian's Phone Number:</label><br>
                <input type="tel" name="payment_gphone" id="payment_gphone" 
                    size="40" required><br><br>  -->
               
            <label for="payment_child_select">Select a Child:</label><br>
            <select name="child_id" id="payment_child_select" required>
                <option value="">Select a Child</option>
            <?php                     

                $statement = $db->query('SELECT * FROM acw.child');
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results as $row)
                {
                  echo '<option value="' . $row['child_id'] . '">' . $row['child_last_name'] . ', ' 
                  . $row['child_first_name'] . ' ' . $row['child_dateofbirth'] . '</option>';

                }
            ?>
                 </select><br><br>

            <label for="payment_guardian_select">Select a Guardian:</label><br>
            <select name="guardian_id" id="payment_guardian_select" required>
                <option value="">Select a Guardian</option>
            <?php                     

                $statement = $db->query('SELECT * FROM acw.guardian');
                $guardianResults = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($guardianResults as $row)
                {
                  echo '<option value="' . $row['guardian_id'] . '">' . $row['guardian_last_name'] 
                  . ', ' . $row['guardian_first_name'] . ' ' . $row['guardian_phone'] . '</option>';
                }
            ?>
                 </select><br><br>

                <label for="payment_cDOB">Due Date:</label><br>
                <input type="date" name="payment_duedate" id="payment_duedate" 
                    size="40" min="1900-01-01" placeholder="year-month-day" 
                    pattern="\d{4}-{1}\d{2}-{1}\d{2}" required><br><br>
                <label for="payment_date">Date Paid:</label><br>
                <input type="date" name="payment_paiddate" id="payment_date" 
                    size="40" min="1900-01-01" placeholder="year-month-day" 
                    pattern="\d{4}-{1}\d{2}-{1}\d{2}" required><br><br>

                <label for="amountDue">Amount Due:</label><br>
                <input type="text" name="payment_amountDue" id="amountDue" 
                    size="40" required><br><br> 
                <label for="amountPaid">Amount Paid:</label><br>
                <input type="text" name="payment_amountPaid" id="amountPaid" 
                    size="40" required><br><br>

                <label for="paymentNote">Payment Note:</label><br>
                <textarea rows="3" cols="40" name="payment_note" id="paymentNote"></textarea><br><br>
                <input type="submit"><br><br>                    
            </form>

	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>