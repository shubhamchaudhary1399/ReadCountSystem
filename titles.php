<?php require("includes/common.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Story Titles | ReadCount</title>
	<?php include 'includes/head.php' ?>
	<link rel="stylesheet" type="text/css" href="css/titles.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <div class="container-fluid my-font">
    <div class="jumbotron" style="background: #f2f2f2;">
      <h2 style="text-align: center;">Welcome to the Read Count System. Read a story now!</h2>
      <p style="text-align: center;">We have a large collection of stories of all themes.</p>
    </div>

		<?php
		$query = "SELECT id, title, img, readcount FROM stories";
		$result = mysqli_query($con, $query)or die($mysqli_error($con));
		if(mysqli_num_rows($result) >= 1){
			$count = 1;
			while($row = mysqli_fetch_array($result)){
				if($count == 1){
					echo "<div class=\"row justify-content-center py-4\">";
				}
				$picture = "'uploads/".$row['img']."'";
				echo "<div class=\"col-lg-3 col-md-6 cd-column\"><div class=\"card my-cd\" style=\"width: 18rem;\">";
				echo "<img class=\"card-img-top\" src=". $picture. " alt=\"Card image cap\">";
				echo "<div class=\"card-body\">";
				echo "<h5 class=\"card-title\">". $row['title'] ." </h5>";
        echo "<p class=\"card-text\"><span class=\"material-icons\">remove_red_eye</span><span class=\"readviews\">". $row['readcount'] ."</span></p></div>";
				echo "<ul class=\"list-group list-group-flush\"></ul>";
				if(!isset($_SESSION['email'])){
					echo "<a href=\"login.php\" class=\"btn btn-default food-btn\" >Read Full Story</a>";
				}
				else{
					$val = 'story.php?id='.$row['id'];
					echo "<a href=". $val ." class=\"btn btn-default food-btn\" >Read Full Story</a>";
				}
				echo "</div></div>";
				if($count == 4){
					echo "</div>";
					$count = 1;
				}
				else{
					$count += 1;
				}
			}
		}
		?>


  </div>
</div>
	<?php include 'includes/footer.php' ?>
</body>
</html>
