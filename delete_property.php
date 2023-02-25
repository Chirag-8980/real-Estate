<?php
    session_start();
    include('./config/config.php');
    $pid=$_GET['pid'];
    
    $delete_q = mysqli_query($con ,"DELETE FROM `tblhouse` WHERE pid='$pid'");
    if($delete_q){
        echo "Success";
        header('location:user-property.php');
    }
    else{
        echo "Failed";
    }
    
    
?>