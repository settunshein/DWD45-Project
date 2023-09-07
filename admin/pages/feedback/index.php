<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Feedback Management</h1>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="table-title my-1">Feedback List Table</span>
        </div>

        <?php if(mysqli_num_rows($feedbacks) > 0): ?>
            <div class="card-body" id="messageList">
                <ul class="list-unstyled">
                    <?php while($feedback = mysqli_fetch_assoc($feedbacks)): ?>
                    <li class="media p-3 border mb-3 d-flex align-items-center shadow-sm rounded-0">
                        <div class="media-body px-2 py-1">
                            <h6 class="my-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="left-col">
                                        <p class="mb-0" style="font-size: 13.5px;">
                                            <?= $feedback['email'] ?>
                                            <span class="text-danger" style="font-size: 12px;">
                                                ( <?= $feedback['username'] ?> )
                                            </span>
                                        </p>
                                    </div>

                                    <div class="right-col">
                                        <small class="mr-2">
                                            <?= date("M d, Y", strtotime($feedback['created_at'])) ?>
                                            <?= date("H:i A", strtotime($feedback['created_at'])) ?>
                                        </small>
                                        <a href="javascript:;" class="text-danger delete-feedback"
                                        data-toggle="modal" data-target="#showDeleteFeedbackModal<?=$feedback['id']?>">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <?php include('delete.php'); ?>
                                    </div>
                                </div>
                                <hr class="mt-2">

                                <p class="custom-fs-12 text-justify" style="line-height: 2;">
                                    <?= $feedback['feedback'] ?>
                                </p>
                            </h6>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div><!-- /.card-body -->
        <?php else: ?>
            <div class="card-body">
                <p class="text-danger mb-0 text-center fs-13"><b>No Data Available</b></p>
            </div>
        <?php endif; ?>
    </div>
</main>
