<?php
    session_start();
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="../User/css/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Connect With Us..</title>
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
                    <div class="title">Login </div><br>
                    <?php if (isset($_SESSION['message'])) 
            { 
              ?>
                    <div class="">
                        <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                            <strong> </strong>
                            <?= $_SESSION['message']; ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <?php
               unset($_SESSION['message']);
            }
              ?>
                    <!-- Login Form... -->
                    <form action="function/authcode.php" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" placeholder="Enter your email" required oninvalid="setCustomValidity('Please enter a valid Email ID')" oninput="setCustomValidity('')">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" minlength="8" name="password" placeholder="Enter your password" required required oninvalid="setCustomValidity('Please enter valid Password')" oninput="setCustomValidity('')">
                            </div>
                            <div class="text" style="color: #FFA500 !important"><a style="color: #E0A96D;" href="./resetpass.php">Forgot
                                    password?</a></div>
                            <div class="button input-box">
                                <input type="submit" name="login_btn" value="Login">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label for="flip"> <a style="color: #E0A96D;" href="register.php">Sigup now </a> </label>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>