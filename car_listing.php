<?php
include('include/header.php');
$cars = get_all_cars();
?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
    	<h2 class="display-6 fw-bold px-0 text-uppercase">Car Listing</h2>
        <nav class="px-0">
	        <ol class="breadcrumb text-uppercase mb-0">
	            <li class="fs-6 fw-normal breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
	            <li class="fs-6 fw-normal breadcrumb-item">Car Listing</li>
	        </ol>
	    </nav>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-car-list py-5">
    <div class="container px-0 py-3">
        <div class="row g-4 px-2 px-md-0">
            <div class="heading-bx mb-4">
                <h2 class="fw-bold text-uppercase">
                    <small class="fs-6">Choose Your Car</small>
                    <span class="fs-4 d-block">Lorem ipsum dolor sit.</span>
                </h2>
            </div>

            <?php foreach($cars as $car): ?>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="p-4">
                        <img src="admin/pages/_uploads/cars/<?= $car['image'] ?>" alt="<?= $car['name'] ?>" class="img-fluid">
                    </div>

                    <div class="card-body pt-0 px-4 pb-4">
                        <h6 class="fs-14 fw-bold">
                            <a href="#">
                                <span class="d-block" style="margin-left: 2.5px;"><?= $car['name'] ?></span>
                                <?php if($car['status'] == 1): ?>
                                <span class="badge rounded-pill bg-custom-success mt-2 rounded-0 text-uppercase"
                                style="font-weight: 400; font-size: 400">Avaliable</span>
                                <?php else: ?>
                                <span class="badge rounded-pill bg-custom-danger mt-2 rounded-0 text-uppercase"
                                style="font-weight: 400; font-size: 400">Unavaliable</span>
                                <?php endif; ?>
                            </a>
                        </h6>

                        <table class="table table-bordered fs-13 my-3">
                            <tr>
                                <td>
                                    <i class="ri ri-dashboard-3-line fw-bold"></i>
                                    <?= $car['engine'] ?>
                                </td>

                                <td>
                                    <i class="ri ri-group-2-line fw-bold"></i>
                                    <?= $car['capacity'] ?> Seaters
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="ri ri-gas-station-line fw-bold"></i>
                                    <?= $car['fuel_type'] ?>
                                </td>

                                <td>
                                    <i class="ri ri-steering-line fw-bold"></i>
                                    A/M
                                </td>
                            </tr>
                        </table>

                        <div class="fw-bold text-custom-purple">
                            <?= number_format($car['rent_fee']) ?> <small>MMK</small> / Day
                        </div>
                        <hr class="bg-secondary">

                        <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
                            <a href="car_details.php?car_id=<?= $car['id'] ?>"
                            class="fs-13 btn btn-sm btn-outline-purple rounded-0">
                                Details
                            </a>
                            <?php if(isset($auth_user)): ?>
                                <?php if($car['status'] == 1): ?>
                                <a href="car_booking.php?car_id=<?= $car['id'] ?>" class="fs-13 btn btn-sm btn-purple rounded-0" role="button">
                                    Book Now
                                </a>
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="javascript:;" class="fs-13 btn btn-sm btn-purple rounded-0" role="button"
                                onclick="toastr.error('You Must Login to Book a Car for Rent &nbsp;<i class=\'fas fa-exclamation-circle\'></i>', 'ACCESS DENIED', {
                                    closeButton: true,
                                    progressBar: true,
                                })">
                                    Book Now
                                </a>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-3 -->
            <?php endforeach; ?>

        </div><!-- /.row -->
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
