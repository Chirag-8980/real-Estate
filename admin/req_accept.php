<?php
    session_start();
    require("config.php");
    $pid = $_GET['pid'];
    $query="UPDATE tblhouse SET qc= 1 WHERE pid=$pid ";
    $result=mysqli_query($con , $query);
    if($result){
        $msg='<div class="alert alert-success alert-dismissible fade show" role="alert">Contact Delete Successfully<button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>';
        header("Location:proerty_req.php?msg=$msg");
    }
    else{
        $msg='<div class="alert alert-success alert-dismissible fade show" role="alert">Contact Delete Successfully<button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>';
        header("Location:proerty_req.php?msg=$msg");
    }
    header('location:property_req.php');
?>