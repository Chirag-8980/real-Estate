<?php

?>
<body>
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-black navbar-light py-0 px-4">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="../../icon-building.png" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-tan">Makaan</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto text-white">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="property-list.php" class="dropdown-item">Property List</a>
                            <a href="property-type.php" class="dropdown-item">Property Type</a>
                            <a href="property-agent.php" class="dropdown-item">Property Agent</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manage Property</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="book_property.php" class="dropdown-item">Booked Property</a>
                            <a href="property_order.php" class="dropdown-item">Property Order</a>
                        </div>
                    </div>
                    <?php
                    if(isset($_SESSION['uid'])){
                        echo '<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Account</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="user-property.php" class="dropdown-item">My Property</a>
                            <a href="book_property.php" class="dropdown-item">Booked Property</a>
                            <a href="logout.php" class="dropdown-item">Logout</a>    
                        </div>
                    </div>';
                    }
                    else{
                        echo '<a href="logout.php" class="nav-item nav-link">Login</a>';
                    }
                    ?>
                    
                </div>
                <a href="addproperty.php" class="btn text-black bg-tan px-3 d-none d-lg-flex">Add Property</a>
            </div>
        </nav>
    </div>
