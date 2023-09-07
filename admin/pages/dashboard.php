<?php
$title = 'Dashboard';
$current_page = 'dashboard';

include('_include/header.php');
include('_include/nav.php');

?>


<div class="container-fluid">
    <div class="row">

        <?php include('_include/sidebar.php'); ?>

        <?php if( isset($_GET['view']) ): ?>

            <?php
                include('_include/routes.php');
            ?>

        <?php else: ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5">Dashboard</h1>
                </div>

                <div class="widget-blk row mb-2">
                    <div class="col-md-3">
                        <div class="p-3">
                            <div class="row widget" style="background-color: #42B883;">
                                <div class="col-9 py-3 text-white">
                                    <h3 class="mb-2"><?= mysqli_num_rows(get_all_brands()) ?></h3>
                                    <p class="fs-13 mb-0 text-white font-weight-bold text-uppercase">Total Brands</p>
                                </div>
                                <div class="col-3 py-3 text-white d-flex align-items-center justify-content-center"
                                style="background-color: rgba(0,0,0,.1);">
                                    <i class="ri-ai-generate" style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3">
                            <div class="row widget" style="background-color: #DD4814;">
                                <div class="col-9 py-3 text-white">
                                    <h3 class="mb-2"><?= mysqli_num_rows(get_all_users()) ?></h3>
                                    <p class="fs-13 mb-0 text-white font-weight-bold text-uppercase">Total Users</p>
                                </div>
                                <div class="col-3 py-3 text-white d-flex align-items-center justify-content-center"
                                style="background-color: rgba(0,0,0,.1);">
                                    <i class="ri-team-fill" style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3">
                            <div class="row widget" style="background-color: #4584B6;">
                                <div class="col-9 py-3 text-white">
                                    <h3 class="mb-2"><?= mysqli_num_rows(get_all_cars()) ?></h3>
                                    <p class="fs-13 mb-0 text-white font-weight-bold text-uppercase">Total Cars</p>
                                </div>
                                <div class="col-3 py-3 text-white d-flex align-items-center justify-content-center"
                                style="background-color: rgba(0,0,0,.1);">
                                    <i class="ri-roadster-fill" style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3">
                            <div class="row widget" style="background-color: #DA9100;">
                                <div class="col-9 py-3 text-white">
                                    <h3 class="mb-2"><?= mysqli_num_rows(get_all_rentals()) ?></h3>
                                    <p class="fs-13 mb-0 text-white font-weight-bold text-uppercase">Total Rents</p>
                                </div>
                                <div class="col-3 py-3 text-white d-flex align-items-center justify-content-center"
                                style="background-color: rgba(0,0,0,.1);">
                                    <i class="ri-file-list-2-line" style="font-size: 28px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        <?php endif; ?>

    </div>
</div>

<?php include('_include/footer.php'); ?>
