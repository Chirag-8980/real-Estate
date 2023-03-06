<?php
    include('./config/config.php');
    $select_q="select * from about";
    $data=mysqli_fetch_array(mysqli_query($con,$select_q));
?>
<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="../admin/upload/<?php echo $data['image'];?>">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn text-black" data-wow-delay="0.5s">
                    <h1 class="mb-4 text-black"><?php echo $data['title'];?></h1>
                    <p class="mb-4"><?php echo $data['content'];?></p>
                    <a class="btn bg-tan text-black py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
   
</body>
