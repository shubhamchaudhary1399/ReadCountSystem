<?php
    $con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6c5b928cdb5f4", "ea33c062", "heroku_00fd55b5feb6384")
    // $con = mysqli_connect("localhost", "root", "", "readcounter")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
