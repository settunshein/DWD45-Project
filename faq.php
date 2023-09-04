<?php
include('include/header.php');
$faqs = get_all_faqs();
?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
    	<h2 class="display-6 fw-bold px-0 text-uppercase">FAQ<span class="text-lowercase">s</span></h2>
        <nav class="px-0">
	        <ol class="breadcrumb text-uppercase mb-0">
	            <li class="fs-6 fw-normal breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
	            <li class="fs-6 fw-normal breadcrumb-item">FAQ<span>s</span></li>
	        </ol>
	    </nav>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-car-list py-5">
    <div class="container px-0 py-3">
        <div class="row g-4 px-2 px-md-0">
            <div class="heading-bx mb-4">
                <h2 class="fw-bold text-uppercase">
                    <small class="fs-6">FAQ<span class="text-lowercase">s</span></small>
                    <span class="fs-4 d-block">Frequently Ask Questions</span>
                </h2>
            </div>

            <div class="accordion">
                <?php foreach($faqs as $faq): ?>
                <div class="accordion-item rounded-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-0" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faq<?=$faq['id']?>">
                            <h6 class="d-inline mb-0 fw-600 text-custom-purple">
                                <i class="ri-question-answer-line me-1"></i>
                                <?= $faq['title']; ?>
                            </h6>
                        </button>
                    </h2>
                    <div id="faq<?=$faq['id']?>" class="accordion-collapse collapse rounded-0">
                        <div class="accordion-body">
                            <p class="text-justify mb-0">
                                <?= $faq['content']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div><!-- /.row -->
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
