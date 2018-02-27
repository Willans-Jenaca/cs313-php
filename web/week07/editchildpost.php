<?php
// Start the Session
session_start();

if(!isset($_SESSION["user"])) {
        header('Location: index.php');
    }

require_once("dbConnect.php");
$db = get_db();

// Set CLEAN session variables

$_SESSION["child_last_name"] = htmlspecialchars($_POST["editchild_clastname"]);
$_SESSION["child_first_name"] = htmlspecialchars($_POST["editchild_cfirstname"]);
$_SESSION["child_street_address"] = htmlspecialchars($_POST["editchild_street"]);
$_SESSION["child_city"] = htmlspecialchars($_POST["editchild_city"]);

$_SESSION["child_state_id"] = htmlspecialchars($_POST["editchild_state"]);

$_SESSION["child_zip"] = htmlspecialchars($_POST["editchild_zip"]);
$_SESSION["child_dateofbirth"] = htmlspecialchars($_POST["editchild_cDOB"]);
$_SESSION["child_diagnoses"] = htmlspecialchars($_POST["editchild_dx"]);

$current_child_id = $_SESSION["edit_child_id"];

try
{
    if($_SESSION["child_first_name"] != '')
    {
        // Update the child
        // We do this by preparing the query with placeholder values
        $query = 'UPDATE acw.child SET child_first_name = :child_first_name
                    WHERE child_id =' . $current_child_id . '';
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':child_first_name', $_SESSION['child_first_name']);
        $statement->execute();
    } 
    if($_SESSION["child_last_name"] != '')
    {
        $query = 'UPDATE acw.child SET child_last_name = :child_last_name
                    WHERE child_id =' . $current_child_id . '';
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':child_last_name', $_SESSION['child_last_name']);
        $statement->execute();
    }
    if($_SESSION["child_street_address"] != '')
    {
        $query = 'UPDATE acw.child SET child_street_address = :child_street_address
                    WHERE child_id =' . $current_child_id . '';
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':child_street_address', $_SESSION['child_street_address']);
        $statement->execute();
    }
    if($_SESSION["child_city"] != '')
    {
        $query = 'UPDATE acw.child SET child_city = :child_city
                    WHERE child_id =' . $current_child_id . '';
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':child_city', $_SESSION['child_city']);
        $statement->execute();
    }
    // cannot currently show states in color AND post - see editchild.php
    // if($_SESSION["child_state_id"] != '')
    // {
    //     $query = 'UPDATE acw.child SET child_state_id = :child_state_id
    //                 WHERE child_id =' . $current_child_id . '';
    //     $statement = $db->prepare($query);
    //     // Now we bind the values to the placeholders. This does some nice things
    //     // including sanitizing the input with regard to sql commands.
    //     $statement->bindValue(':child_state_id', $_SESSION['child_state_id']);
    //     $statement->execute();
    // }
    if($_SESSION["child_zip"] != '')
    {
        $query = 'UPDATE acw.child SET child_zip = :child_zip
                    WHERE child_id =' . $current_child_id . '';
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':child_zip', $_SESSION['child_zip']);
        $statement->execute();
    }
    if($_SESSION["child_dateofbirth"] != '')
    {
        $query = 'UPDATE acw.child SET child_dateofbirth = :child_dateofbirth
                    WHERE child_id =' . $current_child_id . '';
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':child_dateofbirth', $_SESSION['child_dateofbirth']);
        $statement->execute();
    }
    if($_SESSION["child_diagnoses"] != '')
    {
        $query = 'UPDATE acw.child SET child_diagnoses = :child_diagnoses
                    WHERE child_id =' . $current_child_id . '';
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':child_diagnoses', $_SESSION['child_diagnoses']);
        $statement->execute();
    }
    
}
catch (Exception $ex)
{
    // You don't want to output the Exception message in
    // a production environment
    echo "Error with Database.";
    //echo "Error with DB. Details: $ex";
    die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: listchildren.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.


?> 