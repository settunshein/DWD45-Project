<?php

include('include/header.php');

if (! isset($auth_user)) {
    header('location: account.php');
}

if (isset($_POST['edit_profile'])) {
    edit_profile();
}

if (isset($_POST['edit_password'])) {
    edit_password();
}

if (isset($_POST['insert_payment'])) {
    insert_payment();
}
?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
    	<h2 class="display-6 fw-bold px-0 text-uppercase">Dashboard</h2>
        <nav class="px-0">
	        <ol class="breadcrumb text-uppercase mb-0">
	            <li class="fs-6 fw-normal breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
	            <li class="fs-6 fw-normal breadcrumb-item">Dashboard</li>
	        </ol>
	    </nav>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-dashboard py-5">
    <div class="container px-0 py-3">
        <div class="row g-4 px-2 px-md-0">
            <div class="heading-bx mb-4">
                <h2 class="fw-bold text-uppercase">
                    <small class="fs-6">Welcome Back</small>
                    <span class="fs-4 d-block">Your Dashboard</span>
                </h2>
            </div>

            <div class="col-md-2">
                <div class="user-dashboard-sidebar list-group rounded-0" id="list-tab" role="tablist" style="padding-top: 1.5px;">
                    <a class="list-group-item list-group-item-action active"
                    data-bs-toggle="list" href="#tab-booking-list" role="tab">
                        My Bookings
                    </a>
                    <a class="list-group-item list-group-item-action"
                    data-bs-toggle="list" href="#tab-profile" role="tab">
                        Profile
                    </a>
                    <a class="list-group-item list-group-item-action"
                    data-bs-toggle="list" href="#tab-password-update" role="tab">
                        Update Password
                    </a>
                </div>
            </div><!-- /.col-md-2 -->

            <div class="col-md-10">
                <div class="tab-content" id="nav-tabContent">
                    <?php include('include/dashboard_booking_list.php'); ?>
                    <?php include('include/dashboard_update_profile.php'); ?>
                    <?php include('include/dashboard_update_password.php'); ?>
                </div>
            </div><!-- /.col-md-10 -->

        </div><!-- /.row -->
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
