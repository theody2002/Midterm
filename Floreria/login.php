<?php
include_once 'config/config.php';
include_once 'classes/class.user.php';

$user = new user();
if ($user->get_session()) {
	header("location: index.php");
}
if (isset($_REQUEST['submit'])) {
	extract($_REQUEST);
	$login = $user->check_login($useremail, $password);
	if ($login) {
		header("location: index.php?page=users");
	} else {
?>
		<div id='error_notif'>Wrong email or password</div>
<?php
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Floreria</title>
	<link rel="stylesheet" href="css/style1.css?<?php echo time(); ?>">
</head>

<body>
	<div class="header">
		<h2>Floreria's Flower Shop</h2>


		<form method="post" action="login.php">
			<div class="input-group">
				<label>Email</label>
				<input type="email" class="input" required name="useremail" placeholder="Valid Email" />
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" class="input" required name="password" placeholder="Password" />
			</div>
			<div class="input-group">
				<input type="submit" name="submit" value="Submit" />
			</div>

		</form>
	</div>
</body>

</html>