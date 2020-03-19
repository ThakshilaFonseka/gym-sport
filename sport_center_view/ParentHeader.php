
<?php include_once __DIR__ . '/ParentHederLink.php'; ?>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html">
                    <img src="../assets/img/logo.png" alt="">
                </a>
            </div>

            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <?php $base_url = "http://localhost/Sport_Management_System/"; ?>
                            <li><a href="<?php echo $base_url . "sport_center_view/MainHome.php"; ?>">Home</a></li>
                            <li><a href="<?php echo $base_url ."sport_center_view/MainSportDetail.php"; ?>">About Us</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo $base_url ."sport_center_view/MainSportDetail.php"; ?>">Contacts</a></li>
                                    <li><a href="<?php echo $base_url ."sport_center_view/MainSportDetail.php"; ?>">Sports Details</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo $base_url . "sport_center_view/MainTable.php"; ?>">Schedule</a></li>
                            <li><a href="<?php echo $base_url . "sport_center_view/MainGallery.php"; ?>">Gallery</a></li>

                            <li><a href="<?php echo $base_url . "sport_center_view/RegistrationApplyStudent.php"; ?>">Registration</a></li>
                            <li><a href="<?php echo $base_url . "sport_center_view/MainLogin.php"; ?>">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    