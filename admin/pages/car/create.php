<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Car Management</h1>
    </div>

    <form method="POST" enctype="multipart/form-data">
        <!-- <input type="hidden" name="owner_id" value="1"> -->
        <div class="row mb-5">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="table-title py-1">Create Car Form</span>
                    </div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="brand_id">
                                    Brand <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <select class="form-control" id="brand_id" name="brand_id" required>
                                    <option selected disabled class="text-muted"> - Select Brand - </option>
                                    <?php while($brand = mysqli_fetch_assoc($brands)): ?>
                                    <option value="<?= $brand['id'] ?>">&#10061; <?= $brand['name'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">
                                    Car's Name <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="engine">
                                    Car's Engine <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="text" name="engine" id="engine" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="modal_year">
                                    Model Year <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="text" name="model_year" id="model_year" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="capacity">
                                    Capacity <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="number" name="capacity" id="capacity" class="form-control" min="2" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="transmission">
                                    Transmission <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <select name="transmission" id="transmission" class="form-control" required>
                                    <option disabled selected>- Select Transmission -</option>
                                    <option value="manual">Manual</option>
                                    <option value="auto">Automatic</option>
                                    <option value="both">Manual & Automatic</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="plate_no">
                                    Plate Number <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="text" name="plate_no" id="plate_no" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fuel_type">
                                    Fuel Type <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="text" name="fuel_type" id="fuel_type" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="rent_fee">
                                    Rent Fee ( Per Day ) <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <input type="number" name="rent_fee" id="rent_fee" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="status">
                                    Car Stats <span class="font-weight-bold text-danger">*</span>
                                </label>
                                <select name="status" id="status" class="form-control" required>
                                    <option disabled>- Select Car Status -</option>
                                    <option value="1" selected>Available</option>
                                    <option value="0">Unavailable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="table-title">Car Image</span>
                            <a href="dashboard.php?view=car_index" class="btn btn-sm btn-outline-dark rounded-0">
                                <i class="fas fa-arrow-circle-left"></i>&nbsp;
                                B A C K
                            </a>
                        </div>
                    </div><!-- End of card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12 mb-0">
                                <input type="file" class="dropify" name="car_img" id="car_img" required>
                            </div>
                        </div>
                    </div><!-- End of card-body -->
                </div>
            </div><!-- End of col-md-4 -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="table-title py-1">Car's Features</span>
                    </div>

                    <div class="card-body">
                        <div class="form-row justify-content-between">
                            <div class="col-3 mb-4 mb-md-0 px-0">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="air_condition" id="air_condition" name="air_condition">
                                    <label class="form-check-label font-weight-normal" for="air_condition" role="button">
                                        Air Condition
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="child_seats" id="child_seats" name="child_seats">
                                    <label class="form-check-label font-weight-normal" for="child_seats" role="button">
                                        Child Seats
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="gps" id="gps" name="gps">
                                    <label class="form-check-label font-weight-normal" for="gps" role="button">
                                        GPS
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="luggage" id="luggage" name="luggage">
                                    <label class="form-check-label font-weight-normal" for="luggage" role="button">
                                        Luggage
                                    </label>
                                </div>
                            </div><!-- /.col-3 -->

                            <div class="col-3 mb-4 mb-md-0 px-0">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="seat_belt" id="seat_belt" name="seat_belt">
                                    <label class="form-check-label font-weight-normal" for="seat_belt" role="button">
                                        Seat Belt
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="sleeping_bed" id="sleeping_bed" name="sleeping_bed">
                                    <label class="form-check-label font-weight-normal" for="sleeping_bed" role="button">
                                        Sleeping Bed
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="water" id="water" name="water">
                                    <label class="form-check-label font-weight-normal" for="water" role="button">
                                        Water
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="music_player" id="music_player" name="music_player">
                                    <label class="form-check-label font-weight-normal" for="music_player" role="button">
                                        Music Player
                                    </label>
                                </div>
                            </div><!-- /.col-3 -->

                            <div class="col-3 mb-4 mb-md-0 px-0">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="bluetooth" id="bluetooth" name="bluetooth">
                                    <label class="form-check-label font-weight-normal" for="bluetooth" role="button">
                                        Bluetooth
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="onboard_computer" id="onboard_computer" name="onboard_computer">
                                    <label class="form-check-label font-weight-normal" for="onboard_computer" role="button">
                                        Onboard Computer
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="audio_input" id="audio_input" name="audio_input">
                                    <label class="form-check-label font-weight-normal" for="audio_input" role="button">
                                        Audio Input
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox"
                                    value="car_kit" id="car_kit" name="car_kit">
                                    <label class="form-check-label font-weight-normal" for="car_kit" role="button">
                                        Car Kit
                                    </label>
                                </div>
                            </div><!-- /.col-3 -->
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-dark rounded-0 float-right" type="submit" name="insert_car">
                            <i class="fa fa-edit"></i>&nbsp;
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

    </form>
</main>
