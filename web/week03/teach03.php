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
      action="contact-form-results.php" >   
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" size="40" required><br><br>
        
        <label for="email">Email:</label><br> 
        <input type="email" name="email" id="email" size="50" required><br><br>

        <label for="major">Major:</label><br>
        <input type="radio" name="major" id="cs" value="Computer Science">
            <label for="cs">Computer Science</label> <br>
        <input type="radio" name="major" id="wdd" value="Web Design and Development">
            <label for="wdd">Web Design and Development</label> <br>
        <input type="radio" name="major" id="cit" value="Computer Information Technology">
            <label for="cit">Computer Information Technology</label> <br>
        <input type="radio" name="major" id="ceng" value="Computer Engineering">
        <label for="ceng">Computer Engineering</label> <br><br>

        <label for="continents">Continents you have visited:</label><br>
        <input type="checkbox" name="continents[]" id="na" value="North America">
            <label for="na">North America</label> <br>
        <input type="checkbox" name="continents[]" id="sa" value="South America">
            <label for="sa">South America</label> <br>
        <input type="checkbox" name="continents[]" id="eu" value="Europe">
            <label for="eu">Europe</label> <br>
        <input type="checkbox" name="continents[]" id="asia" value="Asia">
            <label for="asia">Asia</label> <br>
        <input type="checkbox" name="continents[]" id="au" value="Australia">
            <label for="au">Australia</label> <br>
        <input type="checkbox" name="continents[]" id="afr" value="Africa">
            <label for="afr">Africa</label> <br>
        <input type="checkbox" name="continents[]" id="ant" value="Antarctica">
            <label for="ant">Antarctica</label> <br>
        
        <label for="comment">Comment: </label><br>
        <textarea name="comment" id="comment" rows="10" cols="50" required></textarea> <br><br>
        <input type="submit"><br><br>

        <p>All fields are required.</p><br>
</form>
</body>
</html>