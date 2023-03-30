<?php
session_start();
include('./config/config.php');

if(isset($_POST['pmtid']) && isset($_POST['amt']) )
{
    $pstatus = "Paid";
    $pmtid = $_POST['pmtid'];
    $amount = $_POST['amt'];
    $uid = $_SESSION['uid'];
    $pid = $_GET['pid'];
    $sql = "INSERT INTO `tblpmt`( `pid`,`uid`,`pmtid`, `amt`) VALUES ('$pid','$uid','$pmtid','$amount')";
    $res = mysqli_query($con, $sql);

}

?>