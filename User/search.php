<?php
    session_start();
    include('./config/config.php');
    $property_type = $_GET['ptype'];
    $selling_type = $_GET['stype'];
    $query = $_GET['query'];
    $show = true;

    if($property_type == 'Home'){

        $sql = " SELECT * FROM tblhouse WHERE MATCH (ptitle,description) AGAINST ('$query');";
        $run = mysqli_query($con , $sql);
    }
    if($property_type == 'Business'){

    }
    if($property_type == 'Occasion'){

    }
    
?>
<!DOCTYPE html>
<html lang="en" style="background: white;">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate HTML Template</title>
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
</head>

<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <?php include('../User/include/spinner.php')?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('../User/include/header.php')?>
        <!-- Navbar End -->


        <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-12">
                    <div class="text-start text-black mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3 text-black">Your Search Result For "<em><?php echo $query?></em>" in "<em><?php echo $property_type?></em>" Category </h1>
                    </div>
                </div>
                
            </div>
            <?php while($data = mysqli_fetch_array($run)) { $show=false; ?>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden" style="height: 500px;">
                                <div class="position-relative overflow-hidden">
                                    <a href="./property_details.php?pid='<?php echo $data['pid'] ?>'"><img style="height: 307px;" class="img-fluid" src="../admin/Img/Property_image/<?php echo $data['img1']; ?>" alt=""></a>
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
                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if($show) {?>
            <div class="container mt-2">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3  text-muted pb-2">No Result for "<em><?php echo $query;?></em>"</h3>
                </div>
            </div>
            <?php }?>
        </div>
    </div>


        

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