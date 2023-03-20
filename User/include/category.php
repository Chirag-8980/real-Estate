<?php
    include('./config/config.php');
    $house=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tblhouse"));
    $business=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tblbusiness"));
    $occasion=mysqli_fetch_array( mysqli_query($con,"select count(*) as total from tbloccasion"));
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
                            <h6>Business Property</h6>
                            <span><?php echo $business['total']?>+ Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bgcolor text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                            </div>
                            <h6>Occasion Property</h6>
                            <span><?php echo $occasion['total']?>+ Properties</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>