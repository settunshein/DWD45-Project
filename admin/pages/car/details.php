<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">
            <span class="badge badge-primary px-3 py-2 rounded-0 text-uppercase">
                <?= $car['name'] ?>
            </span>
        </h1>
        <a href="dashboard.php?view=car_index" class="btn btn-sm btn-outline-dark rounded-0">
            <i class="fas fa-arrow-circle-left"></i>&nbsp;
            B A C K
        </a>
    </div>

    <div class="row mb-3 pt-4 align-items-center">
        <div class="col-md-4">
            <div class="px-4">
                <img src="_uploads/cars/<?= $car['image'] ?>" alt="<?= $car['name'] ?>" class="img-fluid">
            </div>
        </div><!-- /.col-md-4 -->

        <div class="col-md-8">
            <table class="table table-bordered mb-0">
                <tbody>
                    <tr>
                        <td class="px-3 py-4">
                            <span>
                                <i class="ri ri-dashboard-3-line"></i>
                                Engine Power
                            </span>
                            <p class="mb-0"><?= $car['engine'] ?></p>
                        </td>

                        <td class="px-3 py-4">
                            <span>
                                <i class="ri ri-group-2-line"></i>
                                Seat Capacity
                            </span>
                            <p class="mb-0"><?= $car['capacity'] ?> Seater</p>
                        </td>

                        <td class="px-3 py-4">
                            <span>
                                <i class="ri ri-steering-line"></i>
                                Transmission
                            </span>
                            <p class="mb-0">Manual & Automatic (TC)</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-3 py-4">
                            <span>
                                <i class="ri ri-gas-station-line"></i>
                                Fuel Type
                            </span>
                            <p class="mb-0"><?= $car['fuel_type'] ?></p>
                        </td>
                        <td class="px-3 py-4">
                            <span>
                                <i class="ri ri-coin-line"></i>
                                Rent Per Day
                            </span>
                            <p class="mb-0"><?= number_format($car['rent_fee']) ?> MMK / Day</p>
                        </td>
                        <td class="px-3 py-4">
                            <span>
                                <i class="ri ri-flag-line"></i>
                                Model Year
                            </span>
                            <p class="mb-0"><?= $car['model_year'] ?></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.col-md-8 -->
    </div><!-- /.row -->
    <hr>

    <div class="row">
        <div class="col-md-12 feature-list-bx">
            <div class="card p-4 mt-2">
                <h1 class="h5 mb-2">
                    <span class="badge badge-primary px-3 py-2 rounded-0 text-uppercase">
                        Features
                    </span>
                    <hr>
                </h1>
                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <ul class="pl-0">
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['air_condition']) ?> mr-2"></i>
                                Air Conditions
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['child_seats']) ?> mr-2"></i>
                                Child Seats
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['gps']) ?> mr-2"></i>
                                GPS
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['luggage']) ?> mr-2"></i>
                                Luggage
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <ul class="pl-0">
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['seat_belt']) ?> mr-2"></i>
                                Seat Belt
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['sleeping_bed']) ?> mr-2"></i>
                                Sleeping Bed
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['water']) ?> mr-2"></i>
                                Water
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['music_player']) ?> mr-2"></i>
                                Music Player
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <ul class="pl-0">
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['bluetooth']) ?> mr-2"></i>
                                Bluetooth
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['onboard_computer']) ?> mr-2"></i>
                                Onboard Computer
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['audio_input']) ?>  mr-2"></i>
                                Audio Input
                            </li>
                            <li class="d-flex align-items-center mb-3 fs-13">
                                <i class="fas <?= check_car_feature($car['car_kit']) ?> mr-2"></i>
                                Car Kit
                            </li>
                        </ul>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.card -->
        </div><!-- /.col-md-12 -->
    </div>
</main>
