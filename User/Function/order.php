<?php
    session_start();
    include('../config/config.php');

    if(isset($_POST['submit'])){
        $status = $_POST['status'];
        $reason = $_POST['reason'];
        $bid = $_GET['bid'];
        $queary = mysqli_query($con , "UPDATE `tblpbooking` SET `status`='$status',`reason`='$reason' WHERE bid = $bid");
        if($queary){
            header('location:../property_order.php');
        }
    }
?>