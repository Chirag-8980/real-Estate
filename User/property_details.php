<?php
    session_start();
    include('./config/config.php');
    $pid=$_GET['pid'];
    $data=mysqli_fetch_array(mysqli_query($con , "select * from tblhouse where pid='$pid'"));

    $uid= $data['uid'];
    $user_data=mysqli_fetch_array(mysqli_query($con , "select * from user where uid='$uid'"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <title>Property Details</title>
</head>

<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <?php include('../User/include/spinner.php')?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('../User/include/header.php')?>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mt-5 text-black mb-4">Property Details</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a class="text-tan" href="#">Home</a></li>
                            <li class="breadcrumb-item text-body text-black active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="" style="height: 44vh; width: 100%;">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- property details Start -->
        <div class="container">
            <div class="row text-center border">
                <div class="col-12 border border-primary">
                    <div class="container mt-5">

                        <div id="carouselExampleIndicators" class="carousel slide h-50">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item border border-dark active">
                                    <img src="../admin/img/Property_image/<?php echo $data['img1']?>" height="600vh"
                                        width="75%" class="d-block " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../admin/img/Property_image/<?php echo $data['img2']?>" height="600vh"
                                        width="600vh" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../admin/img/Property_image/<?php echo $data['img3']?>" height="600vh"
                                        width="600vh" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../admin/img/Property_image/<?php echo $data['img4']?>" height="600vh"
                                        width="600vh" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- <div class="col">
                    2 of 2
                </div> -->
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="p-4 text-start">
                        <a class="d-block h5 mb-2 text-black" href=""><?php echo $data['ptitle']?></a>
                        <p><i class="fa fa-map-marker-alt text-tan me-2"></i><?php echo $data['paddress']?></p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-4 text-end">
                        <a class="d-block h5 mb-2 text-black">₹ <?php echo $data['price']?></a>
                        <p></i>Price</p>
                    </div>
                </div>
                <div class="col">
                    3 of 3
                </div>
            </div>
            <div class="row container">
                <div class="col-8">
                    <table class="table text-center table-warning table-striped">
                        <thead>
                            <tr>
                                <th scope="col" colspan="6">About House</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">SQFT</th>
                                <th>BEDROOM</th>
                                <th>BATHROOM</th>
                                <th>HALL</th>
                                <th>KITCHEN</th>
                                <th>BALCONY</th>
                            </tr>
                            <tr>
                                <td scope="row"><?php echo $data['sqft']?></td>
                                <td><?php echo $data['bedroom']?></td>
                                <td><?php echo $data['bathroom']?></td>
                                <td><?php echo $data['hall']?></td>
                                <td><?php echo $data['kitchen']?></td>
                                <td><?php echo $data['balcony']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row container">
                <div class="col-8 mt-4">
                    <h4 class="animated text-black fadeIn mb-3" style="border-bottom: 2px solid var(--tan);">Basic
                        Information</h4>
                    <table class="table text-center table-warning table-striped">

                        <tbody>
                            <tr>
                                <th scope="row" class="text-end">BHK:</th>
                                <td><?php echo $data['bhk']?></td>
                                <th class="text-end">PROPERTY TYPE:</th>
                                <td><?php echo $data['ptype']?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-end">FLOOR:</th>
                                <td><?php echo $data['floor']?></td>
                                <th class="text-end">TOTAL FLOOR:</th>
                                <td><?php echo $data['tfloor']?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-end">CITY:</th>
                                <td><?php echo $data['city']?></td>
                                <th class="text-end">STATE:</th>
                                <td><?php echo $data['state']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row container">
                <div class="col-8 mt-4">
                    <h4 class="animated text-black fadeIn mb-3" style="border-bottom: 2px solid var(--tan);">
                        Description</h4>
                    <p>
                        <?php echo $data['description']?>
                    </p>
                </div>
            </div>
            <div class="row container">
                <div class="col-8 mt-4">
                    <h4 class="animated text-black fadeIn mb-3" style="border-bottom: 2px solid var(--tan);"> Contact
                        Agent</h4>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="./img/team-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-black"><?php echo $user_data['uname']?></h5>
                                    <p class="card-text"><?php echo $user_data['mno']?></p>
                                    <p class="card-text"><?php echo $user_data['email']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

</html>