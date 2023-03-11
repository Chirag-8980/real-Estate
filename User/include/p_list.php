<?php
    include('./config/config.php');
    $select_q="select * from tblhouse where qc=1";
    $query=mysqli_query($con,$select_q);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate php</title>
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <title>Propety List</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start text-black mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3 text-black">Property Listing</h1>
                        <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero
                            ipsum sit eirmod sit diam justo sed rebum.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn text-black bg-tan" data-bs-toggle="pill" href="#tab-1">Featured</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn text-black bg-tan " data-bs-toggle="pill" href="#tab-2">For Sell</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn text-black bg-tan" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php while ($data=mysqli_fetch_array($query)) { ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            
                                <div class="card h-100 cardcolor" style="border-radius: 10px;">
                                    <!-- <a href=""><img  class="img-fluid rounded" style="position: relative; height: 300px; width:408px" src="./Admin/Img/Property_image/<?php echo $data['img1']; ?>" alt="">
                                    </a> -->
                                    
                        <div id="carouselExampleIndicators" class="carousel slide">
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
                            <div class="carousel-inner" style="height: 300px; max-width: 100%; border-radius: 10px;">
                                <div class="carousel-item active">
                                    <img src="../Admin/Img/Property_image/<?php echo $data['img1']?>" height="600vh" width="600vh" class="d-block"> alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../admin/Img/Property_image/<?php echo $data['img2']?>" height="600vh" width="600vh" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../admin/Img/Property_image/<?php echo $data['img3']?>" height="600vh" width="600vh" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../admin/Img/Property_image/<?php echo $data['img4']?>" height="600vh" width="600vh" class="d-block w-100" alt="...">
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
                                    <a href="User\include\wlist.php"><i class="bi bi-heart" class="heart_icon" style="position:absolute; top:24px ;right:36px;font-size:22px"></i></a>
                                  <div class="card-body p-2">
                                   
                                    <div
                                        class="bg-black rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        <?php echo $data['stype']; ?></div>
                                    <div
                                        class="bg-white rounded-top text-black position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        <?php echo $data['ptype']; ?></div>
                                </div>
                                <div class="px-4 pb-0">
                                   
                                    <a class="d-block h5 mb-3 text-black" href="./property_details.php?pid=<?php echo $data['pid']?>"><?php echo $data['ptitle']; ?></a>
                                    <p><i class="fa fa-map-marker-alt text-tan me-2"></i><?php echo $data['paddress']; ?></p>
                                    <h5 class="text-tan mb-3">₹ <?php echo $data['price']; ?></h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center text-black border-end py-2"><i
                                            class="fa fa-ruler-combined text-tan me-2"></i><?php echo $data['sqft']; ?> SQFT</small>
                                    <small class="flex-fill text-center text-black border-end py-2"><i
                                            class="fa fa-bed text-tan me-2"></i><?php echo $data['bedroom']; ?> Bedroom</small>
                                    <small class="flex-fill text-center text-black border-end py-2"><i
                                            class="fa fa-bed text-tan me-2"></i><?php echo $data['hall']; ?> Hall</small>
                                    <small class="flex-fill text-center text-black py-2"><i
                                            class="fa fa-bath text-tan me-2"></i><?php echo $data['bathroom']; ?> Bathroom</small>
                                </div>
                                  </div>
                                </div>
                              
                            <!-- <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img  class="img-fluid rounded" style="position: relative; height: 420px; width:408px" src="./Admin/Img/Property_image/<?php echo $data['img1']; ?>" alt="">
                                </a>
                               
                                <a href="User\include\wlist.php"><i class="bi bi-heart" class="heart_icon" style="position:absolute; top:24px ;right:36px;font-size:22px"></i></a>
                                    <div
                                        class="bg-black rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        <?php echo $data['stype']; ?></div>
                                    <div
                                        class="bg-white rounded-top text-black position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        <?php echo $data['ptype']; ?></div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-tan mb-3">₹ <?php echo $data['price']; ?></h5>
                                    <a class="d-block h5 mb-2 text-black" href="./property_details.php?pid=<?php echo $data['pid']?>"><?php echo $data['ptitle']; ?></a>
                                    <p><i class="fa fa-map-marker-alt text-tan me-2"></i><?php echo $data['paddress']; ?></p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center text-black border-end py-2"><i
                                            class="fa fa-ruler-combined text-tan me-2"></i><?php echo $data['sqft']; ?> SQFT</small>
                                    <small class="flex-fill text-center text-black border-end py-2"><i
                                            class="fa fa-bed text-tan me-2"></i><?php echo $data['bedroom']; ?> Bedroom</small>
                                    <small class="flex-fill text-center text-black border-end py-2"><i
                                            class="fa fa-bed text-tan me-2"></i><?php echo $data['hall']; ?> Hall</small>
                                    <small class="flex-fill text-center text-black py-2"><i
                                            class="fa fa-bath text-tan me-2"></i><?php echo $data['bathroom']; ?> Bathroom</small>
                                </div>
                            </div>
                        </div> -->
                        <?php } ?>

                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn bg-black text-tan py-3 px-5" href="">Browse More Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>