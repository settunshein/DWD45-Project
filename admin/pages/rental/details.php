<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Rental Management</h1>
    </div>

    <div class="card mb-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="table-title">Rental Details Info</span>
            <a href="dashboard.php?view=rental_index" class="btn btn-sm btn-outline-dark rounded-0">
                <i class="fas fa-arrow-circle-left"></i>&nbsp;
                B A C K
            </a>
        </div>

        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-6">
                    <address class="mb-2">
                        <strong><?= strtoupper($owner['name']) ?></strong><br>
                        <?= $owner['address'] ?><br>
                        Phone: <?= $owner['phone'] ?><br>
                        Email: <?= $owner['email'] ?>
                    </address>
                </div>

                <div class="col-6 text-right">
                    <address class="mb-2">
                        <strong><?= strtoupper($rental['customer_name']) ?></strong><br>
                        <?= $rental['address'] ?><br>
                        Phone: <?= $rental['phone'] ?><br>
                        Email: <?= $rental['email'] ?>
                    </address>
                </div>
            </div><!-- End of 2nd Row -->
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-4">
                        <img src="_uploads/cars/<?= $rental['car_image'] ?>" class="img-fluid">
                    </div>
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <h6 class="mb-3">
                        <a href="">
                            <span style="margin-left: 2.5px;"><?= $rental['car_name'] ?></span>
                        </a>
                    </h6>
                    <table class="table table-bordered">
                        <tr>
                            <td>Rent Fee</td>
                            <td>
                                <span><?= number_format($rental['rent_fee']) ?></span>&nbsp;
                                <small>MMK</small>
                                / <small style="font-size: 12px;">Day</small>
                            </td>
                        </tr>

                        <tr>
                            <td>Duration</td>
                            <td><span id="duration"><?= $rental['duration'] ?></span> Days</td>
                        </tr>

                        <tr>
                            <td>Total Charges</td>
                            <td>
                                <span id="total_charges"><?= number_format($rental['rent_fee'] * $rental['duration']) ?></span>&nbsp;
                                <small>MMK</small>
                            </td>
                        </tr>

                        <tr>
                            <td>Booking Status</td>
                            <td>
                                <?php if($rental['booking_status'] == 0): ?>
                                    <span class="badge badge-warning px-3 py-2 rounded-0 text-uppercase text-white" style="font-size: 11.75px; letter-spacing: .5px;">
                                        Pending
                                    </span>
                                <?php  elseif($rental['booking_status'] == 1): ?>
                                    <span class="badge badge-success px-3 py-2 rounded-0 text-uppercase" style="font-size: 11.75px; letter-spacing: .5px;">
                                        Approved
                                    </span>
                                <?php elseif($rental['booking_status'] == 2): ?>
                                    <span class="badge badge-danger px-3 py-2 rounded-0 text-uppercase" style="font-size: 11.75px; letter-spacing: .5px;">
                                        Canceled
                                    </span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Car Status</td>
                            <td>
                                <?php if($rental['car_status'] == 1): ?>
                                    <span class="badge badge-success px-3 py-2 rounded-0 text-uppercase" style="font-size: 11.75px; letter-spacing: .5px;">
                                        Avaliable
                                    </span>
                                <?php else: ?>
                                    <span class="badge badge-danger px-3 py-2 rounded-0 text-uppercase" style="font-size: 11.75px; letter-spacing: .5px;">
                                        Unavalible
                                    </span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Return Status</td>
                            <td>
                                <?php if($rental['return_status'] == 0): ?>
                                    <span class="badge badge-danger px-3 py-2 rounded-0 text-uppercase" style="font-size: 11.75px; letter-spacing: .5px;">
                                        In Rent
                                    </span>
                                <?php else: ?>
                                    <span class="badge badge-success px-3 py-2 rounded-0 text-uppercase" style="font-size: 11.75px; letter-spacing: .5px;">
                                        Returned
                                    </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div><!-- /.col-6 -->
            </div><!-- /.row -->

            <hr class="my-5">


        </div><!-- /.card-body -->

    </div>
</main>
