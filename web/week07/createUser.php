<?php
// Start the Session
session_start(); 

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
                require_once("dbConnect.php");
                $db = get_db();

                $result = pg_query($db, "SELECT * FROM acw.authuser");
                
                while ($row=pg_fetch_assoc($result)) {
                    if ($username == $row['authuser_name']) {
                        $error = "Sorry " . $username . " already exists. Choose a different username.";
                        $is_unique = false;
                        break;
                    }
                    else {
                        $is_unique = true;
                    }
                }
                if ($is_unique == true) {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $result = pg_query($db,"INSERT INTO acw.authuser VALUES (default, '$username', '$hashed_password')");
                    header("location: index.php");
                }
            }
        }
    }
?>