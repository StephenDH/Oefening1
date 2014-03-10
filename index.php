<?php
	$user_name ="";
	if (isset($_POST['user_name'])) {
		$user_name = $_POST['user_name'];
	}

	$real_name ="";
	if (isset($_POST['real_name'])) {
		$real_name = $_POST['real_name'];
	}

	$password ="";
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}

	$showResult = false;
	$showResult = !(empty($user_name) && empty($real_name) && empty($password));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Oefening PHP op POST en GET</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php if($showResult) { ?>
			<div class="jumbotron">
				<h1>Welkom <?php echo $real_name ?></h1>
				<p>Je gebruikersnaam is <?php echo $user_name ?></p>
			</div>

	<?php }else{ ?>	
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
	<?php } ?>
</body>
</html>