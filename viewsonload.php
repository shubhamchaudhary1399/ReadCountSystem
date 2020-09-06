<?php require("includes/common.php");
if(!isset($_SESSION['email'])){
    header('location: login.php');
  }

    if(isset($_REQUEST['id'])){
      $story_id = $_REQUEST['id'];
    }
    $query = "SELECT currentviews FROM stories WHERE id ='" . $story_id . "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);

    $read = $row['currentviews'] + 1;
    $query2 = "UPDATE stories SET currentviews = '$read' WHERE id ='" . $story_id . "'";
    $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
    echo 'user added successfully';
?>
