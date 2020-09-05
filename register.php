<?php require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | ReadCount</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <div class="userform">
		<div class="form-heading">
			<h2>Register</h2>
			<h6 id="subheading">Read your favourite story now!</h6>
		</div>

		<div class="form">
			<form method="POST" action="register_script.php" name="Register">
				<div class="f_name">
					<label for="fname">First name (required)</label><br>
					<input type="text" name="firstname" id="fname" placeholder="First name" value="">
				</div>
				<div class="l_name">
					<label for="lname">Last name (optional)</label><br>
					<input type="text" name="lastname" id="lname" placeholder="Last name">
				</div>
				<div style="display: inline-block; width: 100%;">
					<?php
	                if(isset($_GET["m1"])){
	                  echo $_GET['m1'];
	                }?>
				</div>


				<label for="phonenumber">Enter your phone number (required)</label><br>
				<input type="tel" name="Phonenumber" maxlength="10" id="phonenumber" placeholder="Phone number">
				<?php
                if(isset($_GET["m2"])){
                  echo $_GET['m2'];
                }?>

				<label for="email">Enter your email (required)</label><br>
				<input type="email" name="Email" id="email" placeholder="Email">
				<?php
                if(isset($_GET["m3"])){
                    echo $_GET['m3'];
                }?>

				<label for="password">Enter a password (required)</label><br>
				<input type="password" name="Password" id="password" placeholder="Password">
				<?php
                if(isset($_GET["m4"])){
                  echo $_GET['m4'];
                }?>

				<div class="form-group row mb-0">
          <div class="col-md-12">
              <button type="submit" class="btn btn-default menu-link float-right">
                  Submit
              </button>
          </div>
      	</div>
			</form>

		</div>
	</div>
	<br>

	<?php include 'includes/footer.php' ?>
</body>
</html>
