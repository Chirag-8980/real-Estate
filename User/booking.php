<?php
    session_start();
    include('./config/config.php');
    if(isset($_POST['pbooking'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cindate = $_POST['cindate'];
        $coutdate = $_POST['coutdate'];
        $message = $_POST['message'];
        $buyerid = $_SESSION['uid'];
        $sellerid = $_SESSION['sellerid'];
        $pid = $_SESSION['pid'];

        if($buyerid != $sellerid){
            $query = "INSERT INTO `tblpbooking`(`name`, `pid`, `seller_id`, `buyer_id`, `email`, `cindate`, `coutdate`,`details`) VALUES ('$name','$pid','$sellerid','$buyerid','$email','$cindate','$coutdate','$message')";
            $run = mysqli_query($con , $query);
            if($run){
                $_SESSION['msg'] = "Booking Reqest Sent Success";
		        $_SESSION['status'] = "Success";
                header("location:book_property.php?pid=$pid");
            }else{
                $_SESSION['msg'] = "Booking Reqest Sent Failed";
		        $_SESSION['status'] = "error";    
            }
        }else{
            $_SESSION['msg'] = "Buyer And Seller Is Same";
		    $_SESSION['status'] = "error";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Property Booking</title>
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
</head>

<body class="bg-white">
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <?php include('../User/include/spinner.php')?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('../User/include/header.php')?>
        <!-- Navbar End -->

        <div class="container mt-5 px-5">
            
        <form action="booking.php" method="POST">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        <label for="email">Your Email</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="subject" name="cindate"
                            placeholder="Enter Check In Date">
                        <label for="subject">Check In Date</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="subject" name="coutdate"
                            placeholder="Enter Check Out Date">
                        <label for="subject">Check Out Date</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a message here" name="message" id="message"
                            style="height: 100px"></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn bg-tan text-black w-100 py-3" name="pbooking" type="submit">Reqest For
                        Booking</button>
                </div>
            </div>
        </form>
        
        </div>







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