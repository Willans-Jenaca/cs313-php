<?php
    session_start();

    require_once("dbConnect.php");
    $db = get_db(); 

    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    $_SESSION['password'] = htmlspecialchars($_POST['password']);

    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $error = ''; // Variable To Store Error Message 
    if (isset($_POST['submit'])) {
        if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
            $error = "Username or Password is required";
        } else if (isset($username) && isset($password)) {
            $query = 'SELECT authuser_password FROM acw.authuser WHERE authuser_name=:username';
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $result = $statement->execute();
            if ($result) {
                $row = $statement->fetch();
                $hashedPasswordFromDB = $row['authuser_password'];
                
                // now check to see if the hashed password matches
                if (password_verify($password, $hashedPasswordFromDB)) {
                    // password was correct, put the user on the session, and redirect to home
                    $_SESSION['user'] = $username;
                    header("Location: prove07.php");
                    die(); // we always include a die after redirects.
                } else {
                    $error = "Username or Password is incorrect";
                }
            } else {
                $error = "Username or Password is incorrect";
            }
        }
    }
// If we get to this point without having redirected, then it means they
// should just see the login form.
?>
