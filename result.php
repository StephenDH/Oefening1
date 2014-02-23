<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultaat</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="jumbotron">
		<h1>Welkom <?php echo $_POST["real_name"] ?></h1>
		<p>Je gebruikersnaam is <?php echo $_POST["user_name"] ?></p>	
	</div>
</body>
</html>