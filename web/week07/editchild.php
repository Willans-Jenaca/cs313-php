<?php
// Start the Session
session_start();

if(!isset($_SESSION["user"])) {
        header('Location: index.php');
    }

require_once("dbConnect.php");
$db = get_db();

$_SESSION['edit_child_id'] = htmlspecialchars($_POST['child_id']);

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Edit Child Form</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Form to edit a child in the database">
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
        <h2>Prove 07 Database Edit Child</h2>

        <?php
            $child_id = $_SESSION['edit_child_id'];

            try 
            {
                $statement = $db->query('SELECT * FROM acw.child WHERE child_id=' . $child_id . '');
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $ex)
                {
                    // You don't want to output the Exception message in
                    // a production environment
                    echo "Error with Database.";
                    //echo "Error with DB. Details: $ex";
                    die();
            }
                
            foreach ($result as $row)
            {
               $child_last_name = $row['child_last_name']; 
               $child_first_name = $row['child_first_name']; 
               $child_street_address = $row['child_street_address']; 
               $child_city = $row['child_city']; 
               $child_state_id = $row['child_state_id']; 
               $child_zip = $row['child_zip']; 
               $child_dateofbirth = $row['child_dateofbirth']; 
               $child_diagnoses = $row['child_diagnoses']; 
            }
          
           ?> 
                                  
            <form method="post" name="edit_childform" id="edit_childform"
                  action="editchildpost.php" >  
                
                <label for="editchild_clname">Child's Last Name:</label><br>
                <input type="text" name="editchild_clastname" id="editchild_clname" 
                    placeholder="<?php echo $child_last_name; ?>" size="40"><br><br> 
                <label for="editchild_cfname">Child's First Name:</label><br>
                <input type="text" name="editchild_cfirstname" id="editchild_cfname" 
                    placeholder="<?php echo $child_first_name; ?>" size="40"><br><br>
                <label for="editchild_street">Street Address:</label><br>
                <input type="text" name="editchild_street" id="editchild_street" 
                    placeholder="<?php echo $child_street_address; ?>" size="40"><br><br>
                <label for="editchild_city">City:</label><br>
                <input type="text" name="editchild_city" id="editchild_city" 
                    placeholder="<?php echo $child_city; ?>" size="40"><br><br>
                    
                <label for="editchild_state">State:</label><br>
                <select name="editchild_state" id="editchild_state" required>
                    <!-- <option value="">Select a State</option> -->
                    <option value=""><?php echo $child_state_id; ?></option>
                <?php                     

                    $statement = $db->query('SELECT enumlabel FROM pg_enum WHERE enumtypid=16398');
                    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($results as $row)
                    {
                        // top echo lists values that cannot be seen, but updates appropriately.
                        // second echo lists values that can be seen, but passes the value of "<span"
                        //echo '<option value="' . $row['enumlabel'] . '">' . '</option>';
                        echo '<option value=<span style=color:#000>' . $row['enumlabel'] . '</span></option>';
                    }
                ?>
                </select><br><br>
                                
                <label for="editchild_zip">Zip:</label><br>
                <input type="text" name="editchild_zip" id="editchild_zip" 
                    placeholder="<?php echo $child_zip; ?>" size="40"><br><br>
                <label for="editchild_cDOB">Date of Birth:</label><br>
                <input type="date" name="editchild_cDOB" id="editchild_cDOB" 
                    size="40" min="1900-01-01" placeholder="<?php echo $child_dateofbirth; ?>" 
                    pattern="\d{4}-{1}\d{2}-{1}\d{2}"><br><br>
                <label for="editchild_dx">Diagnosis:</label><br>
                <input type="text" name="editchild_dx" id="editchild_dx" 
                    placeholder="<?php echo $child_diagnoses; ?>" size="40"><br><br>
               
                <input type="submit"><br><br>                    
            </form>

	</section>
		<footer> 
            &copy; 2018 | Jenaca Willans
        </footer>
    </div> <!--- wrapper ---->
</body>
</html>