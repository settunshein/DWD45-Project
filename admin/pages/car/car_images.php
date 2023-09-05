<style>
    .dropify-wrapper {
        border-radius: 0 !important;
    }
</style>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Car Management</h1>
    </div>

    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="car_id" value="<?=$_GET['car_id']?>">
        <div class="row mb-5">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="table-title py-1">Create or Update Car Form</span>
                        <a href="dashboard.php?view=car_index" class="btn btn-sm btn-outline-dark rounded-0">
                            <i class="fas fa-arrow-circle-left"></i>&nbsp;
                            B A C K
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-3 mb-4">
                                <label class="font-weight-bold">Car Image 1</label>
                                <input type="file" class="dropify" name="car_image1"
                                data-default-file =
                                <?php
                                    if (isset($car_images['image_1']) && $car_images['image_1'] != '') {
                                        echo "_uploads/car_images/{$car_images['image_1']}";
                                    }
                                ?>>
                                <div class="mt-2 text-center">
                                    <a href="" class="btn btn-sm rounded-0 btn-danger">
                                        <i class="fa fa-trash-alt"></i>&nbsp;
                                        Delete
                                    </a>
                                </div>
                            </div>

                            <div class="form-group col-md-3 mb-4">
                                <label class="font-weight-bold">Car Image 2</label>
                                <input type="file" class="dropify" name="car_image2"
                                data-default-file =
                                <?php
                                    if (isset($car_images['image_2']) && $car_images['image_2'] != '') {
                                        echo "_uploads/car_images/{$car_images['image_2']}";
                                    }
                                ?>>
                                <div class="mt-2 text-center">
                                    <a href="" class="btn btn-sm rounded-0 btn-danger">
                                        <i class="fa fa-trash-alt"></i>&nbsp;
                                        Delete
                                    </a>
                                </div>
                            </div>

                            <div class="form-group col-md-3 mb-4">
                                <label class="font-weight-bold">Car Image 3</label>
                                <input type="file" class="dropify" name="car_image3"
                                data-default-file =
                                <?php
                                    if (isset($car_images['image_3']) && $car_images['image_3'] != '') {
                                        echo "_uploads/car_images/{$car_images['image_3']}";
                                    }
                                ?>>
                                <div class="mt-2 text-center">
                                    <a href="" class="btn btn-sm rounded-0 btn-danger">
                                        <i class="fa fa-trash-alt"></i>&nbsp;
                                        Delete
                                    </a>
                                </div>
                            </div>

                            <div class="form-group col-md-3 mb-4">
                                <label class="font-weight-bold">Car Image 4</label>
                                <input type="file" class="dropify" name="car_image4"
                                data-default-file =
                                <?php
                                    if (isset($car_images['image_4']) && $car_images['image_4'] != '') {
                                        echo "_uploads/car_images/{$car_images['image_4']}";
                                    }
                                ?>>
                                <div class="mt-2 text-center">
                                    <a href="" class="btn btn-sm rounded-0 btn-danger">
                                        <i class="fa fa-trash-alt"></i>&nbsp;
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button class="btn btn-sm btn-outline-dark rounded-0 px-3" type="submit" name="insert_car_images">
                            <i class="fas fa-save"></i>&nbsp;
                            S A V E
                        </button>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

    </form>
</main>
