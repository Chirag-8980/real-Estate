<?php

require("config.php");
    $pid = $_GET['pid'];
    if (isset($_POST['res'])) {
            $response = $_POST['response'];
            $sql = "UPDATE `tblhouse` SET `response`='$response' , `qc`='Reject' WHERE `pid`='$pid' ";
            $result = mysqli_query($con, $sql);
            // unset($_SESSION['id']);
            if ($result) {
                $_SESSION['msg']="Rejected Succesfully";
                $_SESSION['status']="success";
                header('location:property_req.php');
            } else {
                $_SESSION['msg']="Some Error In Reject Property";
                $_SESSION['status']="error";
            }
        } else {
            $_SESSION['msg']="Add Some Reponce In Textbox";
                $_SESSION['status']="error";
        }
?>