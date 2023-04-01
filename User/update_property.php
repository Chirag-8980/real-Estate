<?php
session_start();
include('./config/config.php');
$pid = $_GET['pid'];
$data = mysqli_fetch_array(mysqli_query($con, "select * from tblhouse where pid='$pid'"));

$uid = $data['uid'];
$user_data = mysqli_fetch_array(mysqli_query($con, "select * from user where uid='$uid'"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="descriptionv">

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
    <title>List Your Property</title>
</head>

<body>
    <div class=" bg-white p-0">
        <!-- Spinner Start -->
        <?php include('../User/include/spinner.php') ?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('../User/include/header.php') ?>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated text-black fadeIn mb-4">Add Home</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a class="text-tan" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-tan" href="#">Select Type</a></li>
                            <li class="breadcrumb-item text-body text-black active" aria-current="page">Add Home
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Add Form Start -->
        <div class="container mt-3 px-5">
            <form class="row g-3 container" method="POST" action="upcode.php" enctype="multipart/form-data">
                <!-- Basic Information -->
                <h2 class="animated text-black fadeIn mb-3" style="border-bottom: 2px solid var(--tan);">Basic
                    Information</h2>
                <div class="col-md-12 input-group-lg">
                    <input type="hidden" name="prid" value="<?= $data['pid'] ?>">
                    <label for="inputEmail4" class="form-label  text-black">Title</label>
                    <input type="text" name="ptitle" class="form-control" Value="<?php echo $data['ptitle'] ?>" id="inputEmail4">
                </div>

                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Property Type</label>
                    <select id="inputState" name="ptype" class="form-select">
                        <option value="House">House</option>
                        <option value="Flat">Flat</option>
                        <option value="Banglow">Banglow</option>
                        <option value="Pent-House">Pent-House</option>
                        <option value="Farm-House">Farm-House</option>
                    </select>
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">BHK</label>
                    <select id="inputState" name="bhk" class="form-select">
                        <?php if ($data['bhk'] == '1') { ?>
                            <option value="1">1BHK</option>
                            <option value="2">2BHK</option>
                            <option value="3">3BHK</option>
                            <option value="4">4BHK</option>
                        <?php } else if ($data['bhk'] == '2') { ?>
                            <option value="1">1BHK</option>
                            <option value="2" selected>2BHK</option>
                            <option value="3">3BHK</option>
                            <option value="4">4BHK</option>
                        <?php } else if ($data['bhk'] == '3') { ?>
                            <option value="1">1BHK</option>
                            <option value="2">2BHK</option>
                            <option value="3" selected>3BHK</option>
                            <option value="4">4BHK</option>
                        <?php } else if ($data['bhk'] == '4') { ?>
                            <option value="1">1BHK</option>
                            <option value="2">2BHK</option>
                            <option value="3">3BHK</option>
                            <option value="4" selected>4BHK</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Selling Type</label>
                    <select id="inputState" name="stype" class="form-select">
                        <?php if ($data['stype'] == 'Rent') { ?>
                            <option value="Rent">Rent</option>
                            <option value="Sell">Sell</option>
                        <?php } else if ($data['stype'] == 'Sell') { ?>
                            <option value="Rent">Rent</option>
                            <option value="Sell">Sell</option>
                        <?php }  ?>
                    </select>

                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Bedroom</label>
                    <input type="text" name="bedroom" value="<?php echo $data['bedroom'] ?>" class="form-control" id="inputZip" placeholder="Enter Bedroom (Only 1 to 5)">
                </div>

                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Balcony</label>
                    <input type="text" name="balcony" class="form-control" value="<?php echo $data['balcony'] ?>" id="inputZip" placeholder="Enter Balcony (Only 1 to 5)">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Bathroom</label>
                    <input type="text" name="bathroom" value="<?php echo $data['bathroom'] ?>" class="form-control" id="inputZip" placeholder="Enter Balcony (Only 1 to 5)">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Kitchen</label>
                    <input type="text" name="kitchen" value="<?php echo $data['kitchen'] ?>" class="form-control" id="inputZip" placeholder="Enter Kitchen (Only 1 to 5)">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Hall</label>
                    <input type="text" name="hall" class="form-control" value="<?php echo $data['hall'] ?>" id="inputZip" placeholder="Enter Hall (Only 1 to 5)">
                </div>

                <!-- Price & Location  -->
                <h2 class="animated text-black fadeIn mt-5 add-header" style="border-bottom: 2px solid var(--tan);">
                    Price & Location</h2>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Floor</label>
                    <input type="text" name="floor" class="form-control" value="<?php echo $data['floor'] ?>" id="inputEmail4">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Total Floor</label>
                    <input type="text" name="tfloor" class="form-control" value="<?php echo $data['tfloor'] ?>" id="inputEmail4">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Price</label>
                    <input type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>" id="inputZip">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Area Size</label>
                    <input type="text" class="form-control" name="sqft" value="<?php echo $data['sqft'] ?>" id="inputZip">
                </div>
                <div class="col-md-12 input-group-lg">
                    <label for="inputEmail4" class="form-label  text-black">Address</label>
                    <input type="text" name="paddress" class="form-control" value="<?php echo $data['paddress'] ?>" id="inputEmail4">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">City</label>
                    <input type="text" class="form-control" name="city" id="inputZip" value="<?php echo $data['city'] ?>">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">State</label>
                    <input type="text" class="form-control" name="state" id="inputZip" value="<?php echo $data['state'] ?>">
                </div>
                <!-- Image & Status -->
                <h2 class="animated text-black fadeIn mt-5 add-header" style="border-bottom: 2px solid var(--tan);">
                    Image & Status</h2>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 1</label>
                    <img src="../admin/Img/Property_image/house/<?php echo $data['img1'] ?>" style="height: 400px;" class="img-thumbnail" alt="...">
                    <input class="form-control form-control-lg mt-1 bg-white" name="img1" id="formFileLg" type="file">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 2</label>
                    <img src="../admin/Img/Property_image/house/<?php echo $data['img2'] ?>" style="height: 400px;" class="img-thumbnail" alt="...">
                    <input class="form-control form-control-lg mt-1 bg-white" id="formFileLg" name="img2" type="file">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 3</label>
                    <img src="../admin/Img/Property_image/house/<?php echo $data['img3'] ?>" style="height: 400px;" class="img-thumbnail" alt="...">
                    <input class="form-control form-control-lg mt-1 bg-white" id="formFileLg" name="img3" type="file">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 4</label>
                    <img src="../admin/Img/Property_image/house/<?php echo $data['img4'] ?>" style="height: 400px;" class="img-thumbnail" alt="...">
                    <input class="form-control form-control-lg mt-1 bg-white" id="formFileLg" name="img4" type="file">
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Is Featured?</label>
                    <select id="inputState" class="form-select" name="featured">
                        <?php if ($data['featured'] == 'Yes') { ?>
                            <option value="Yes" selected>Yes</option>
                            <option value="No">No</option>
                        <?php } else if ($data['featured'] == 'No') { ?>
                            <option value="Yes">Yes</option>
                            <option value="No" selected>No</option>
                        <?php } ?>
                    </select>
                    <div class="col-md-6 input-group-lg">
                        <select id="inputState" name="status" class="form-select" hidden>
                            <option value="Sold">Sold</option>
                            <option value="Unsold">UnSold</option>
                        </select>
                    </div>
                </div>

                <!-- Description -->
                <h2 class="animated text-black fadeIn mt-5 mb-4 add-header" style="border-bottom: 2px solid var(--tan);">Description</h2>
                <textarea class="tinymce form-control" name="description" rows="10" cols="29">
                <?php echo $data['description'] ?>
                </textarea>
                <div class="d-flex justify-content-end">
                    <input type="submit" name="update" class="btn py-2 px-5 mx-1 bg-black text-tan" value="Update Property" />
                    <input type="submit" name="discard" class="btn py-2 px-5  mx-1 bg-tan text-black" value="Discard" />
                </div>

            </form>
        </div>
        <!-- Add Form End -->

        <!-- Footer Start -->
        <?php include('../User/include/footer.php') ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <?php include('../User/include/top.php') ?>
    </div>
</body>
<!-- Tinymce Lib -->
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
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