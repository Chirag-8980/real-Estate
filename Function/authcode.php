<?php
session_start();
include('../config/config.php');

if(isset($_POST['reg_btn'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $mno=$_POST['mno'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $check_email="select uid from user where email='$email'";
    $check_email_run=mysqli_num_rows( mysqli_query($con , $check_email));
        if($check_email_run > 0){
            $_SESSION['msg']= "Email Already Exist";
            header('location: ../login.php');
        }
        else{
            if($password == $cpassword){
                $insert_user="INSERT INTO `user`(`uname`, `mno`, `email`, `password`,`designation`,`instagram`,`facebook`,`twitter`) VALUES ('$uname','$mno','$email','$password','designation','instagram','facebook','twitter')";
                $check = mysqli_query($con , $insert_user);
                    if($check){
                        $get_uid="select * from user where email ='$email' and password='$password'";
                        $uid1 =mysqli_fetch_array( mysqli_query($con , $get_uid));
                        $_SESSION['msg']="Registration Successfully...";
                        $_SESSION['uid'] = $uid1['uid'];
                        header('location: ../index.php');
                    }
            }else{
                $_SESSION['msg']= "Confirm Password Is Not Match";
                mysql_error();
                header('location: ../login.php');
            }
        }

}
if(isset($_POST['login_btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $login_query="select uid from user where email='$email' and password='$password'";
    $check = mysqli_query($con , $login_query);

    if(mysqli_num_rows($check) > 0){
        $uname_query="select * from user where email ='$email' and password='$password'";
        $uname = mysqli_query($con , $uname_query);
        $uname1 = mysqli_fetch_array($uname);
        // $uname =mysqli_fetch_array(mysqli_query($con , $uname_query));
        $_SESSION['uname'] = $uname1['uname'];
        $_SESSION['uid'] = $uname1['uid'];
        $_SESSION['email'] = $uname1['email'];
        header('location: ../index.php');
    }
    else{
        $_SESSION['msg']="Invalid Information";
        header('location: ../login.php');
    }
}


?>