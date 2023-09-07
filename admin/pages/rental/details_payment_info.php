<div class="row">
    <?php $payment = check_payment_status($rental['rental_id']); ?>

    <?php if($payment): ?>
    <div class="col-9">
        <table class="mt-3 table table-bordered">
            <tr>
                <td colspan="2">
                    <h6 class="mb-0" style="color: #772953;">
                        <span style="margin-left: 2.5px;">&#10061; Payment Info</span>
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
        </table><!-- /.payment-info-tbl -->
    </div><!-- /.col-6 -->

    <div class="col-3">
        <div class="card mt-3">
            <div class="card-body">
                <img src="_uploads/payments/<?= $payment['payment_ss'] ?>" class="img-fluid">
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
