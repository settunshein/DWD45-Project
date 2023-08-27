<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Car Management</h1>
    </div>

    <div class="card mb-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="table-title">Car List Table</span>
            <a href="dashboard.php?view=car_create" class="btn btn-sm btn-outline-dark rounded-0">
                Create&nbsp;
                <i class="fa fa-plus"></i>
            </a>
        </div>

        <div class="card-body table-responsive ">
            <table class="table table-bordered text-center v-middle mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th width="10%">Image</th>
                        <th width="38%">Car Info</th>
                        <th width="15%">Owner</th>
                        <th>Status</th>
                        <th width="12%">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(mysqli_num_rows($cars) > 0): ?>
                    <?php while($car = mysqli_fetch_assoc($cars)): ?>
                        <tr>
                            <td><?= ++$counter ?></td>
                            <td>
                                <div class="p-2">
                                    <img src="_uploads/cars/<?= $car['image'] ?>" alt="<?= $car['name'] ?>" class="img-fluid">
                                    <span class="badge rounded-pill badge-primary px-4 py-2 text-light mt-3 fs-13"
                                    style="font-weight: 400;">
                                        <?= $car['name'] ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <table class="table table-bordered w-100 mb-0">
                                    <tbody>
                                        <tr class="text-left">
                                            <td>
                                                <b>Engine</b>
                                                <p class="mb-0">2755 cc</p>
                                            </td>

                                            <td>
                                                <b>Capacity</b>
                                                <p class="mb-0"><?= $car['capacity'] ?></p>
                                            </td>

                                            <td>
                                                <b>Transmission</b>
                                                <?php if($car['transmission'] == 'both'): ?>
                                                <p class="mb-0">Manual & Automatic(TC)</p>
                                                <?php else: ?>
                                                <p class="mb-0"><?= ucwords($car['transmission']) ?></p>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr class="text-left">
                                            <td>
                                                <b>Fuel Type</b>
                                                <p class="mb-0"><?= ucwords($car['fuel_type']) ?></p>
                                            </td>

                                            <td>
                                                <b>Plate No</b>
                                                <p class="mb-0"><?= $car['plate_no'] ?></p>
                                            </td>

                                            <td>
                                                <b>Model Year</b>
                                                <p class="mb-0"><?= $car['model_year'] ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td>
                                <?php
                                    $user = get_user($car['user_id']);
                                    echo strtoupper($user['name']);
                                ?>
                            </td>
                            <td>
                                <?php if ($car['status'] == 1): ?>
                                <span class="badge badge-success badge-pill px-4 py-2" style="font-size: 11.85px; font-weight: 400;">
                                    Avaliable
                                </span>
                                <?php else: ?>
                                <span class="badge badge-danger badge-pill px-4 py-2" style="font-size: 11.85px; font-weight: 400;">
                                    Unavliable
                                </span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="mb-1">
                                    <a href="car_details.php?car_id=<?=$car['id']?>" class="btn btn-sm btn-outline-dark rounded-0">
                                        <i class="fas fa-exclamation-circle"></i>
                                    </a>

                                    <a href="image_create.php?car_id=<?=$car['id']?>" class="btn btn-sm btn-outline-dark rounded-0">
                                        <i class="fa fa-images"></i>
                                    </a>
                                </div>

                                <div>
                                    <a href="dashboard.php?view=car_edit&edit_car_id=<?=$car['id']?>"
                                    class="btn btn-sm btn-outline-dark rounded-0">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="javascript:;" class="btn btn-sm btn-outline-dark rounded-0"
                                    data-toggle="modal" data-target="#showDeleteCarModal<?=$car['id']?>">
                                        <i class="fa fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php include('delete.php'); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7">
                                <span class="text-danger">No Data Available</span>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div><!-- /.card-body -->

        <?php $total_page = get_paginator('tbl_cars', 4); ?>
        <?php if( $total_page > 1 ): ?>
        <div class="card-footer">
            <nav>
                <ul class="pagination justify-content-end mb-0 fs-13">
                    <li class="page-item <?= $page > 1 ? '' : 'disabled'; ?>">
                        <a class="page-link disabled" href="dashboard.php?view=car_index&page=<?= $page - 1 ?>">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </a>
                    </li>

                    <?php for($i=1; $i<=$total_page; $i++): ?>
                    <?php $active = $i == $page ? 'active' : ''; ?>
                    <li class="page-item <?= $active ?>">
                        <a class="page-link" href="dashboard.php?view=car_index&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <?php endfor; ?>

                    <li class="page-item <?= $total_page > $page ? '' : 'disabled'; ?>">
                        <a class="page-link" href="dashboard.php?view=car_index&page=<?= $page + 1 ?>">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!-- /.card-footer -->
        <?php endif; ?>
    </div>
</main>
