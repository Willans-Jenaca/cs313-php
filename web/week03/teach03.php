<!DOCTYPE html>
<html>
<head>
	<title>Jenaca Willans | Teach 03</title>
	<meta charset="utf-8">
        <meta name="author" content="Jenaca Willans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Teach 02 HTML">
        <link href="../normalize.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <link href="teach03.css" rel="stylesheet" 
              media="screen" type="text/css"/>
        <script type="text/javascript" src="teach03.js"></script>
        <!-- source: w3schools -->
</head>

<body>
      <form method="post" name="teach03_form" id="teach03_form"
      action="contact-form-handler.php" >   
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" size="40" required><br><br>
        
        <label for="email">Email:</label><br> 
        <input type="email" name="email" id="email" size="50" required><br><br>

        <label for="major">Major:</label><br>
        <input type="radio" name="major" id="m1" value="cs">
            <label for="m1">Computer Science</label> <br>
        <input type="radio" name="major" id="m2" value="wdd">
            <label for="m2">Web Design and Development</label> <br>
        <input type="radio" name="major" id="m3" value="cit">
            <label for="m3">Computer Information Technology</label> <br>
        <input type="radio" name="major" id="m4" value="ceng">
        <label for="m4">Computer Engineering</label> <br><br>
        
        <label for="comment">Comment: </label><br>
        <textarea name="comment" id="comment" rows="10" cols="50" required></textarea> <br><br>
        <input type="submit"><br><br>

        <p>All fields are required.</p><br>
</form>
</body>
</html>