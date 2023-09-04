<?php
include('include/header.php');

insert_feedback();
?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
    	<h2 class="display-6 fw-bold px-0 text-uppercase">Feedback</h2>
        <nav class="px-0">
	        <ol class="breadcrumb text-uppercase mb-0">
	            <li class="fs-6 fw-normal breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
	            <li class="fs-6 fw-normal breadcrumb-item">Feedback</li>
	        </ol>
	    </nav>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-feedback py-5">
    <div class="container px-0 py-3">
        <div class="row g-4 px-2 px-md-0">
            <div class="heading-bx mb-4">
                <h2 class="fw-bold text-uppercase">
                    <small class="fs-6">Feedback</small>
                    <span class="fs-4 d-block">Send Us Your Feedback.</span>
                </h2>
            </div>

            <form class="feedback-form col-md-12" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" name="username" id="username" class="form-control rounded-0" placeholder="Enter Your Username" autocomplete="off" required>
                    <label for="username">Username <b class="text-danger">*</b></label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Enter Your Email Address" autocomplete="off" required>
                    <label for="email">Email Address <b class="text-danger">*</b></label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="subject" id="subject" class="form-control rounded-0" placeholder="Enter Your Subject" autocomplete="off" required>
                    <label for="subject">Subject <b class="text-danger">*</b></label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control rounded-0" name="feedback" id="feedback" placeholder="Please Leave Your Feedback" style="height: 150px;" autocomplete="off" required></textarea>
                    <label for="feedback">Feedback <b class="text-danger">*</b></label>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-purple rounded-0 text-uppercase px-4" name="insert_feedback">
                        Send
                    </button>
                </div>
            </form>
        </div><!-- /.row -->
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
