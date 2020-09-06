<?php require("includes/common.php");
if(!isset($_SESSION['email'])){
    header('location: login.php');
    }

  if(isset($_GET['id'])){
    $story_id = $_GET['id'];
  }

  $query = "SELECT title, readcount, currentviews, story FROM stories WHERE id ='" . $story_id . "'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $row = mysqli_fetch_array($result);

  $read = $row['readcount'] + 1;
  $query1 = "UPDATE stories SET readcount = '$read' WHERE id ='" . $story_id . "'";
  $result1 = mysqli_query($con, $query1)or die($mysqli_error($con)); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Story | ReadCount</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/story.css">
  <script type="text/javascript">
  
    var id = <?php echo $story_id; ?>;
    window.onload = function() {
      console.log(id);
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
      }
      };
      xhttp.open("GET", "viewsonload.php?id=" + id, true);
      xhttp.send();
    }


    window.addEventListener("unload", function(){
      navigator.sendBeacon("viewsonunload.php?id=" + id);
    });

  </script>

</head>
<body >
	<?php include 'includes/navbar.php'; ?>

   <div class="container" style="margin-bottom: 20px;">
     <div class="jumbotron">
       <div class="shead">
         <h2><?php echo $row['title'] ?></h2>
       </div>
       <div class="tviews">
         <span>Total Views: <?php echo $row['readcount'] + 1; ?> | </span>
         <span>Current Views: <?php echo $row['currentviews'] + 1; ?></span>
       </div>
     </div>
     <div class="text">
       <?php echo $row['story']; ?>
     </div>
   </div>
	<?php include 'includes/footer.php' ?>
</body>
</html>
