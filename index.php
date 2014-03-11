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
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<div class="jumbotron">
			<h1>Welkom <?php echo $real_name ?></h1>
			<p>Je gebruikersnaam is <?php echo $user_name ?></p>
		</div>

	<?php }else{ ?>	
		<link rel="stylesheet" type="text/css" href="css/signup.css">
			<div class="container">
				<form class="form-signin" method="post">
					<h2 class="form-signin-heading">Please sign in</h2>
					<input type="text" 	  name="real_name" class="form-control" placeholder="Name"/>
					<input type="text" 	  name="user_name" class="form-control" placeholder="Username"/>
					<input type="password" name="password"  class="form-control" placeholder="Password"/>
					<button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
				</form>			
			</div>
	<?php } ?>
</body>
</html>