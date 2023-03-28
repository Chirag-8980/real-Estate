<?php
    session_start();
    include('./config/config.php');
    require './Function/sendmail.php';
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
    $uid = $_SESSION['uid'];
     $u_data = mysqli_fetch_array(mysqli_query($con , "select * from user where uid=$uid"));
    if(isset($_POST['pbooking'])){
        try {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cindate = $_POST['cindate'];
            $coutdate = $_POST['coutdate'];
            $message = $_POST['message'];
            $buyerid = $_SESSION['uid'];
            $sellerid = $_SESSION['sellerid'];
            $pid = $_SESSION['pid'];
            $_SESSION['b_email'] = $email;
            
        if($buyerid != $sellerid){
            $query = "INSERT INTO `tblpbooking`(`name`, `pid`, `seller_id`, `buyer_id`, `email`, `cindate`, `coutdate`,`details`) VALUES ('$name','$pid','$sellerid','$buyerid','$email','$cindate','$coutdate','$message')";
            $run = mysqli_query($con , $query);
            if($run){
                $s_email = mysqli_fetch_array(mysqli_query($con , "select * from user where uid = $sellerid"));
                $email = $s_email['email'];
                $sub = "Booking Reqest From Buyre";
                $msg = "Booking Req";
                SendMail_With_PDF($email , $sub , $msg , $pid);
                
                $_SESSION['msg'] = "Booking Reqest Sent Success";
		        $_SESSION['status'] = "Success";
                header("location:book_property.php?pid=$pid");
            }else{
                $_SESSION['msg'] = "Booking Reqest Sent Failed";
		        $_SESSION['status'] = "error";
                header("location:property_details.php?pid=$pid");
            }
        }else{
            $_SESSION['msg'] = "Buyer And Seller Is Same";
		    $_SESSION['status'] = "error";
            header("location:property_details.php?pid=$pid");
        }
          }
          
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
                            <input type="text" class="form-control" id="name" value="<?php echo $u_data['uname']?>" disabled name="name" placeholder="Your Name">
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" disabled value="<?php echo $u_data['email']?>" placeholder="Your Email">
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="dateChecker" name="cindate"
                                placeholder="Enter Check In Date">
                            <label for="subject">Check In Date</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="dateChecker" name="coutdate"
                                placeholder="Enter Check Out Date">
                            <label for="subject">Check Out Date</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a message here" name="message"
                                id="message" style="height: 100px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn bg-tan text-black w-100 py-3" name="pbooking" type="submit">Reqest For
                            Booking</button>
                    </div>
                </div>
            </form>
            <?php if(isset($_SESSION['msg'])) { ?>
            <script>
            swal("<?php echo  $_SESSION['status'] ?>", "<?php echo $_SESSION['msg'] ?>",
                "<?php echo $_SESSION['status'] ?>");
            </script>
            <?php
                unset($_SESSION['msg']);
                unset($_SESSION['status']); }?>

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
    <script>
    $(document).ready(function() {
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();

        if (month < 10) {
            month = '0' + month.toString();
        }
        if (day < 10) {
            day = '0' + day.toString();
        }

        var maxDate = year + '-' + month + '-' + day;
        $('#dateChecker').attr('min', maxDate);

    })
    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>