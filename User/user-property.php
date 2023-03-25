<?php
session_start();
include('./config/config.php');
$uid = $_SESSION['uid'];
$show = true;

switch ($_GET['filter']) {
    case 'pending':
        $select_q = "select * from tblhouse where uid='$uid' AND qc='pending'";
        $query = mysqli_query($con, $select_q);
        break;
    case 'success':
        $select_q = "select * from tblhouse where uid='$uid' AND qc='success'";
        $query = mysqli_query($con, $select_q);
        break;
    case 'reject':
        $select_q = "select * from tblhouse where uid='$uid' AND qc='reject'";
        $query = mysqli_query($con, $select_q);
        break;
    case 'sell':
        $select_q = "select * from tblhouse where uid='$uid' AND stype='sell'";
        $query = mysqli_query($con, $select_q);
        break;
    case 'rent':
        $select_q = "select * from tblhouse where uid='$uid' AND stype='rent'";
        $query = mysqli_query($con, $select_q);
        break;
    case 'booked':

        break;
    default:
        $select_q = "select * from tblhouse where uid='$uid'";
        $query = mysqli_query($con, $select_q);
}

?>
<!DOCTYPE html>
<html lang="en" style="background: white;">

<head>
    <meta charset="utf-8">
    <title>Locus - Find Your Dream</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/alert.css">
</head>

<body>
    <div class=" bg-white p-0">
        <!-- Spinner Start -->
        <?php include('../User/include/spinner.php') ?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('../User/include/header.php') ?>
        <!-- Navbar End -->


        <div class="container mt-5">
            <div class="text-center mx-auto mb-5 text-black wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3 text-black pb-2" style="border-bottom: 2px solid var(--tan);">Listed Property</h1>
            </div>
        </div>
        <div class="container my-4">
            <ul class="navbar-nav d-flex flex-row justify-content-around">
                <div class="d-flex flex-row justify-content-around border border-2 rounded-pill p-2 border-dark">
                    <li class="">
                        <a class="btn border border-2 rounded-pill border-dark text-black  <?php if ($_GET['filter'] == 'all') {
                                                                                                echo "bg-tan";
                                                                                            } ?> " style="width: 8rem;" aria-current="page" href="user-property.php?filter=all">All</a>
                    </li>
                </div>
                <div class="d-flex flex-row justify-content-around border border-2 rounded-pill p-2 border-dark">

                    <li class=" ">
                        <a class="btn border border-2 mx-1 rounded-pill border-dark  text-black <?php if ($_GET['filter'] == 'success') {
                                                                                                    echo "bg-tan";
                                                                                                } ?> " style="width: 8rem;" href="user-property.php?filter=success">Success</a>
                    </li>
                    <li class=" ">
                        <a class="btn border border-2 mx-1 rounded-pill border-dark  text-black <?php if ($_GET['filter'] == 'pending') {
                                                                                                    echo "bg-tan";
                                                                                                } ?> " style="width: 8rem;" href="user-property.php?filter=pending">Pending</a>
                    </li>
                    <li class="  ">
                        <a class="btn border border-2 rounded-pill mx-1 border-dark  text-black <?php if ($_GET['filter'] == 'reject') {
                                                                                                    echo "bg-tan";
                                                                                                } ?> " style="width: 8rem;" href="user-property.php?filter=reject">Rejected</a>
                    </li>
                </div>
                <div class="d-flex flex-row justify-content-around border border-2 rounded-pill p-2 border-dark">
                    <li class=" ">
                        <a class="btn border border-2 mx-1 rounded-pill border-dark  text-black  <?php if ($_GET['filter'] == 'sell') {
                                                                                                        echo "bg-tan";
                                                                                                    } ?>" style="width: 8rem;" href="user-property.php?filter=sell">Sell</a>
                    </li>
                    <li class="">
                        <a class="btn border border-2 rounded-pill mx-1 border-dark  text-black <?php if ($_GET['filter'] == 'rent') {
                                                                                                    echo "bg-tan";
                                                                                                } ?> " style="width: 8rem;" href="user-property.php?filter=rent">Rent</a>
                    </li>
                </div>
                <div class="d-flex flex-row justify-content-around border border-2 rounded-pill p-2 border-dark">
                    <li class=" ">
                        <a class="btn border border-2 rounded-pill border-dark  text-black <?php if ($_GET['filter'] == 'booked') {
                                                                                                echo "bg-tan";
                                                                                            } ?> " style="width: 8rem;" href="user-property.php?filter=booked">Booked</a>
                    </li>
                </div>
            </ul>
        </div>

        <!-- Property List Start -->
        <div class="container table-responsive">

            <div class="row mb-2">
                <?php

                while ($data = mysqli_fetch_array($query)) {
                    $show = false;   ?>
                    <div class="col-md-6">
                        <div class="row g-0 border  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                            <div class="col p-4 d-flex flex-column position-static">
                                <div class="d-flex flex-row">
                                    <strong class="d-inline-block mb-2 text-primary"><?php echo $data['ptype']; ?></strong>
                                   <span class="badge bg-info text-dark d-inline-block mb-3 ms-2 text-primary"><?php echo $data['stype']; ?>
                                </div>
                                <h3 class="mb-0" class="text-black" id="title"><?php echo substr($data['ptitle'], 0, 35); ?>...</h3>
                                <span class="mb-1 text-success bold fw-bold">₹<?php echo $data['price']; ?></span>
                                <p class="card-text mb-auto">

                                    <?php if ($data['qc'] == 'Success') {
                                        echo '<b>Listing : </b> <span class="mb-1 text-success bold fw-bold">Success</span> ';
                                    } elseif ($data['qc'] == 'Reject') {
                                        echo '<b>Listing : </b> <span class="mb-1 text-danger bold fw-bold">Reject</span> ';
                                    } else {
                                        echo '<b>Listing : </b> <span class="mb-1 text-warning bold fw-bold">Pending</span> ';
                                    }
                                    ?>


                                <div class="d-flex text-light">
                                    <button type="button" class="btn me-2 btn-success"><a href="./update_property.php?pid=<?php echo $data['pid'] ?>">Update</a></button>
                                    <button type="button" class="btn ms-2 btn-danger"><a href="./delete_property.php?pid=<?php echo $data['pid'] ?>">Delete</a></button>
                                </div>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <a href="./property_details.php?pid=<?php echo $data['pid'] ?>">
                                    <img src="../admin/img/Property_image/house/<?php echo $data['img1']; ?> " width="200" height="250" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if ($show) { ?>
                <div class="container mt-2">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-3  text-muted pb-2">No Property Listed Here...</h3>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Property List End-->


        <!-- Back to Top -->
        <?php include('../User/include/top.php') ?>
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
    <script>
        var Title = document.getElementById('title').value;
    </script>
</body>

</html>