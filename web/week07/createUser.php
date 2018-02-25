<?php
// Start the Session
session_start(); 

require_once("dbConnect.php");
$db = get_db();  

// Set CLEAN session variables

$_SESSION['username'] = htmlspecialchars($_POST['username']);
$_SESSION['password'] = htmlspecialchars($_POST['password']);
$_SESSION['passwordConfirm'] = htmlspecialchars($_POST['passwordConfirm']);

    $is_unique = false;
    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_SESSION['username']) || empty($_SESSION['password']) || empty($_SESSION['passwordConfirm'])) {
            $error = "All fields are required!";
        }
        else { 
            // Define $username and $password
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $passwordConfirm = $_SESSION['passwordConfirm'];
            if ($password !== $passwordConfirm) { 
                $error = "Passwords do not match!";
            }
            else { 

                $statement = $db->query('SELECT * FROM acw.authuser');
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                                                  
                try
                {
                    // Add the payment
                    // We do this by preparing the query with placeholder values
                    $query = 'INSERT INTO acw.authuser(authuser_name, authuser_password) 
                        VALUES(:username, :hashed_password)';
                    $statement = $db->prepare($query);
                    // Now we bind the values to the placeholders. This does some nice things
                    // including sanitizing the input with regard to sql commands.
                    // $statement->bindValue(':payment_id', DEFAULT);
                    $statement->bindValue(':username', $_SESSION['username']);
                    $statement->bindValue(':hashed_password', $hashed_password);
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
                header("Location: index.php");
                die(); // we always include a die after redirects. In this case, there would be no
                       // harm if the user got the rest of the page, because there is nothing else
                       // but in general, there could be things after here that we don't want them
                       // to see.
            }
        }
    }

?>