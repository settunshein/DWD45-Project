<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Contact Info Management</h1>
    </div>

    <div class="card mb-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="table-title py-1">Contact Info Details</span>
        </div><!-- /.card-header -->

        <div class="card-body pt-2">
            <div class="row justify-content-between mt-3">
                <div class="col-md-12 mb-4">
                    <style>
                        iframe {
                            height: 250px !important;
                            border-radius: 8px;
                        }
                    </style>
                    <?= $contact['google_map'] ?>
                </div>

                <div class="col-md-5 d-flex mb-3">
                    <div class="icon-bx mr-3">
                        <i class="far fa-map bg-dark text-light p-3 rounded-circle" style="font-size: 16px;"></i>
                    </div>
                    <div>
                        <p style="font-size: 13.5px;"><?= $contact['location'] ?></p>
                    </div>
                </div>

                <div class="col-md-5 d-flex mb-3">
                    <div class="icon-bx mr-3">
                        <i class="far fa-envelope bg-dark text-light p-3 rounded-circle" style="font-size: 16px;"></i>
                    </div>
                    <div>
                        <p style="font-size: 13.5px;"><?= $contact['email'] ?></p>
                    </div>
                </div>

                <div class="col-md-5 d-flex mb-3">
                    <div class="icon-bx mr-3">
                        <i class="fas fa-headset bg-dark text-light p-3 rounded-circle" style="font-size: 16px;"></i>
                    </div>
                    <div>
                        <p style="font-size: 13.5px;"><?= $contact['phone'] ?></p>
                    </div>
                </div>

                <div class="col-md-5 d-flex mb-3">
                    <div class="icon-bx mr-3">
                        <i class="fas fa-globe bg-dark text-light p-3 rounded-circle" style="font-size: 16px;"></i>
                    </div>
                    <div>
                        <p style="font-size: 13.5px;"><?= $contact['website'] ?></p>
                    </div>
                </div>
            </div>
        </div><!-- /.card-body -->

        <div class="card-footer">
            <button class="btn btn-sm btn-outline-dark rounded-0 float-right" type="submit" name="edit_contact_info">
                <i class="fa fa-edit"></i>&nbsp;
                Edit
            </button>
        </div>

    </div>
</main>
