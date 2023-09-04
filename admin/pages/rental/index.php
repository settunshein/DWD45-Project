<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Rental Management</h1>
    </div>

    <div class="card mb-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="table-title py-1">Rental List Table</span>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center v-middle mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th width="12%">Car</th>
                        <th>Customer</th>
                        <th>Rent Date</th>
                        <th>Return Date</th>
                        <th>Booking Status</th>
                        <th>Return Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(mysqli_num_rows($rentals) > 0): ?>
                        <?php while($rental = mysqli_fetch_assoc($rentals)): ?>
                        <tr>
                            <td>#</td>
                            <td>
                                <div class="">
                                    <img src="_uploads/cars/<?= $rental['car_image'] ?>" class="img-fluid">
                                    <span class="badge rounded-pill badge-primary px-4 py-2 text-light mt-3"
                                    style="font-weight: 400; font-size: 12.5px;">
                                        <?= $rental['car_name'] ?>
                                    </span>
                                </div>
                            </td>
                            <td><?= strtoupper($rental['customer_name']) ?></td>
                            <td><?= $rental['rent_date'] ?></td>
                            <td><?= $rental['return_date'] ?></td>
                            <td>
                                <form method="POST" id="updateBookingStatusForm<?=$rental['id']?>">
                                    <input type="hidden" name="rental_id" value="<?=$rental['id']?>">
                                    <input type="hidden" name="car_id"    value="<?=$rental['car_id']?>">
                                    <input type="hidden" name="booking_status" id="booking_status<?=$rental['id']?>">
                                    <input type="hidden" name="update_booking_status">
                                </form>

                                <div class="btn-group">
                                    <?php
                                        $btn_color = '';

                                        if ($rental['booking_status'] == 0) {
                                            $btn_color = 'btn-warning';
                                        } else if($rental['booking_status'] == 1) {
                                            $btn_color = 'btn-success';
                                        } else if($rental['booking_status'] == 2) {
                                            $btn_color = 'btn-danger';
                                        }
                                    ?>
                                    <button type="button" class="btn btn-sm <?=$btn_color?> rounded-0 dropdown-toggle text-uppercase"
                                    data-toggle="dropdown" id="dropdown_toggle<?=$rental['id']?>">
                                        <?php
                                            if ($rental['booking_status'] == 0) {
                                                echo 'PENDING';
                                            } else if($rental['booking_status'] == 1) {
                                                echo 'APPROVED';
                                            } else {
                                                echo 'CANCELED';
                                            }
                                        ?>
                                    </button>
                                    <div class="dropdown-menu text-uppercase">
                                        <a class="dropdown-item update-booking-status"
                                        style="font-size: 13px;" href="javascript:;" data-id="<?= $rental['id'] ?>" data-booking-status="0">
                                            Pending
                                        </a>
                                        <a class="dropdown-item update-booking-status"
                                        style="font-size: 13px;" href="javascript:;" data-id="<?= $rental['id'] ?>" data-booking-status="1">
                                            Approved
                                        </a>
                                        <a class="dropdown-item update-booking-status"
                                        style="font-size: 13px;" href="javascript:;" data-id="<?= $rental['id'] ?>" data-booking-status="2">
                                            Canceled
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form method="POST" id="updateReturnStatusForm<?=$rental['id']?>">
                                    <input type="hidden" name="rental_id" value="<?=$rental['id']?>">
                                    <input type="hidden" name="car_id"    value="<?=$rental['car_id']?>">
                                    <input type="hidden" name="update_return_status">
                                </form>
                                <input class="return-status-toggle" type="checkbox"
                                data-style="android" data-onstyle="success" data-offstyle="danger"
                                data-size="small" data-on="Returned" data-off="In Rent"
                                <?= ($rental['return_status'] == 1) ? 'checked' : '' ?>
                                data-id="<?= $rental['id'] ?>">
                            </td>
                            <td>
                                <a href="dashboard.php?view=rental_details&rental_id=<?=$rental['id']?>"
                                class="btn btn-sm btn-outline-dark rounded-0">
                                    <i class="fas fa-exclamation-circle"></i>
                                </a>

                                <a href="javascript:;" class="btn btn-sm btn-outline-dark rounded-0"
                                data-toggle="modal" data-target="#showDeleteRentalModal<?=$rental['id']?>">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                                <?php include('delete.php'); ?>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8">
                                <p class="text-danger mb-0"><b>No Data Available</b></p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>
