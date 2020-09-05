<?php require("includes/common.php");
if(!isset($_SESSION['email'])){
    header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Story | ReadCount</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/story.css">
  <script type="text/javascript" src="js/story.js"></script>
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <?php
    if(isset($_GET['id'])){
      $story_id = $_GET['id'];
    }

    $query = "SELECT title, readcount, story FROM stories WHERE id ='" . $story_id . "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);

    $read = $row['readcount'] + 1;
    $query1 = "UPDATE stories SET readcount = '$read' WHERE id ='" . $story_id . "'";
    $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
   ?>
   <div class="container" style="margin-bottom: 20px;">
     <div class="jumbotron">
       <div class="shead">
         <h2><?php echo $row['title'] ?></h2>
       </div>
       <div class="tviews">
         <span>Total Views: <?php echo $row['readcount']; ?> | </span>
         <span>Current Views:</span>
       </div>
     </div>
     <div class="text">
       <?php echo $row['story']; ?>
     </div>
   </div>
	<?php include 'includes/footer.php' ?>
</body>
</html>
