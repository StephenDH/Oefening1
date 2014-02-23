<?php
	$real_name = $_POST['real_name'];
	$user_name = $_POST['user_name'];
	$password  = $_POST['password' ];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Oefening PHP op POST en GET</title>
</head>
<body>
	<h1>Regestratie</h1>

	<form action="result.php" method="post">
		<p>Naam: 		   <input type="text" 	  name="real_name" /></p>
		<p>Gebruikersnaam: <input type="text" 	  name="user_name" /></p>
		<p>Wachtwoord: 	   <input type="password" name="password"  /></p>
		<input type="submit">
	</form>

</body>
</html>