<?php
include('include/header.php');

// if (isset($auth_user)) {

// }

login_user_account();
register_user_account();
?>

<section class="sec-breadcrumb">
    <img src="assets/img/common/img_breadcrumb.jpg" class="img-fluid breadcrumb-img">
    <div class="breadcrumb-heading-bx">
    	<h2 class="display-6 fw-bold px-0 text-uppercase">Authentication</h2>
        <nav class="px-0">
	        <ol class="breadcrumb text-uppercase mb-0">
	            <li class="fs-6 fw-normal breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
	            <li class="fs-6 fw-normal breadcrumb-item">Login &amp; Register</li>
	        </ol>
	    </nav>
    </div><!-- /.heading-bx -->
</section>

<section class="sec-account py-5">
    <div class="container px-0 py-3">
        <div class="row g-4 px-2 px-md-0">
        	<div class="col-lg-6">
        		<div class="heading-bx mb-5">
                    <h2 class="fw-bold text-uppercase">
                        <small class="fs-6">Login with Your Credentials</small>
                        <span class="fs-4 d-block">Login</span>
                    </h2>
                </div>

                <div class="row auth-form-bx">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" class="login-form col-md-12 col-lg-11" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control rounded-0" id="email" placeholder="Enter Your Email Address" required autocomplete="off">
                            <label for="floatingInput">Email Address <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control rounded-0" id="password" placeholder="Enter Your Password" required autocomplete="off">
                            <label for="password">Password <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-purple rounded-0 text-uppercase px-4 py-2 w-100 fs-13"
                            name="login_account">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
        	</div><!-- /.login -->

        	<div class="col-lg-12 col-xl-6 px-0 ps-xl-5">
                <div class="heading-bx mb-5">
                    <h2 class="fw-bold text-uppercase">
                        <small class="fs-6">Create New Account</small>
                        <span class="fs-4 d-block">Register</span>
                    </h2>
                </div>
                <div class="row auth-form-bx">
                    <form class="register-form col-md-12 col-lg-11" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control rounded-0" id="name" placeholder="Enter Your Username" autocomplete="off" required>
                            <label for="name">Username <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control rounded-0" id="email" placeholder="Enter Your Email Address" autocomplete="off" required>
                            <label for="email">Email Address <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="nrc_no" class="form-control rounded-0" id="nrc_no" placeholder="Enter Your NRC Number" autocomplete="off" required>
                            <label for="nrc_no">NRC Number <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="phone" class="form-control rounded-0" id="phone" placeholder="Enter Your Phone Number" autocomplete="off" required>
                            <label for="phone">Phone <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control rounded-0" id="password" placeholder="Enter Your Password" autocomplete="off" required>
                            <label for="password">Password <b class="text-danger">*</b></label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control rounded-0" id="address" placeholder="Please Leave Your Message" style="height: 80px;" autocomplete="off" required></textarea>
                            <label for="address">Address</label>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-purple rounded-0 text-uppercase px-4 py-2 w-100 fs-13" name="register_account">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.register -->
    	</div><!-- /.row -->
    </div><!-- /.container -->
 </section>

 <?php include('include/footer.php'); ?>
