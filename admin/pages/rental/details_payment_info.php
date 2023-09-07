<div class="row">
    <?php $payment = check_payment_status($rental['rental_id']); ?>
    <?php if($payment): ?>
    <div class="col-6">
        <table class="mt-3 table table-bordered">
            <tr>
                <td colspan="2">
                    <h6 class="mb-0">
                        <span style="margin-left: 2.5px;">Payment Info</span>
                    </h6>
                </td>
            </tr>

            <tr>
                <td>Payment Date</td>
                <td><?= $payment['payment_date'] ?></td>
            </tr>

            <tr>
                <td>Payment Amount</td>
                <td><?= number_format($payment['payment_amt']) ?> <small>MMK</small></td>
            </tr>
        </table>
    </div><!-- /.col-6 -->

    <div class="col-6">
        <div class="card mt-3">
            <div class="card-body">
                <img src="_uploads/payment/<?= $payment['payment_ss'] ?>" class="img-fluid">
            </div>
        </div>
    </div><!-- /.col-6 -->

    <?php else: ?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-danger text-center mb-0">NO PAID</h2>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div><!-- /.row -->
