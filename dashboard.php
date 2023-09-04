<?php
include('include/header.php');
$cars = get_all_cars();
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

<section class="sec-car-list py-5">
    <div class="container px-0 py-3">
        <div class="row g-4 px-2 px-md-0">
            <div class="heading-bx mb-4">
                <h2 class="fw-bold text-uppercase">
                    <small class="fs-6">Welcome Back</small>
                    <span class="fs-4 d-block">Your Dashboard</span>
                </h2>
            </div>

        </div><!-- /.row -->
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
