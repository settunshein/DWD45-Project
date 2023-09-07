<div class="container">
    <div class="row">

        <div class="modal fade" tabindex="-1" role="dialog" id="showPaymentScreenshotModal<?=$booking['id']?>">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header align-items-center py-0">
                        <span class="custom-card-title" style="color: var(--color-purple);">Your Payment Screenshot</span>
                        <button type="button" class="close btn btn-sm" data-bs-dismiss="modal" style="color: var(--color-purple);">
                            <span class="fs-4">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p class="text-center pt-3">
                            <img src="admin/pages/_uploads/payments/<?= $payment['payment_ss'] ?>" class="img-fluid" width="400">
                        </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-purple rounded-0 fs-13 px-3 py-2" data-bs-dismiss="modal" style="letter-spacing: 1px;">
                            CLOSE
                        </button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
</div>
