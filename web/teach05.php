<html>
<body>

	<h1>SCRIPTURE RESOURCES</h1>

<?php

$dbUrl = getenv('DATABASE_URL');
$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"], '/');

try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

$statement = $db->query('SELECT * FROM scriptures');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row)
{
	echo "<p><strong>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</strong> - \"" . $row['content'] . "\"</p><br>";
}


$statement = $db->query('SELECT * FROM scriptures WHERE book="' . $_GET['book'] . '"');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<form method="get" name="teach05_form" id="teach05_form"
      action="teach05.php" >   
        <label for="name">What book do you want to reference?</label><br>
        <input type="text" name="book" id="name" size="40" required><br><br>        
        
        <input type="submit"><br><br>

        <p>All fields are required.</p><br>
</form>

<?php
foreach ($results as $row)
{
	echo "<p><strong>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</strong> - \"" . $row['content'] . "\"</p><br>";
}
?>

</body>
</html>