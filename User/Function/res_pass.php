<?php
    session_start();
    include('../config/config.php');
    require 'sendmail.php';

    if(isset($_POST['btn_otp'])){
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        $mno = $_POST['mno'];

        $query="select uid from user where email='$email' and mno='$mno'";
        $result= mysqli_num_rows(mysqli_query($con , $query));
        if($result > 0){
            $otp = rand(99999,999999);
            $_SESSION['otp'] = $otp;
            $sub = "Reset Password";
            $msg = "Your otp is $otp for reset password";
            $sendmail = SendMail($email , $sub , $msg);
            $_SESSION['message']= "Email Send SuccessFull...";
            header("location: ../verify.php");
        }
        else{
            $_SESSION['message']= "User Not Found...!";
            header("location: ../resetpass.php");
        }

    }

    if(isset($_POST['btn_res'])){
        $otp = $_SESSION['otp'];
        $r_otp = $_POST['otp'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $email = $_SESSION['email'];
        
        if($otp == $r_otp){
            if($pass == $cpass){
                $get_uid="select * from user where email ='$email'";
                $uid1 =mysqli_fetch_array( mysqli_query($con , $get_uid));
                $_SESSION['uid'] = $uid1['uid'];
                $uid =$_SESSION['uid'];
                $pass = password_hash($pass , PASSWORD_BCRYPT);
                $query="update user set password='$pass' where uid='$uid'";
                $result=mysqli_query($con , $query);
                if($result){
                    unset($SESSION['uid']);
                    unset($SESSION['email']);
                    $_SESSION['message']= "Password Reset SuccessFull";
                    header("location: ../login.php");
                }else{
                    $_SESSION['message']= "password is not reset";
                    header("location: ../resetpass.php");
                }
            }else{
                $_SESSION['message']= "Confirm Password is not match...!!";
                header("location: ../resetpass.php");
            }
        }
        else{
            $_SESSION['message']= "OTP is not match...!";
            header("location: ../resetpass.php");
        }
    }
?>