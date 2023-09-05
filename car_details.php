<?php
include('include/header.php');
$car = get_car($_GET['car_id']);
$car_images = get_car_images($_GET['car_id']);
?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
    	<h2 class="display-6 fw-bold px-0 text-uppercase">Car Details</h2>
        <nav class="px-0">
	        <ol class="breadcrumb text-uppercase mb-0">
	            <li class="fs-6 fw-normal breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
	            <li class="fs-6 fw-normal breadcrumb-item">Car Details</li>
	        </ol>
	    </nav>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-car-details py-5">
    <div class="container px-0 py-3">
        <div class="row g-4 px-2 px-md-0">
            <div class="heading-bx mb-4">
                <h2 class="fw-bold text-uppercase">
                    <small class="fs-6">Car Details</small>
                    <span class="fs-4 d-block">Details Information of <?= $car['name'] ?></span>
                </h2>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="row align-items-center px-4 py-5">
                        <div class="col-md-5 <?= $car_images ? 'pb-5 mb-4' : '' ?>">
                            <div class="carousel carousel-dark slide car-img-slider" id="carDetailsCarousel">
                                <?php if($car_images): ?>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carDetailsCarousel" data-bs-slide-to="0" class="active w-100">
                                        <img class="d-block w-100" src="admin/pages/_uploads/cars/<?= $car['image'] ?>" class="img-fluid" />
                                    </button>

                                    <button type="button" data-bs-target="#carDetailsCarousel" data-bs-slide-to="1" class="w-100">
                                        <img class="d-block w-100" src="admin/pages/_uploads/car_images/<?= $car_images['image_1'] ?>" class="img-fluid" />
                                    </button>

                                    <button type="button" data-bs-target="#carDetailsCarousel" data-bs-slide-to="2" class="w-100">
                                        <img class="d-block w-100" src="admin/pages/_uploads/car_images/<?= $car_images['image_2'] ?>" class="img-fluid" />
                                    </button>

                                    <button type="button" data-bs-target="#carDetailsCarousel" data-bs-slide-to="3" class="w-100">
                                        <img class="d-block w-100" src="admin/pages/_uploads/car_images/<?= $car_images['image_3'] ?>" class="img-fluid" />
                                    </button>

                                    <button type="button" data-bs-target="#carDetailsCarousel" data-bs-slide-to="4" class="w-100">
                                        <img class="d-block w-100" src="admin/pages/_uploads/car_images/<?= $car_images['image_4'] ?>" class="img-fluid" />
                                    </button>
                                </div>
                                <?php endif; ?>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="admin/pages/_uploads/cars/<?= $car['image'] ?>" class="d-block w-100">
                                    </div>
                                    <?php if(isset($car_images)): ?>
                                    <div class="carousel-item">
                                        <img src="admin/pages/_uploads/car_images/<?= $car_images['image_1'] ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="admin/pages/_uploads/car_images/<?= $car_images['image_2'] ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="admin/pages/_uploads/car_images/<?= $car_images['image_3'] ?>" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="admin/pages/_uploads/car_images/<?= $car_images['image_4'] ?>" class="d-block w-100">
                                    </div>
                                    <?php endif; ?>
                                </div><!-- /.carousel-inner -->
                            </div><!-- /.carousel -->
                        </div>

                        <div class="col-md-7">
                            <div class="content-bx">
                                <h4 class="fw-bold mb-4"><?= $car['name'] ?></h4>
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="px-3 py-4">
                                                <span>
                                                    <i class="ri ri-dashboard-3-line"></i>
                                                    Engine Power
                                                </span>
                                                <p class="mb-0">1199 cc</p>
                                            </td>

                                            <td class="px-3 py-4">
                                                <span>
                                                    <i class="ri ri-group-2-line"></i>
                                                    Seat Capacity
                                                </span>
                                                <p class="mb-0">5 Seaters</p>
                                            </td>

                                            <td class="px-3 py-4">
                                                <span>
                                                    <i class="ri ri-steering-line"></i>
                                                    Transmission
                                                </span>
                                                <p class="mb-0">Manual & Automatic (TC)</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-3 py-4">
                                                <span>
                                                    <i class="ri ri-gas-station-line"></i>
                                                    Fuel Type
                                                </span>
                                                <p class="mb-0">Petrol</p>
                                            </td>
                                            <td class="px-3 py-4">
                                                <span>
                                                    <i class="ri ri-coin-line"></i>
                                                    Rent Per Day
                                                </span>
                                                <p class="mb-0">75,000 MMK / Day</p>
                                            </td>
                                            <td class="px-3 py-4">
                                                <span>
                                                    <i class="ri ri-flag-line"></i>
                                                    Model Year
                                                </span>
                                                <p class="mb-0">2022</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.card -->
            </div><!-- /.col-md-12 -->

            <div class="col-md-12 feature-list-bx">
                <div class="card p-4">
                    <h4 class="fw-bold mb-4 pb-2">Features</h4>
                    <div class="row justify-content-between">
                        <div class="col-md-3">
                            <ul class="p-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Air Conditions
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Child Seats
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    GPS
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Luggage
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <ul class="p-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Seat Belt
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Sleeping Bed
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Water
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Music Player
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <ul class="p-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Bluetooth
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-check-circle text-custom-success fw-bold"></i>&nbsp;
                                    Onboard Computer
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-times-circle text-custom-danger fw-bold"></i>&nbsp;
                                    Audio Input
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fas fa-times-circle text-custom-danger fw-bold"></i>&nbsp;
                                    Car Kit
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.card -->
            </div><!-- /.col-md-12 -->

            <div class="d-flex justify-content-between">
                <a href="javascript:;" class="btn btn-sm btn-outline-purple rounded-0 text-uppercase px-3 py-2" role="button"
                onclick="history.go(-1)">
                    &xlarr;&nbsp;
                    B A C K
                </a>
                <?php if($car['status'] == 1): ?>
                <a href="car_booking.php?car_id=<?= $car['car_id'] ?>" class="btn btn-sm btn-purple rounded-0 text-uppercase px-3 py-2" role="button">
                    Proceed to Booking&nbsp;&xrarr;
                </a>
                <?php endif; ?>
            </div><!-- btn-bx -->

        </div><!-- /.row -->
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
