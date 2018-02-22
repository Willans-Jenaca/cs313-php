<?php
    session_start();

    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    $_SESSION['password'] = htmlspecialchars($_POST['password']);

    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
            $error = "Username or Password is required";
        }
        else {
            // Define $username and $password
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            require_once("dbConnect.php");
            $db = get_db();

            $result = pg_query($db,"SELECT * FROM acw.authuser WHERE authuser_name = '$username'");
            $rows = pg_num_rows($result);
            if ($rows == 1) {
                while($row=pg_fetch_assoc($result)) {
                    if(password_verify($password, $row['authuser_password'])) {
                        $_SESSION["userId"] = $row['authuser_id'];
                        $_SESSION["user"] = $username;
                        header("location: profile.php");
                    }
                    else {
                        $error = "Username or Password is incorrect";
                        break;
                    }
                }
            }
            else {
                $error = "Username or Password is incorrect";
            }
        }
    }
?>