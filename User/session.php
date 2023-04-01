<?php
    session_start();
    print_r($_SESSION);
    include('./config/config.php');
    include('./config/config.php');
    $query = mysqli_fetch_all(mysqli_query($con , "select * from tblplan"));
    print_r($query);
?>