<div class="tab-pane fade" id="tab-password-update" role="tabpanel">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="auth_id" value="<?= $auth_user['auth_id'] ?>">
        <input type="hidden" name="userside_pwd_update" value="userside_pwd_update">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-light rounded-0" style="background-color: var(--color-purple); border: 1px solid var(--color-purple);">
                        <p style="margin-top: 1px; margin-bottom: 1px;">Update Password</p>
                    </div>

                    <div class="card-body">
                        <div class="row g-2">
                            <div class="form-group mb-3">
                                <label for="current_password" class="mb-1">
                                    Current Password <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input name="current_password" id="current_password" type="password" class="form-control rounded-0 fs-14" autofocus required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="new_password" class="mb-1">
                                    New Password <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input name="new_password" id="new_password" type="password" class="form-control rounded-0 fs-14" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="mb-1">
                                    Confirm Password <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input name="confirm_password" id="confirm_password" type="password" class="form-control rounded-0 fs-14" required>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-white text-end">
                        <button type="submit" class="btn btn-purple rounded-0 text-uppercase px-2 py-2 fs-13" name="edit_password">
                            Update Password
                        </button>
                    </div>
                </div>
            </div><!-- /.col-md-12-->
        </div>

    </form>
</div>
