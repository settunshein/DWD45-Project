<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">FAQ Management</h1>
    </div>

    <div class="card mb-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="table-title">FAQ List Table</span>
            <a href="dashboard.php?view=faq_create" class="btn btn-sm btn-outline-dark rounded-0">
                Create&nbsp;
                <i class="fa fa-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center v-middle mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>FAQ</th>
                        <th width="35%">Content</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(mysqli_num_rows($faqs) > 0): ?>
                        <?php while($faq = mysqli_fetch_assoc($faqs)): ?>
                        <tr>
                            <td><?= ++$counter ?></td>
                            <td><?= $faq['title'] ?></td>
                            <td class="text-justify"><?= $faq['content'] ?></td>
                            <td><?= date("M d, Y", strtotime($faq['created_at'])) ?></td>
                            <td>
                                <a href="dashboard.php?view=faq_edit&edit_faq_id=<?=$faq['id']?>"
                                class="btn-sm btn btn-outline-dark rounded-0">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="javascript:;" class="btn btn-sm btn-outline-dark rounded-0"
                                data-toggle="modal" data-target="#showDeleteFaqModal<?=$faq['id']?>">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                                <?php include('delete.php'); ?>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">
                                <p class="text-danger mb-0"><b>No Data Available</b></p>
                            </td>
                        </tr>
                    <?php endif; ?>
            </table>
        </div>

        <?php $total_page = get_paginator('tbl_faqs', 4); ?>
        <?php if( $total_page > 1 ): ?>
        <div class="card-footer">
            <nav>
                <ul class="pagination justify-content-end mb-0 fs-13">
                    <li class="page-item <?= $page > 1 ? '' : 'disabled'; ?>">
                        <a class="page-link disabled" href="dashboard.php?view=brand_index&page=<?= $page - 1 ?>">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </a>
                    </li>

                    <?php for($i=1; $i<=$total_page; $i++): ?>
                    <?php $active = $i == $page ? 'active' : ''; ?>
                    <li class="page-item <?= $active ?>">
                        <a class="page-link" href="dashboard.php?view=faq_index&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <?php endfor; ?>

                    <li class="page-item <?= $total_page > $page ? '' : 'disabled'; ?>">
                        <a class="page-link" href="dashboard.php?view=brand_index&page=<?= $page + 1 ?>">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!-- /.card-footer -->
        <?php endif; ?>

    </div>
</main>
