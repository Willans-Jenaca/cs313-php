<?php
$errors = '';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['major']) ||
   empty($_POST['comment']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];

if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  echo $errors .= "\n Error: Only letters and white space allowed"; 
}

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