<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    include("../admin/config.php");	
?>
<!DOCTYPE html>
<html lang="en">

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
    <div class="container-xxl bg-white p-0">
      
    <?php include('../User/include/spinner.php')?>

        <!-- Navbar Start -->
        
        <?php include('../User/include/header.php')?>
        <!-- Navbar End -->


        <div class="container-fluid header bg-white p-0">
            
              <!--	About Our Company -->
        <div class="full-row p-5">
            <div class="container">
                
				
				<?php 
					
					$query=mysqli_query($con,"SELECT * FROM about");
					while($row=mysqli_fetch_array($query))
					{
				?>
                <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <!-- <h1 class="display-5 animated text-black fadeIn m-5">About Us</h1>  -->
                    <h3 class="double-down-line-left position-relative pb-4 mb-4"><?php echo $row['1'];?></h3>
  
                </div>
				
                <div class="row about-company">
                    <div class="col-md-12 col-lg-7">
                        <div class="about-content">
                            <?php echo $row['2'];?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 ">
                        <div class="about-img"> <img src="../admin/upload/<?php echo $row['3'];?>" alt="about image"> </div>
                    </div>
                </div>
				
				<?php } ?>
				
            </div>
        </div>
        <!--	About Our Company --> 
            </div>
        </div>
        <!-- Header End -->






        

        <!-- About Start -->
        <?php include('../User/include/about.php')?>
        <!-- About End -->


        <!-- Call to Action Start -->
        
        <?php include('../User/include/contact.php')?>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <?php include('../User/include/team.php')?>
        <!-- Team End -->
        

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