<?php require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | ReadCount</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background: #f2f2f2;">
	<?php include 'includes/navbar.php'; ?>

  <div class="login">
		<div class="login-content">
			<div class="logo-l">
				<a href="index.php" class="links" style="color:#FF8C00;"><strong>ReadCount</strong></a>
			</div>
			<div class="form-heading">
				<h5>Login</h5>
			</div>
			<form action="login_script.php" method="POST">
				<label for="email">Email</label><br>
				<input type="email" name="Email" id="email" placeholder="Email" required="">

				<label for="password">Password</label><br>
				<input type="password" name="Password" id="password" placeholder="Password">
				<span><a href="register.php" class="links" style="padding: 4px 10px 4px 0;">Create account</a></span>
				<input type="submit" name="Submit" value="Login" onclick="" class="menu-link" style="border:none;">
				<?php
                if (isset($_SESSION['error']))
                {
                	echo $_SESSION['error'];
                }
                ?>
			</form>
		</div>
	</div>

	<?php include 'includes/footer.php' ?>
</body>
</html>
