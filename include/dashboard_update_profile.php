<?php $user = get_user($auth_user['auth_id']); ?>
<div class="tab-pane fade" id="tab-profile" role="tabpanel">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="auth_id" value="<?= $auth_user['auth_id'] ?>">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-light rounded-0" style="background-color: var(--color-purple); border: 1px solid var(--color-purple);">
                        <p style="margin-top: 1px; margin-bottom: 1px;">Update Profile</p>
                    </div>

                    <div class="card-body">
                        <div class="row g-2">
                            <div class="form-group col-md-6 mb-3">
                                <label for="name" class="mb-1">
                                    Username <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input name="name" id="name" type="name" class="form-control rounded-0 fs-14" value="<?= $user['name'] ?? '' ?>" autofocus>
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="email" class="mb-1">
                                    Email Address <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input name="email" id="email" type="email" class="form-control rounded-0 fs-14" value="<?= $user['email'] ?? '' ?>">
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="phone" class="mb-1">
                                    Phone Number <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input name="phone" id="phone" type="text" class="form-control rounded-0 fs-14" value="<?= $user['phone'] ?? '' ?>">
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="nrc_no" class="mb-1">
                                    NRC Number <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="text" name="nrc_no" id="nrc_no" class="form-control rounded-0 fs-14" value="<?= $user['nrc_no'] ?? '' ?>">
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                <label for="address" class="mb-1">
                                    Address <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <textarea name="address" id="address" rows="5" class="form-control form-control-sm rounded-0 fs-14"><?= $user['address'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-7 -->

            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-header text-light rounded-0" style="background-color: var(--color-purple); border: 1px solid var(--color-purple);">
                        <p style="margin-top: 1px; margin-bottom: 1px;">Profile Image</p>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12 mb-0">
                                <input type="file" class="dropify" name="profile" id="profile"
                                data-default-file =
                                <?php
                                    if (isset($user['image'])) {
                                        echo "admin/pages/_uploads/users/{$user['image']}";
                                    }
                                ?>>
                            </div>
                        </div>
                    </div><!-- End of card-body -->

                    <div class="card-footer bg-white text-end">
                        <button type="submit" class="btn btn-sm btn-purple rounded-0 text-uppercase px-3 py-2 fs-13" name="edit_profile">
                            Update Profile
                        </button>
                    </div>
                </div>
            </div><!-- /.col-md-5 -->
        </div>
    </form>

</div>
