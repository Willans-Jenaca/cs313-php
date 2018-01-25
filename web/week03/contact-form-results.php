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
</head>

<body>
     <div>
        <?php

          $name = htmlspecialchars($_POST['name']);
          $email_address = htmlspecialchars($_POST['email']);
          $major = htmlspecialchars($_POST['major']);
          $continents = $_POST['continents'];
          $comment = htmlspecialchars($_POST['comment']);

          // if( empty($errors))
          // {
            echo "Name: " . $name . "<br>";
            echo "Email: <a href=\"mailto:$email_address\" target=\"_top\">" 
                . $email_address . "</a><br>";
            echo "Major: " . $major . "<br>";

            foreach ($continents as $continent)
{
  $continent_clean = htmlspecialchars($continent);
  echo "<li><p>$continent_clean</p></li>";
}
            
          // reference: http://form.guide/php-form/php-form-checkbox.html
            // if(empty($continents))
            // {
            //   echo("You didn't select any continents. Are you from Earth? <br>");
            // }
            // else
            // {
              // $N = count($continents);

              // echo("You selected $N continent(s): <br>");
              // for($i=0; $i < $N; $i++)
              // {
              //   echo($continents[$i] . "<br>");
              // }
            //}

            echo "Comments: " . $comment . "<br>";
          // }
          // else {
          //   echo $errors;
          // }
        ?> 
        <h3><a href="teach03.php">Return to Teach 03 Form</a></h3>
      </div>
</body>
</html>
