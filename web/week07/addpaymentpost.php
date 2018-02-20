<?php
// Start the Session
session_start();

require_once("dbConnect.php");
$db = get_db();
                
// Set CLEAN session variables

$_SESSION["payment_child_id"] = htmlspecialchars($_POST["child_id"]);
$_SESSION["payment_guardian_id"] = htmlspecialchars($_POST["guardian_id"]);
$_SESSION["payment_due_date"] = htmlspecialchars($_POST["payment_duedate"]);
$_SESSION["payment_date"] = htmlspecialchars($_POST["payment_paiddate"]);
$_SESSION["payment_amount_due"] = htmlspecialchars($_POST["payment_amountDue"]);
$_SESSION["payment_amount_paid"] = htmlspecialchars($_POST["payment_amountPaid"]);
$_SESSION["payment_note"] = htmlspecialchars($_POST["payment_note"]);


try
{
    // Add the payment
    // We do this by preparing the query with placeholder values
    $query = 'INSERT INTO acw.payment(payment_child_id, payment_guardian_id, 
        payment_due_date, payment_date, payment_amount_due, payment_amount_paid, payment_note) 
        VALUES(:payment_child_id, :payment_guardian_id, :payment_due_date, 
        :payment_date, :payment_amount_due, :payment_amount_paid, :payment_note)';
    $statement = $db->prepare($query);
    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    // $statement->bindValue(':payment_id', DEFAULT);
    $statement->bindValue(':payment_child_id', $_SESSION['payment_child_id']);
    $statement->bindValue(':payment_guardian_id', $_SESSION['payment_guardian_id']);
    $statement->bindValue(':payment_due_date', $_SESSION['payment_due_date']);
    $statement->bindValue(':payment_date', $_SESSION['payment_date']);
    $statement->bindValue(':payment_amount_due', $_SESSION['payment_amount_due']);
    $statement->bindValue(':payment_amount_paid', $_SESSION['payment_amount_paid']);
    $statement->bindValue(':payment_note', $_SESSION['payment_note']);
    $statement->execute();
    // get the new id
    
}
catch (Exception $ex)
{
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error with Database.";
    echo "Error with DB. Details: $ex";
    die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: listpayments.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
?>

