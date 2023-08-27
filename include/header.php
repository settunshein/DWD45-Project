<?php

ob_start();

if (! isset($_SESSION)) {
    session_start();
}

include('include/db.php');
include('admin/pages/_include/functions.php');

if (isset($_SESSION['auth_user'])) {
    $auth_user = $_SESSION['auth_user'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BS5 Car Rental Website</title>

    <!-- Core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Dropify -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- toastr Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/car_details.css">
    <link rel="stylesheet" href="assets/css/contact_us.css">

    <style>
        /* Custom Styling Toastr */
        #toast-container>div {
            width: 350px !important;
            opacity: 1;
        }

        #title-error {
            font-size: 12px;
        }
    </style>
</head>
<body>

	<header class="sec-header">
        <nav class="navbar navbar-expand-lg fixed-top px-4 px-md-0 py-3 px-md-5 bg-white text-dark">
            <div class="container-fluid px-3 px-lg-5">
                <span class="navbar-brand fs-1 fw-bold">LOGO</span>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <div class="menu-toggle">
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="car_listing.php">Car Listing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                        	<a class="nav-link js-scroll-trigger" href="contact_us.php">Contact Us</a>
                        </li>
                        <?php if(isset($auth_user)): ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="admin/pages/dashboard.php">Dashboard</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="account.php">Account</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header><!-- /.sec-header -->
