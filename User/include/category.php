<?php
    include('./config/config.php');
    $house=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tblhouse where `ptype`='House'"));
    $Banglow=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tblhouse where `ptype`='Banglow'"));
    $Flat=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tblhouse where `ptype`='Flat'"));
    $PHouse=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tblhouse where `ptype`='Pent-House'"));
    $FHouse=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tblhouse where `ptype`='Farm-House'"));
?>
<body>

    <div class="py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 text-black wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px;">
                <h1 class="mb-3 text-black">Property Types</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                    eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>

            
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bgcolor text-center  rounded p-3" href="">
                        <div class="rounded bg-black  p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                            </div>
                            <h6>House Property</h6>
                            <span><?php echo $house['total']?>+ Houses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item d-block bgcolor text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                            </div>
                            <h6>Banglow Property</h6>
                            <span><?php echo $Banglow['total']?>+ Banglows</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bgcolor text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                            </div>
                            <h6>Flat Property</h6>
                            <span><?php echo $Flat['total']?>+ Flats</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bgcolor text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                            </div>
                            <h6>Pent-House </h6>
                            <span><?php echo $PHouse['total']?>+ Pent-Houses</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bgcolor text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                            </div>
                            <h6>Farm Houses</h6>
                            <span><?php echo $FHouse['total']?>+ Farm Houses</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>