<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="customer_id"  value="<?= $auth_user['auth_id'] ?>">
    <input type="hidden" name="rental_id"    value="<?= $booking['id'] ?>">
    <input type="hidden" name="payment_date" value="<?= date('Y-m-d') ?>">
    <input type="hidden" name="payment_amt"  value="<?= $booking['rent_fee'] * $booking['duration'] ?>">

    <div class="container">
        <div class="row">

            <div class="modal fade" tabindex="-1" role="dialog" id="showPaymentModal<?=$booking['id']?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header align-items-center py-0">
                            <span class="custom-card-title fs-13 fw-bold" style="color: var(--color-purple);">Payment</span>
                            <button type="button" class="close btn btn-sm" data-bs-dismiss="modal" style="color: var(--color-purple);">
                                <span class="fs-4">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div>
                                <label for="payment_ss" class="mb-1 fs-13">Choose Your Payment Screenshot</label>
                                <input class="form-control form-control-sm rounded-0" type="file" name="payment_ss" id="payment_ss">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-outline-purple rounded-0 fs-13 px-3 py-2" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>&nbsp;
                                Cancel
                            </button>

                            <button type="submit" class="btn btn-sm submit btn-purple rounded-0 fs-13 px-3 py-2" name="insert_payment">
                                <i class="fas fa-paper-plane"></i>&nbsp;
                                Send
                            </button>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div>
    </div>
</form>
