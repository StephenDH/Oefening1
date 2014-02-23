<?php
	$real_name = $_GET['real_name'];
	$user_name = $_GET['user_name'];
	$password  = $_GET['password' ];	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Oefening PHP op POST en GET</title>
</head>
<body>
	<h1>Regestratie</h1>

	<form action="result.php" method="get">
		<p>Naam: 		   <input type="text" 	  name="real_name" /></p>
		<p>Gebruikersnaam: <input type="text" 	  name="user_name" /></p>
		<p>Wachtwoord: 	   <input type="password" name="password"  /></p>
		<input type="submit">
	</form>
</body>
</html>