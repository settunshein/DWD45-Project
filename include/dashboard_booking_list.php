<?php $bookings = get_all_rentals($auth_user['auth_id']); ?>
<div class="tab-pane fade show active" id="tab-booking-list" role="tabpanel">
    <div class="card rounded-0">
        <div class="card-header text-light rounded-0" style="background-color: var(--color-purple); border: 1px solid var(--color-purple);">
            <p style="margin-top: 1px; margin-bottom: 1px;">My Booking List</p>
        </div>

        <div class="card-body">
            <table class="table table-bordered fs-13">
                <tr class="text-center">
                    <th width="8%">#</th>
                    <th>Car Info</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Total Charges</th>
                    <th>Booking Status</th>
                    <th>Payment</th>
                </tr>

                <?php $counter = 1 ?>
                <?php if(mysqli_num_rows($bookings) > 0): ?>

                    <?php while($booking = mysqli_fetch_assoc($bookings)): ?>

                        <tr class="text-center align-middle">
                            <td><?= $counter++ ?></td>

                            <td>
                                <div class="py-2">
                                    <div class="img-bx">
                                        <img src="admin/pages/_uploads/cars/<?= $booking['car_image'] ?>"
                                        alt="<?= $booking['car_name'] ?>" width="100" height="100" class="img-fluid">
                                    </div>
                                    <a class="mt-3 d-block" role="button" href="car_details.php?car_id=<?= $booking['car_id'] ?>"
                                    style="color: var(--color-purple);">
                                        <?= $booking['car_name'] ?>
                                    </a>
                                </div>
                            </td>

                            <td><?= date("M d, Y", strtotime($booking['rent_date'])) ?></td>

                            <td><?= date("M d, Y", strtotime($booking['return_date'])) ?></td>

                            <td>
                                <?= number_format($booking['rent_fee'] * $booking['duration']) ?>
                                <small>MMK</small>
                            </td>

                            <td class="fs-14">
                                <?php if($booking['status'] == 0): ?>
                                    <span class="badge bg-primary text-uppercase rounded-pill px-3 py-2"
                                    style="font-weight: 400;">
                                        Pending
                                    </span>
                                <?php elseif($booking['status'] == 1): ?>
                                    <span class="badge bg-success text-uppercase rounded-pill px-3 py-2"
                                    style="font-weight: 400;">
                                        Approved
                                    </span>
                                <?php else: ?>
                                    <span class="badge bg-danger text-uppercase rounded-pill px-3 py-2"
                                    style="font-weight: 400;">
                                        Cancel
                                    </span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <?php $payment = check_payment_status($booking['id']); ?>
                                <?php if($payment): ?>
                                <a href="javascript:;" class=""
                                data-bs-toggle="modal" data-bs-target="#showPaymentScreenshotModal<?=$booking['id']?>">
                                    View Payment
                                </a>
                                <?php else: ?>
                                <a href="javascript:;" class=""
                                data-bs-toggle="modal" data-bs-target="#showPaymentModal<?=$booking['id']?>">
                                    Pay Now
                                </a>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <?php
                        include('include/payment_modal.php');
                        include('include/payment_ss_modal.php');
                        ?>

                    <?php endwhile; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="7">
                            <p class="text-center text-danger mb-0 py-3"><b>No Data Available</b></p>
                        </td>
                    </tr>

                <?php endif; ?>
            </table>
        </div>
    </div>
</div>
