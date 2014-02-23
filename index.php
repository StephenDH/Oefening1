<?php
	$real_name = $_GET['real_name'];
	$user_name = $_GET['user_name'];
	$password  = $_GET['password' ];	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Oefening PHP op POST en GET</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Regestratie</h1>
		</div>

		<div class="panel-body">
			<form action="result.php" method="get">
				<p>Naam: 		   <input type="text" 	  name="real_name" class="form-control"/></p>
				<p>Gebruikersnaam: <input type="text" 	  name="user_name" class="form-control"/></p>
				<p>Wachtwoord: 	   <input type="password" name="password"  class="form-control"/></p>
				<input type="submit" class="btn btn-default">
			</form>			
		</div>

	</div>

	</body>
</html>