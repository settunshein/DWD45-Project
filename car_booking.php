<?php include('include/header.php'); ?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
        <h2 class="fw-bold text-uppercase">
            <p class="fs-5 mb-1">Book Your Cars</p>
            <span class="d-block fs-2">Lorem ipsum dolor sit amet.</span>
        </h2>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-car-details py-5">
    <div class="container px-0 py-5">
        <div class="row g-4 px-2 px-md-0">

            <div class="col-md-7">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" class="booking-form col-md-12" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <label for="rent_date" class="fs-13 fw-bold mb-1">Rent Date <b class="custom-text-danger">*</b></label>
                            <input type="date" name="rent_date" id="rent_date" class="form-control form-control-sm rent_date rounded-0"
                            min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="return_date" class="fs-13 fw-bold mb-1">Return Date</label>
                            <input type="date" name="return_date" id="return_date" class="form-control form-control-sm return_date rounded-0"
                            min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name" class="fs-13 fw-bold mb-1">Username</label>
                            <input type="name" name="name" id="name" class="form-control form-control-sm rounded-0"
                            value="<?= $auth_user['name'] ?? '' ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email" class="fs-13 fw-bold mb-1">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm rounded-0"
                            value="<?= $auth_user['email'] ?? '' ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nrc_no" class="fs-13 fw-bold mb-1">NRC Number</label>
                            <input type="text" name="nrc_no" id="nrc_no" class="form-control form-control-sm rounded-0"
                            value="<?= $auth_user['nrc_no'] ?? '' ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="phone" class="fs-13 fw-bold mb-1">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control form-control-sm rounded-0"
                            value="<?= $auth_user['phone'] ?? '' ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="" class="fs-13 fw-bold mb-1">NRC Front Image</label>
                            <input type="file" class="dropify" name="car_img" id="car_img" required>
                        </div>

                        <div class="from-group col-md-6">
                            <label for="" class="fs-13 fw-bold mb-1">NRC Back Image</label>
                            <input type="file" class="dropify" name="car_img" id="car_img" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="address" class="fs-13 fw-bold mb-1">Address</label>
                            <textarea name="address" id="address" rows="3" class="form-control form-control-sm rounded-0"><?= $auth_user['address'] ?? '' ?></textarea>
                        </div>
                    </div>
                </form>
            </div><!-- /.col-md-7 -->

            <div class="col-md-5">
                <div class="card mt-4 rounded-0">
                    <div class="p-3">
                        <div class="d-flex justify-content-between mx-0">
                            <div class="col-md-5 p-3">
                                <img src="assets/img/cars/img_honda_amaze.jpg" alt="<?= $car['name'] ?>" class="img-fluid">
                            </div>

                            <div class="col-md-7">
                            <table class="table table-bordered fs-13 my-3">
                                <tr>
                                    <td>
                                        <i class="ri ri-dashboard-3-line fw-bold"></i>
                                        1500 CC
                                    </td>

                                    <td>
                                        <i class="ri ri-group-2-line fw-bold"></i>
                                        5 Seaters
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="ri ri-gas-station-line fw-bold"></i>
                                        Petrol & Diesel
                                    </td>

                                    <td>
                                        <i class="ri ri-steering-line fw-bold"></i>
                                        A/M
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        <hr class="mb-0">
                    </div>

                    <div class="card-body pb-0">
                        <h6 class="course-ttl fs-14 fw-bold">
                            <a href="#">
                                <span style="margin-left: 2.5px;">Honda Amaze</span>
                            </a>
                        </h6>
                    </div>


                    <div class="card-body">
                        <table class="table table-bordered fs-13">
                            <tr>
                                <td class="fw-bold">Rent Fee</td>
                                <td>
                                    <span><?= number_format($car['rent_fee']) ?></span>&nbsp;
                                    <small>MMK</small>
                                    / <small style="font-size: 12px;">Day</small>
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bold">Duration</td>
                                <td><span id="duration">1</span> Days</td>
                            </tr>

                            <tr>
                                <td class="fw-bold">Total Charges</td>
                                <td>
                                    <span id="total_charges"><?= number_format($car['rent_fee']) ?></span>&nbsp;
                                    <small>MMK</small>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div><!-- /.col-md-5 -->

            <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-outline-purple rounded-0 text-uppercase px-3 py-2" role="button">
                    &xlarr;&nbsp;
                    B A C K
                </a>
                <?php if(isset($auth_user)): ?>
                    <input type="hidden" name="car_id" value="<?= $_GET['book_car_id'] ?>">
                    <input type="hidden" name="owner_id" value="<?= $car['owner_id'] ?>">
                    <input type="hidden" name="customer_id" value="<?= $auth_user['auth_id'] ?>">
                    <input type="hidden" name="rent_fee" value="<?= $car['rent_fee'] ?>" id="rent_fee">
                    <input type="hidden" name="duration" id="input_duration" value="1">
                    <button type="submit" class="btn btn-theme rounded-0 text-uppercase px-4" name="insert_booking">
                        BOOK NOW
                    </button>
                <?php else: ?>
                    <a href="javascript:;" class="btn btn-sm btn-purple rounded-0 text-uppercase px-3 py-2"
                    onclick="toastr.error('You Must Login to Book a Car for Rent &nbsp;<i class=\'fas fa-exclamation-circle\'></i>', 'ACCESS DENIED', {
                        closeButton: true,
                        progressBar: true,
                    })">
                        BOOK NOW&nbsp;&xrarr;
                    </a>
                </a>
                <?php endif; ?>
            </div><!-- btn-bx -->

        </div><!-- /.row -->
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
