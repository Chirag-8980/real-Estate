<?php
    session_start();
    require("config.php");
    if(isset($_POST['res']))
    {
        $response=$_POST['response'];
        $pid = $_GET['pid']; 
        if($response)
        {
            $sql="UPDATE `tblhouse` SET `response`='$response WHERE `pid`='$pid'";
            $result=mysqli_query($con,$sql);
            unset($_SESSION['id']);
            if($result)
                {
                    $msg='Response Added Successsfully';		
                }
                else
                {
                    $error='Not Response Added Successsfully';
                }
        }
        else{
            $error="* Please Fill all the Fields!";
        }
        
    }
?>