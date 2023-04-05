<?php

    include('./config/config.php');
    if(isset($_SESSION['uid'])){
        $uid = $_SESSION['uid'];
        $book_property = mysqli_fetch_array(mysqli_query($con , "select count(*) as total from tblpbooking where seller_id=$uid and status = 'Pending' "));
    }
?>

<body>
    

    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-black navbar-light py-0 px-4">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <!-- <img class="img-fluid" src="../../icon-building.png" alt="Icon" style="width: 30px; height: 30px;"> -->
                    <!-- <i class="fa-regular text-light fa-house-building" style="width: 30px; height: 30px;" ></i> -->
                    <i class="bi bi-house text-light " style="width: 30px; height: 30px;"></i>
                </div>
                <h1 class="m-0 text-tan">Locus</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="bi bi-chevron-bar-contract text-white fs-3"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto text-white">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="property-list.php?filter=all" class="dropdown-item">Property List</a>
                            <a href="property-type.php" class="dropdown-item">Property Type</a>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['uid'])) {?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manage Property
                            <?php if($book_property['total'] > 0) {?>
                        <span class="position-absolute top-80 start-80 translate-middle p-1 bg-danger border border-danger rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                        </span>
                        <?php }?>
                        </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="book_property.php" class="dropdown-item">Booked Property</a>
                            <a href="property_order.php" class="dropdown-item">Property Order
                                <?php if($book_property['total'] > 0 ) {?>
                                 <span class="badge bg-danger rounded-circle"><?php echo $book_property['total']?></span>
                                 <?php }?>
                                </a>
                           
                        </div>
                    </div>
                    <?php } else{?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manage Property</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="book_property.php" class="dropdown-item">Booked Property</a>
                            <a href="property_order.php" class="dropdown-item">Property Order</a>
                        </div>
                    </div>
                    <?php }
                    if (isset($_SESSION['uid'])) {
                        echo '<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Account</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="user-property.php?filter=all" class="dropdown-item">My Property</a>
                            <a href="logout.php" class="dropdown-item">Logout</a>    
                        </div>
                    </div>';
                    } else {
                        echo '<a href="logout.php" class="nav-item nav-link">Login</a>';
                    }
                    ?>

                </div>
                <a href="addhouse.php" class="btn text-black bg-tan px-3 d-none d-lg-flex">Add Property</a>
            </div>
        </nav>
    </div>
    <?php if (isset($_SESSION['msg'])) { ?>
    <script>
    swal("<?php echo  $_SESSION['status'] ?>", "<?php echo $_SESSION['msg'] ?>",
        "<?php echo $_SESSION['status'] ?>");
    </script>
    <?php
        unset($_SESSION['msg']);
        unset($_SESSION['status']);
    } ?>
</body>
<script>
</script>