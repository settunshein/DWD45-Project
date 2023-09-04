<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Update Password</h1>
    </div>

    <form method="POST" id="editPasswordForm">
        <input type="hidden" name="email" value="<?= $auth_user['email'] ?>">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="table-title py-1">Edit Password Form</span>
            </div>

            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="current_password">
                            Current Password <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="current_password" id="current_password" type="password" class="form-control form-control-sm" placeholder="* * * * * * * * *" required>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="new_password">
                            New Password <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="new_password" id="new_password" type="password" class="form-control form-control-sm" placeholder="* * * * * * * * *" required>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="confirm_password">
                            Confirm Password <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="confirm_password" id="confirm_password" type="password" class="form-control form-control-sm" placeholder="* * * * * * * * *" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-sm btn-outline-dark rounded-0 float-right" type="submit" name="edit_password">
                    <i class="fa fa-edit"></i>&nbsp;
                    Update
                </button>
            </div>
        </div>
    </form>
</main>
