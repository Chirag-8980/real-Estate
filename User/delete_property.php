<?php
    session_start();
    include('./config/config.php');
    $pid=$_GET['pid'];
    
    $delete_q = mysqli_query($con ,"DELETE FROM `tblhouse` WHERE pid='$pid'");
    if($delete_q){
        $_SESSION['msg'] = "Property Delete Successful";
		 $_SESSION['status'] = "success";
        header('location:user-property.php?filter=""');
    }
    else{
        $_SESSION['msg'] = "Property Delete Failed";
	    $_SESSION['status'] = "error";
    }
    
    
?>