<!DOCTYPE html>
<html>
<head>
  <title>Jenaca Willans | Teach 03 Results</title>
  <meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Teach 02 HTML">
        <link href="../normalize.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <link href="teach03.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <script type="text/javascript" src="teach03.js"></script>
</head>

<body>
     <div>
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
            echo "Name: " . $name . "<br>";
            echo "Email: <a href="mailto:$email_address?Subject=Contact%20Form" 
                               target="_top">" . $email_address . "</a><br>";
            echo "Major: " . $major . "<br>";
            echo "Comments: " . $comment . "<br>";
          }
        ?> 
        <h3><a href="teach03.php">Return to Teach 03 Form</a></h3>
      </div>
</body>
</html>
