<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../User/css/login.css">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="../User/img/carousel-2.jpg" alt="">
            </div>
            <div class="back" id="flip">
                <img class="backImg" src="../User/img/carousel-2.jpg" alt="">
            </div>
        </div>
        <div class="forms">
            <div class="form-content" style="margin-left: 18px ;">
                <div class="login-form">
                    <div class="title">Email Verification</div><br>
                    <?php if (isset($_SESSION['message'])) 
            { 
              ?>
                    <div class="">
                        <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                            <strong></strong> <?= $_SESSION['message']; ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <?php
               unset($_SESSION['message']);
            }
              ?>
                    <form action="function/res_pass.php" method="post">
                        <div class="input-boxes">
                            <p>Enter OTP which is sent in Email</p>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="otp" placeholder="Enter One Time Password" required>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-mobile"></i>
                                <input type="text" name="pass" placeholder="Enter New Password" required>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-mobile"></i>
                                <input type="text" name="cpass" placeholder="Enter New Confirm Password" required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" name="btn_res" value="Reset Password">
                            </div>
                            <div class="text sign-up-text"><label><a style="color: #E0A96D;"
                                        href="login.php"> Go Back →</a></label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>