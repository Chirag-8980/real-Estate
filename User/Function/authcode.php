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
                $password = password_hash($password , PASSWORD_BCRYPT);
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
    $email = $_POST['email'];
    $inputPassword = $_POST['password'];

    $query = "SELECT password FROM user WHERE email = '$email'";
    $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $storedHashedPassword = $row["password"];
            
        if (password_verify($inputPassword, $storedHashedPassword)) {
            $uname_query="select * from user where email ='$email'";
            $uname = mysqli_query($con , $uname_query);
            $uname1 = mysqli_fetch_array($uname);
            $_SESSION['uname'] = $uname1['uname'];
            $_SESSION['uid'] = $uname1['uid'];
            $_SESSION['email'] = $uname1['email'];
            header('location: ../index.php');
        } else {
            $_SESSION['msg']="Invalid password";
            header('location: ../login.php');
        }
    } else {
    // User not found, deny access
    }

    // $email=$_POST['email'];
    // $password=$_POST['password'];
    // $u_pass = password_hash($password , PASSWORD_BCRYPT);

    // $login_query="select * from user where email='$email' and password='$u_pass'";
    // $query= mysqli_query($con , $login_query);
    // $data = mysqli_fetch_array($query);

    // if( mysqli_num_rows($query) > 0){
    //     $d_pass = $data['password'];
    //     $pass_check = password_verify($d_pass ,$u_pass );
    //     if($pass_check){
    //         $uname_query="select * from user where email ='$email' and password='$password'";
    //         $uname = mysqli_query($con , $uname_query);
    //         $uname1 = mysqli_fetch_array($uname);
    //         $_SESSION['uname'] = $uname1['uname'];
    //         $_SESSION['uid'] = $uname1['uid'];
    //         $_SESSION['email'] = $uname1['email'];
    //         header('location: ../index.php');
    //     }
    //     else{
    //         $_SESSION['msg']="Invalid password";
    //         header('location: ../login.php');
    //     }
    // }
    // else{
    //     $_SESSION['msg']="Invalid Information";
    //     header('location: ../login.php');
    // }
}

?>