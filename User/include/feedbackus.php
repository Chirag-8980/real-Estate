<?php
include('./config/config.php');
// session_start();
// if (!isset($_SESSION['uid'])) {
//     header("location:./login.php");
// }
// if(!$_SESSION['user']){ 
//     exit; 
// } 
error_reporting(E_ERROR | E_PARSE);
if (!isset($_SESSION['uid'])) {
    
}else{
if (isset($_POST['feedback_submit'])) {
    $uid = $_SESSION['uid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insert_query = "INSERT INTO `tblfeedback`(`uid`, `name`, `email`, `message`) VALUES ('$uid','$name','$email','$message')";
    $run_q = mysqli_query($con, $insert_query);

    if ($run_q) {
        // echo "Send Success";
    } else {
        // echo "Send Failed";
    }
}
}

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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

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
    <title>feedback</title>
</head>

<body>


    <div class=" py-5">
        <div class="container">
            <div class="text-center text-black mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3 text-black">Feedback </h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
                    sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <!-- <div class="row g-4"> -->
            <?php
            session_start();
            $uid = $_SESSION['uid'];
            $select_qur = "select * from user where uid='$uid'";
            $query = mysqli_query($con, $select_qur);
            $data = mysqli_fetch_array($query);

            ?>
            <div class="col-md-12">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Feedback for us</a>.</p>
                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" value="<?php if (isset($_SESSION['uid'])) {
                                                                                                    echo $data['uname'];
                                                                                                } else {
                                                                                                    echo "";
                                                                                                }  ?>" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" value="<?php if (isset($_SESSION['uid'])) {
                                                                                                    echo $data['email'];
                                                                                                } else {
                                                                                                    echo "";
                                                                                                }  ?>" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn bg-tan text-black w-100 py-3" name="feedback_submit" type="submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->
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