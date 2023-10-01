<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Contact Info Management</h1>
    </div>

    <form method="POST" id="editContactInfoForm">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="table-title">Edit Contact Info Form</span>
                <a href="dashboard.php?view=contact_info_index" class="btn btn-sm btn-outline-dark rounded-0">
                    <i class="fas fa-arrow-circle-left"></i>&nbsp;
                    B A C K
                </a>
            </div>

            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="location">
                            Location <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="location" id="location" type="text" class="form-control" value="<?= $contact_info['location'] ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">
                            Email Address <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="email" id="email" type="email" class="form-control" value="<?= $contact_info['email'] ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="phone">
                            Phone Number <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="phone" id="phone" type="text" class="form-control" value="<?= $contact_info['phone'] ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="website">
                            Website <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="website" id="website" type="text" class="form-control" value="<?= $contact_info['website'] ?>" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-sm btn-outline-dark rounded-0 float-right" type="submit" name="edit_contact_info">
                    <i class="fa fa-edit"></i>&nbsp;
                    Update
                </button>
            </div>
        </div>
    </form>
</main>
