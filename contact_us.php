<?php include('include/header.php'); ?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
    	<h2 class="display-6 fw-bold px-0 text-uppercase">Contact Us</h2>
        <nav class="px-0">
	        <ol class="breadcrumb text-uppercase mb-0">
	            <li class="fs-6 fw-normal breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
	            <li class="fs-6 fw-normal breadcrumb-item">Contact Us</li>
	        </ol>
	    </nav>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-contact-us">
    <div class="row mx-0 align-items-center">
        <div class="col-lg-12 px-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61105.881846942466!2d96.0638075216797!3d16.8205203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb0d08bca6a7%3A0x8bc81800ff9e0354!2sKMD%20Institute%20(YUDE%20Campus)!5e0!3m2!1sen!2smm!4v1693080601093!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="container px-0 py-5">
        <div class="row mx-0 px-4 px-md-0 py-0 py-md-5">
            <div class="left-content-bx col-md-12 col-lg-5 px-0 pe-lg-4 mb-0">
                <div class="heading-bx mb-5">
                    <h2 class="fw-bold text-uppercase">
                        <small class="fs-6">Get In Touch with Us</small>
                        <span class="fs-4 d-block">Contact Info</span>
                    </h2>
                </div>

                <div class="col-12 d-flex align-items-start mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center fs-4 me-4 icon-bx">
                        <i class="ri-map-pin-line"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Location</h5>
                        <p>
                            <a href="#">No.123, Lorem Ipsum Street, Lorem Ipsum Township,<br class="d-none d-lg-block"> Lorem Ipsum City, Myanmar</a>
                        </p>
                    </div>
                </div>

                <div class="col-12 d-flex align-items-start mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center fs-4 me-4 icon-bx">
                        <i class="ri-mail-send-line"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Email Address</h5>
                        <p>
                            <a href="#">loremipsum@info.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-12 d-flex align-items-start mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center fs-4 me-4 icon-bx">
                        <i class="ri-headphone-line"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Call Us</h5>
                        <p>
                            <a href="#">+959 123 123 123</a>
                        </p>
                    </div>
                </div>

                <div class="col-12 d-flex align-items-start mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center fs-4 me-4 icon-bx">
                        <i class="ri ri-globe-line"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Website</h5>
                        <p>
                            <a href="#">www.loremipsum@info.com</a>
                        </p>
                    </div>
                </div>
            </div><!-- /.left-content-bx -->

            <div class="right-content-bx col-md-12 col-lg-7 px-0 ps-lg-5 mt-5 mt-lg-0">
                <div class="heading-bx mb-5">
                    <h2 class="fw-bold text-uppercase">
                        <small class="fs-6">We'll Be In Touch As Soon As Possible</small>
                        <span class="fs-4 d-block">Contact Form</span>
                    </h2>
                </div>

                <form class="contact-form">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-0" id="name" placeholder="Enter Your Username" autocomplete="off">
                        <label for="name">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-0" id="subject" placeholder="Enter Your Subject" autocomplete="off">
                        <label for="subject">Subject</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-0" id="email" placeholder="Enter Your Email Address" autocomplete="off">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control rounded-0" id="message" placeholder="Please Leave Your Message"
                        style="height: 120px;" autocomplete="off"></textarea>
                        <label for="message">Message</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-purple rounded-0 text-uppercase px-3 py-2">
                            Send Message
                        </button>
                    </div>
                </form>
            </div><!-- /.right-content-bx -->
        </div>
    </div>
</section><!-- /.sec-car-list -->

<?php include('include/footer.php'); ?>
