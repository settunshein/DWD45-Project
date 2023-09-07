<?php

ob_start();

if (! isset($_SESSION)) {
    session_start();
}

include('include/db.php');
include('admin/pages/_include/functions.php');

login_admin_account();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BS5 Car Rental Website</title>

    <!-- Core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Dropify -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- toastr Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial',  sans-serif !important;
        }

        /* Custom Styling Toastr */
        #toast-container>div {
            width: 350px !important;
            opacity: 1;
        }

        #title-error {
            font-size: 12px;
        }

        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://images.pexels.com/photos/799443/pexels-photo-799443.jpeg?auto=compress&cs=tinysrgb&w=600');
            background-size: cover;
            background-position: center;
            filter: brightness(95%);
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-purple {
            background-color: #772953;
            color: #FFF;
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .btn-purple:hover {
            background-color: #772953;
            color: #FFF;
        }
    </style>
</head>
<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">

            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>

            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4" style="color: #772953; font-weight: 800;">
                                    DWD 45
                                </h3>

                                <form action="" method="POST">
                                    <div class="mb-4">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control rounded-0" id="floatingInput" placeholder="name@example.com"
                                            name="email" autocomplete="off">
                                            <label for="floatingInput">Email Address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password"
                                            name="password" autocomplete="off">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-purple text-uppercase fw-bold mb-2 rounded-0" type="submit" name="admin_login">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- <script type="text/javascript" src="assets/js/libs/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- Dropify -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
    integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
    <!-- toastr Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- JQuery Validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Common JS -->
    <script src="assets/js/common.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "100000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <?php
    if (isset($_SESSION['alert'])) {
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
    }
    ?>
</body>
</html>
