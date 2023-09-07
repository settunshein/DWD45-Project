<div class="row align-items-center">
    <div class="col-md-4">
        <div class="p-4">
            <img src="_uploads/cars/<?= $rental['car_image'] ?>" class="img-fluid" width="300">
        </div>
    </div><!-- /.col-md-6 -->

    <div class="col-md-8">
        <h6 class="mb-3">
            <a href="#">
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
                <td>
                    <span id="duration">
                        <?= $rental['duration'] ?>
                    </span>
                    <?= ($rental['duration'] == 1) ? 'Day' : 'Days' ?>
                    <span>( <?= $rental['rent_date'] ?> to <?= $rental['return_date'] ?> )</span>
                </td>
            </tr>

            <tr>
                <td>Total Charges</td>
                <td>
                    <span id="total_charges"><?= number_format($rental['rent_fee'] * $rental['duration']) ?></span>&nbsp;
                    <small>MMK</small>
                </td>
            </tr>
        </table>
    </div><!-- /.col-6 -->

    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <td colspan="2">
                    <h6 class="mb-0" style="color: #772953;">
                        <span style="margin-left: 2.5px;">&#10061; Customer Info</span>
                    </h6>
                </td>
            </tr>

            <tr>
                <td class="fw-normal">Customer's Name</td>
                <td class="fw-normal"><?= $rental['customer_name'] ?></td>
            </tr>

            <tr>
                <td class="fw-normal">Customer's Email</td>
                <td class="fw-normal"><?= $rental['email'] ?></td>
            </tr>

            <tr>
                <td class="fw-normal">Customer's Phone</td>
                <td class="fw-normal"><?= $rental['phone'] ?></td>
            </tr>

            <tr>
                <td class="fw-normal">Customer's Address</td>
                <td class="fw-normal"><?= $rental['address'] ?></td>
            </tr>
        </table>

        <div class="row">
            <div class="col-md-4">
                <p class="fs-13 fw-bold mb-2">Customer's Photo</p>
                <div class="">
                    <?php if($rental['user_image']): ?>
                        <img src="uploads/user/<?=$rental['user_image']?>" alt="<?= ucwords($rental['customer_name']); ?>"
                        class="rounded-circle img-fluid" width="100">
                    <?php else: ?>
                        <img src="https://ui-avatars.com/api/?background=772953&color=fff&name=<?= $rental['customer_name'] ?>"
                        class="img-fluid align-self-center mr-3" width="100" height="100">
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-4">
                <p class="fs-13 fw-bold mb-1 px-2">NRC Front</p>
                <div class="">
                    <img src="_uploads/nrc/<?= $rental['nrc_front'] ?>" class="img-fluid">
                </div>
            </div>

            <div class="col-md-4">
                <p class="fs-13 fw-bold mb-1 px-2">NRC Back</p>
                <div class="">
                    <img src="_uploads/nrc/<?= $rental['nrc_back'] ?>" class="img-fluid">
                </div>
            </div>
        </div><!-- /.customer-info-blk -->
    </div>
</div><!-- /.row -->

<hr class="my-3">
