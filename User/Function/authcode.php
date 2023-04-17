<?php
session_start();
include('../config/config.php');

if (isset($_POST['reg_btn'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mno = $_POST['mno'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $pattern = '/^[6-9]\d{9}$/';

    // Validate the email field
    if (empty($email)) {
        $_SESSION['message'] = 'Email is required.';
        header('Location: ../register.php');
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Invalid email format';
        header('Location: ../register.php');
        exit();
    }
    if (empty($uname)) {
        $_SESSION['message'] = 'Name is required.';
        header('Location: ../register.php');
        exit();
    }
    if (empty($mno)) {
        $_SESSION['message'] = 'Mobile is required.';
        header('Location: ../register.php');
        exit();
    }else if  (!preg_match($pattern, $mno)) {
        $_SESSION['message'] = 'Invalid Mobile number format [ 10 digit number valid ]';
        header('Location: ../register.php');
        exit();
    }
    if (empty($password)) {
        $_SESSION['message'] = 'Password is required.';
        header('Location: ../register.php');
        exit();
    }

    $check_email = "select uid from user where email='$email'";
    $check_email_run = mysqli_num_rows(mysqli_query($con, $check_email));
    if ($check_email_run > 0) {
        $_SESSION['message'] = "Email Already Exist";
        header('location: ../register.php');
    } else {
        if ($password == $cpassword) {
            $password = password_hash($password, PASSWORD_BCRYPT);
            $insert_user = "INSERT INTO `user`(`uname`, `mno`, `email`, `password`) VALUES ('$uname','$mno','$email','$password')";
            $check = mysqli_query($con, $insert_user);
            if ($check) {
                $get_uid = "select * from user where email ='$email' and password='$password'";
                $uid1 = mysqli_fetch_array(mysqli_query($con, $get_uid));
                $_SESSION['message'] = "Registration Successfully...";
                $_SESSION['uid'] = $uid1['uid'];
                header('location: ../login.php');
            }
        } else {
            $_SESSION['message'] = "Confirm Password Is Not Match";
            header('location: ../register.php');
        }
    }
}
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $inputPassword = $_POST['password'];
    // Validate the email field
    if (empty($email)) {
        $_SESSION['message'] = 'Email is required.';
        header('Location: ../login.php');
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Invalid email format';
        header('Location: ../login.php');
        exit();
    }
    $query = "SELECT password FROM user WHERE email = '$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedHashedPassword = $row["password"];

        if (password_verify($inputPassword, $storedHashedPassword)) {
            $uname_query = "select * from user where email ='$email'";
            $uname = mysqli_query($con, $uname_query);
            $uname1 = mysqli_fetch_array($uname);
            $_SESSION['uname'] = $uname1['uname'];
            $_SESSION['uid'] = $uname1['uid'];
            $_SESSION['email'] = $uname1['email'];
            header('location: ../index.php');
        } else {
            $_SESSION['message'] = "Invalid Email Or Password";
            header('location: ../login.php');
        }
    } else {
        $_SESSION['message'] = "Invalid Email Or Password";
        header('location: ../login.php');
    }
}
