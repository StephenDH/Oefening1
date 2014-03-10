<!DOCTYPE html>
<html>
<head>
	<title>Oefening PHP op POST en GET</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php if(isset($_POST['real_name']) && isset($_POST['user_name']) && isset($_POST['password'])) : ?>
			<div class="jumbotron">
				<h1>Welkom <?php echo $_POST["real_name"] ?></h1>
				<p>Je gebruikersnaam is <?php echo $_POST["user_name"] ?></p>
			</div>

	<?php else : ?>	
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Registratie</h1>
				</div>

				<div class="panel-body">
					<form method="post">
						<p>Naam: 		   <input type="text" 	  name="real_name" class="form-control"/></p>
						<p>Gebruikersnaam: <input type="text" 	  name="user_name" class="form-control"/></p>
						<p>Wachtwoord: 	   <input type="password" name="password"  class="form-control"/></p>
						<input type="submit" class="btn btn-default">
					</form>			
				</div>
			</div>
	<?php endif; ?>
</body>
</html>