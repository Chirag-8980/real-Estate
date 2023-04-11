<?php
    session_start();
    include('./config/config.php');
    $uid = $_SESSION['uid'];
    $select_qur="select * from user where uid='$uid'";
    $query = mysqli_query($con , $select_qur);
    $data=mysqli_fetch_array($query);

    if(isset($_POST['edit_btn'])){
        $uid =$_SESSION['uid'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $mno = $_POST['mno'];
        $address = $_POST['address'];
        $instagram = $_POST['instagram'];
        $twitter = $_POST['twitter'];
        $facebook = $_POST['facebook'];

        $update_q = "UPDATE `user` SET `uname`='$uname',`mno`='$mno',`address`='$address',`instagram`='$instagram',`facebook`='$facebook',`twitter`='$twitter' WHERE `uid`='$uid' ";
        $update_q_run =mysqli_query($con , $update_q);
        if($update_q_run){
            $_SESSION['msg'] = "Profile Update Successful";
            $_SESSION['status'] = "success";
            header('location:profile.php');
        }else{
            $_SESSION['msg'] = "Profile Update Failed";
            $_SESSION['status'] = "error";
            header('location:edit_profile.php');
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .upload{
      width: 140px;
      position: relative;
      margin: auto;
      text-align: center;
      }
</style>
<body class=" bg-white" >

    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <?php include('../User/include/spinner.php')?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('../User/include/header.php')?>
        <!-- Navbar End -->


        
        <div class="container mt-5">
            <div class="text-center mx-auto mb-5 text-black wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px;">
                <h1 class="mb-3 text-black pb-2" style="border-bottom: 2px solid var(--tan);">Profile</h1>
            </div>
        </div>

        <div class="profile">
            <div class="container">
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                       
                                            <img src="img/user/<?php echo $data['img']; ?>" class="upload"  id="image" >
                                        <div class="mt-3">
                                            <h4><?php echo $data['uname']?></h4>
                                            <p class="text-dark mb-1"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <ul class="list-group list-group-flush">

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Twitter</h6>
                                        <span class="text-dark"><?php echo $data['twitter']?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Instagram</h6>
                                        <span class="text-dark"><?php echo $data['instagram']?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Facebook</h6>
                                        <span class="text-dark"><?php echo $data['facebook']?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="edit_profile.php" method="post">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="uname"
                                                    value="<?php echo $data['uname']?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Mobile</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="mno"
                                                    value="<?php echo $data['mno']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="address"
                                                    value="<?php echo $data['address']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Instagram</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="instagram"
                                                    value="<?php echo $data['instagram']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Twitter</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="twitter"
                                                    value="<?php echo $data['twitter']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Facebook</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="facebook"
                                                    value="<?php echo $data['facebook']?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" name="edit_btn"
                                                    value="Save Changes">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>
</html>