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
</div><!-- /.row -->

<hr class="my-5">
