<?php
    session_start();
    include('../config/config.php');
    require './sendmail.php';

    if(isset($_POST['submit'])){
        $status = $_POST['status'];
        $reason = $_POST['reason'];
        $bid = $_GET['bid'];
        $queary = mysqli_query($con , "UPDATE `tblpbooking` SET `status`='$status',`reason`='$reason' WHERE bid = $bid");
        if($queary){
                $b_email = mysqli_fetch_array(mysqli_query($con , "select * from tblpbooking where bid = $bid"));  
                $email = $b_email['email'];
                $sub = "Booking Reqest From Seller";
                $msg = "Booking Done ya Reject";
                $sendmail = SendMail($email , $sub , $msg);
                header('location:property_order.php');
            }
        }
?>