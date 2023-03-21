<?php
    session_start();
    include('./config/config.php');
    // $cid =$_GET['cid'];

    if(isset($_POST['QC'])){
        $uid=$_SESSION["uid"];
        $ptitle=$_POST["ptitle"];
        $ptype=$_POST["ptype"];
        $bhk=$_POST["bhk"];
        $stype=$_POST["stype"];
        $bedroom=$_POST["bedroom"];
        $balcony=$_POST["balcony"];
        $bathroom=$_POST["bathroom"];
        $kitchen=$_POST["kitchen"];
        $hall=$_POST["hall"];
        $floor=$_POST["floor"];
        $tfloor=$_POST["tfloor"];
        $price=$_POST["price"];
        $sqft=$_POST["sqft"];
        $paddress=$_POST["paddress"];
        $city=$_POST["city"];
        $state=$_POST["state"];
        $status=$_POST["status"];
        $featured=$_POST["featured"];
        $description=$_POST["description"];
        $facilities=$_POST["facilities"];
        $allow_type=array('png','jpg','jpeg');

        $image1=$_FILES['img1']['name'];
        $tmp_name1=$_FILES['img1']['tmp_name'];
        $img_type1=strtolower(pathinfo($image1,PATHINFO_EXTENSION)); 
        $size=$_FILES['img1']['size'];
        $tmp_name=$_FILES['img1']['tmp_name'];
        $destination1="../admin/img/property_image/".$image1;
       

        $image2=$_FILES['img2']['name'];
        $tmp_name2=$_FILES['img2']['tmp_name'];
        $img_type2=strtolower(pathinfo($image2,PATHINFO_EXTENSION));
        $size=$_FILES['img2']['size'];
        $tmp_name=$_FILES['img2']['tmp_name'];
        $destination2="../admin/img/property_image/".$image2;
        

        $image3=$_FILES['img3']['name'];
        $tmp_name3=$_FILES['img3']['tmp_name'];
        $img_type3=strtolower(pathinfo($image3,PATHINFO_EXTENSION));   
        $size=$_FILES['img3']['size'];
        $destination3="../admin/img/property_image/".$image3;
        

        $image4=$_FILES['img4']['name'];
        $tmp_name4=$_FILES['img4']['tmp_name'];
        $img_type4=strtolower(pathinfo($image4,PATHINFO_EXTENSION));
        $size=$_FILES['img4']['size'];
        $destination4="../admin/img/property_image/".$image4;
        
      
        if(in_array($img_type1 || $img_type2 || $img_type3 || $img_type4, $allow_type))
        {
            if($size <= 2000000)
            {
                move_uploaded_file($tmp_name1,$destination1);
                move_uploaded_file($tmp_name2,$destination2);
                move_uploaded_file($tmp_name3,$destination3);
                move_uploaded_file($tmp_name4,$destination4);
                $insert_qry = "insert into tblhouse(uid, ptitle, ptype, bhk, stype, bedroom, balcony, bathroom, kitchen, hall, floor, tfloor, price, sqft, paddress, city, state, img1, img2, img3, img4, status, featured, description , facilities) VALUES ('$uid','$ptitle','$ptype','$bhk','$stype','$bedroom','$balcony','$bathroom','$kitchen','$hall','$floor','$tfloor','$price','$sqft','$paddress','$city','$state', '$image1', '$image2', '$image3', '$image4','$status','$featured','$description','$facilities')";
                $result=mysqli_query($con,$insert_qry);
                if($result)
		        {
			        $_SESSION['msg'] = "Property Insert Successful";
			        $_SESSION['status'] = "success";
                    // header('location:./property-list.php');
					
		        }
		        else
		        {
			        $_SESSION['msg'] = "Property Insert Failed";
			        $_SESSION['status'] = "error";
		        }
            }
            else{
                $_SESSION['msg'] = "Photo Size should be Less then 2MB";
			    $_SESSION['status'] = "error";
            }
        }
        else{
            $_SESSION['msg'] = "File type not allowed (Only jpg, jpeg and png type file allowed)";
			        $_SESSION['status'] = "error";
        }
        
    }else{
        // echo "Plese Enter Value";
    }
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
    <title>List Your Property</title>
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
            <form class="row g-3 container" method="POST" action="addhouse.php" enctype="multipart/form-data">
                <!-- Basic Information -->
                <h2 class="animated text-black fadeIn mb-3" style="border-bottom: 2px solid var(--tan);">Basic
                    Information</h2>
                <div class="col-md-12 input-group-lg">
                    <label for="inputEmail4" class="form-label  text-black">Title</label>
                    <input type="text" name="ptitle" class="form-control" id="inputEmail4"  >
                </div>

                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Property Type</label>
                    <select id="inputState" name="ptype" class="form-select"  >
                        <option value="House">House</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Flat">Flat</option>
                    </select>
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">BHK</label>
                    <select id="inputState" name="bhk" class="form-select"  >
                        <option value="1">1 BHK</option>
                        <option value="2">2 BHK</option>
                        <option value="3">3 BHK</option>
                    </select>
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Selling Type</label>
                    <select id="inputState" name="stype" class="form-select"  >
                        <option value="Rent">Rent</option>
                        <option value="Sell">Sell</option>
                    </select>

                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Bedroom</label>
                    <input type="text" name="bedroom" class="form-control" id="inputZip"
                        placeholder="Enter Bedroom (Only 1 to 5)"  >
                </div>

                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Balcony</label>
                    <input type="text" name="balcony" class="form-control" id="inputZip"
                        placeholder="Enter Balcony (Only 1 to 5)"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Bathroom</label>
                    <input type="text" name="bathroom" class="form-control" id="inputZip"
                        placeholder="Enter Bathroom (Only 1 to 5)"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Kitchen</label>
                    <input type="text" name="kitchen" class="form-control" id="inputZip"
                        placeholder="Enter Kitchen (Only 1 to 5)"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Hall</label>
                    <input type="text" name="hall" class="form-control" id="inputZip"
                        placeholder="Enter Hall (Only 1 to 5)"  >
                </div>

                <!-- Price & Location  -->
                <h2 class="animated text-black fadeIn mt-5 add-header" style="border-bottom: 2px solid var(--tan);">
                    Price & Location</h2>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Floor</label>
                    <input type="text" name="floor" class="form-control" id="inputEmail4"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Total Floor</label>
                    <input type="text" name="tfloor" class="form-control" id="inputEmail4"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Price</label>
                    <input type="text" class="form-control" name="price" id="inputZip"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">Area Size</label>
                    <input type="text" class="form-control" name="sqft" id="inputZip"  >
                </div>
                <div class="col-md-12 input-group-lg">
                    <label for="inputEmail4" class="form-label  text-black">Address</label>
                    <input type="text" name="paddress" class="form-control" id="inputEmail4"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">City</label>
                    <input type="text" class="form-control" name="city" id="inputZip"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputZip" class="form-label  text-black">State</label>
                    <input type="text" class="form-control" name="state" id="inputZip"  >
                </div>
                <!-- Image & Status -->
                <h2 class="animated text-black fadeIn mt-5 add-header" style="border-bottom: 2px solid var(--tan);">
                    Image & Status</h2>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 1</label>
                    <input class="form-control form-control-lg bg-white" name="img1" id="formFileLg" type="file"  >
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 2</label>
                    <input class="form-control form-control-lg bg-white" id="formFileLg" name="img2" type="file"  >
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 3</label>
                    <input class="form-control form-control-lg bg-white" id="formFileLg" name="img3" type="file"  >
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label text-black">Image 4</label>
                    <input class="form-control form-control-lg bg-white" id="formFileLg" name="img4" type="file"  >
                </div>
                <div class="col-md-6 input-group-lg">
                    <label for="inputState" class="form-label  text-black">Is Featured?</label>
                    <select id="inputState" class="form-select" name="featured"  >
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    </div>
                    <div class="col-md-6 input-group-lg">
                    <select id="inputState" name="status" class="form-select" hidden >
                        <option value="Sold">Sold</option>
                        <option value="Unsold" seleceted>UnSold</option>
                    </select>
                </div>
                <!-- Facility -->
                <h2 class="animated text-black fadeIn mt-5 mb-2 add-header"
                    style="border-bottom: 2px solid var(--tan);">Facilities</h2>
                <small class="text-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or
                    <b>No</b></small>
                <textarea class="tinymce form-control" name="facilities" rows="10" cols="29">
                <div class="col-md-4">
				 	<ul>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Property Age : </span>10 Years</li>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>Yes</li>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Maintanace : </span>Yes</li>
				 	</ul>
				 </div>
				 <div class="col-md-4">
				 	<ul>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>Apartment</li>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>Yes</li>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Wifi Plan : </span>Yes</li>
				 	
				 	</ul>
				 </div>
				 <div class="col-md-4">
				 	<ul>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>No</li>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Elevator : </span>Yes</li>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>Yes</li>
				 	<li class="mb-3"><span class="text-secondary font-weight-bold">Water Supply : </span>Ground Water / Tank</li>
				 	</ul>
			    </div>
                </textarea>
                <!-- Description -->
                <h2 class="animated text-black fadeIn mt-5 mb-4 add-header"
                    style="border-bottom: 2px solid var(--tan);">Description</h2>
                <textarea class="tinymce form-control" name="description" rows="10" cols="29"  ></textarea>
                <div class="d-flex justify-content-end">
                    <input type="submit" name="QC" class="btn py-2 px-5 mx-1 bg-black text-tan" value="Send To QC"  />
                    <input type="submit" name="discard" class="btn py-2 px-5  mx-1 bg-tan text-black" value="Discard" />
                </div>

            </form>
        </div>
        <!-- Add Form End -->

        <!-- Footer Start -->
        <?php include('../User/include/footer.php')?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <?php include('../User/include/top.php')?>
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