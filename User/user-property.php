<?php
    session_start();
    include('./config/config.php');
    $uid=$_SESSION['uid'];
    $select_q="select * from tblhouse where uid='$uid'";
    $query=mysqli_query($con,$select_q);

    $show = true ;
?>
<!DOCTYPE html>
<html lang="en">

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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

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
        <?php include('../User/include/spinner.php')?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('../User/include/header.php')?>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated text-black fadeIn mb-4">Your Property</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a class="text-tan" href="#">Home</a></li>
                            <li class="breadcrumb-item text-body text-black active"><a href="#">Your Property</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->

        <div class="container mt-5">
            <div class="text-center mx-auto mb-5 text-black wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px;">
                <h1 class="mb-3 text-black pb-2" style="border-bottom: 2px solid var(--tan);">Listed Property</h1>
            </div>
        </div>

        <!-- Property List Start -->
        <div class="container table-responsive">

            <div class="row mb-2">
                <?php
                
                while ($data=mysqli_fetch_array($query)) {
                    $show = false;   ?>
                <div class="col-md-6">
                    <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $data['ptype']; ?></strong>
                            <h3 class="mb-0" id="title" ><?php echo substr($data['ptitle'] ,0 , 35) ; ?>...</h3>
                            <span class="mb-1 text-success bold fw-bold">₹<?php echo $data['price']; ?></span>
                            <p class="card-text mb-auto">
                                
                            <?php if($data['qc'] == 'Success') {
                             echo '<b>Listing : </b> <span class="mb-1 text-success bold fw-bold">Success</span> '; 
                            }elseif($data['qc'] == 'Reject'){
                                echo '<b>Listing : </b> <span class="mb-1 text-danger bold fw-bold">Reject</span> ';
                            }else{
                                echo '<b>Listing : </b> <span class="mb-1 text-warning bold fw-bold">Pending</span> ';
                            }
                                ?>
                            
                            
                            <div class="d-flex text-light">
                                <button type="button" class="btn me-2 btn-success"><a
                                        href="./update_property.php?pid=<?php echo $data['pid']?>">Update</a></button>
                                <button type="button" class="btn ms-2 btn-danger"><a
                                        href="./delete_property.php?pid=<?php echo $data['pid']?>">Delete</a></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <a href="./property_details.php?pid=<?php echo $data['pid']?>">
                                <img src="../admin/img/Property_image/house/<?php echo $data['img1']; ?> " width="200"
                                    height="250" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php if($show) {?>
            <div class="container mt-2">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3  text-muted pb-2">No Property Listed Here...</h3>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- Property List End-->

        <!-- Footer Start -->
        <?php include('../User/include/footer.php')?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <?php include('../User/include/top.php')?>
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