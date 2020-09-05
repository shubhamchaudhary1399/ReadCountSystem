<div class="navbar-read">
		<div class="max-width-nav">
			<img src="img/svg/menu.svg" class="hide-lg" onclick="burger()">

			<div class="nav-br-fs">
        <a class="br-fs-link" href="index.php">
          <span class="material-icons md-36" style="float: left;">library_books</span>
          <span class="readcount"><strong>ReadCount</strong></span>
        </a>
			</div>

		<?php if(isset($_SESSION['email'])) {?>

      <div class="navbar-l">
				<a href="index.php" class="links">Hello <?php echo $_SESSION['firstname']; ?></a>
			</div>

			<div class="navbar-r">
				<a href="logout_script.php" class="links">Logout</a>
				<a class="menu-link links" href="titles.php">Read Stories</a>
			</div>
		</div>
	</div>

		<div class="sidebar-navbar" style="">
			<span class="cbtn" onclick="burger()">&times;</span>
			<ul class="nav_ul">
        <li><a href="index.php" class="links nav-links">
          <span class="material-icons material-icon">account_circle</span>
          <span class="mt-aside">Hi <?php echo $_SESSION['firstname']; ?></span></a></li>
				<li><a href="titles.php" class="links nav-links">
          <span class="material-icons material-icon">menu_book</span>
          <span class="mt-aside">Read Stories</span></a></li>
				<li><a href="logout_script.php" class="links nav-links">
          <span class="material-icons material-icon">exit_to_app</span>
          <span class="mt-aside">Logout</span></a></li>

			</ul>
		</div>

<!-- ------------------------------ -->

<?php } else {  ?>

      <div class="navbar-l">
				<a href="login.php" class="links">Login</a>
				<a href="register.php" class="links">Register</a>
			</div>

			<div class="navbar-r">
				<a class="menu-link links" href="titles.php">Read Stories</a>
			</div>
		</div>
	</div>

		<div class="sidebar-navbar" style="">
			<span class="cbtn" onclick="burger()">&times;</span>
			<ul class="nav_ul">
				<li><a href="login.php" class="links nav-links">
          <span class="material-icons material-icon">login</span>
          <span class="mt-aside">Login</span></a></li>
				<li><a href="register.php" class="links nav-links">
          <span class="material-icons material-icon">account_circle</span>
          <span class="mt-aside">Register</span></a></li>
				<li><a href="titles.php" class="links nav-links">
          <span class="material-icons material-icon">menu_book</span>
          <span class="mt-aside">Read Stories</span></a></li>
			</ul>
		</div>


    <?php  }  ?>


	<div id="clear"></div>
