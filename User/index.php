<?php
    session_start();
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
                    <h1 class="display-5 animated fadeIn text-black mb-4">Find A <span class="text-tan">Perfect
                            Home</span> To
                        Live With Your Family</h1>
                    <p class="animated fadeIn mb-4 text-black pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                        stet
                        sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                    <a href="" class="btn py-3 bg-tan text-black px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <?php include('../User/include/search.php')?>
        <!-- Search End -->


        <!-- Category Start -->
        <?php include('../User/include/category.php')?>
        <!-- Category End -->

        <!-- About Start -->
        <?php include('../User/include/about.php')?>
        <!-- About End -->


        <!-- Property List Start -->
        <?php include('../User/include/p_list.php')?>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <?php include('../User/include/contact.php')?>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <?php include('../User/include/team.php')?>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <?php include('../User/include/feedback.php')?>
        <!-- Testimonial End -->


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
</body>

</html>