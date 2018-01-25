<?php
$errors = '';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['major']) ||
   empty($_POST['comment']))
{
    $errors .= "\n Error: all fields are required";
}

$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $errors .= "\n Error: Only letters and white space allowed"; 
}

$email_address = test_input($_POST["email"]);
if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  $errors .= "\n Error: Invalid email address";
}

$major = $_POST['major'];
$comment = $_POST['comment'];

if( empty($errors))
{
//redirect to the 'thank you' page
header('Location: contact-form-results.php');


}
?>