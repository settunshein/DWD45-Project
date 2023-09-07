    <?php if(mysqli_num_rows($feedbacks) > 0): ?>
    <section class="sec-testimonial py-5">
        <div class="container px-0 py-0 py-md-5">
            <div class="row mx-0">
                <div class="col-lg-12 px-4 px-md-0">
                    <div class="heading-bx">
                        <h2 class="fw-bold text-uppercase">
                            <small class="fs-6">Feedback</small>
                            <span class="d-block fs-4">What Our Clients Say?</span>
                        </h2>
                    </div>

                    <div id="testimonialSlider" class="carousel slide mt-5 mt-md-0 pb-5 pb-md-0" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <?php foreach($feedbacks as $key => $feedback): ?>
                            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="<?=$key?>" class="<?= $key == 0 ? 'active' : '' ?>"></button>
                            <?php endforeach; ?>
                        </div>

                        <div class="carousel-inner py-0 py-md-5">
                            <?php foreach($feedbacks as $key => $feedback): ?>
                            <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?background=772953&color=fff&name=<?=$feedback['username']?>"
                                    class="img-fluid rounded-circle align-self-center mr-3" width="100" height="100">
                                    <!-- <img src="assets/img/common/img_testimonial1.jpg" class="rounded-circle" width="100px" height="100px"> -->
                                    <div class="ms-4 personal-info-bx">
                                        <h4 class="fs-5 mb-1 text-uppercase fw-bold"><?= $feedback['username'] ?></h4>
                                        <p class="mb-0 fw-normal"><?= $feedback['email'] ?></p>
                                    </div>
                                </div>
                                <p class="txt-bx text-muted text-justify my-4 custom-lh">
                                    <?= $feedback['feedback']; ?>
                                </p>
                            </div>
                            <?php endforeach; ?>
                        </div><!-- /.carousel-inner -->
                    </div><!-- /.carousel -->
                </div>
            </div>
        </div>
    </section><!-- /.sec-testimonial -->
    <?php endif; ?>

    <footer class="sec-footer py-5">
        <div class="container px-4 px-md-0">
            <div class="row mx-0">
                <div class="footer-nav col-lg-4 mb-4 px-0">
                    <h5 class="text-uppercase fw-bold fs-4 mb-3">LO<span>GO</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolorum doloremque exercitationem non recusandae aut.
                    </p>
                </div>

                <div class="footer-nav col-lg-2 mx-auto mb-4 px-0">
                    <h5 class="text-uppercase fw-bold fs-4 mb-3">Our <span>Services</span></h5>
                    <ul>
                        <li>
                        	<a href="#">
                        		<i class="ri ri-slideshow-line"></i>
                        		Service 01
                        	</a>
                        </li>
                        <li>
                        	<a href="#">
                        		<i class="ri ri-question-answer-line"></i>
                        		Service 02
                        	</a>
                        </li>
                        <li>
                        	<a href="#">
                        		<i class="ri ri-service-line"></i>
                        		Service 03
                        	</a>
                        </li>
                        <li>
                        	<a href="#">
                        		<i class="ri ri-paint-brush-line"></i>
                        		Service 04
                        	</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-nav col-lg-2 mx-auto mb-4 px-0">
                    <h5 class="text-uppercase fw-bold fs-4 mb-3">Quick <span>Links</span></h5>
                    <ul>
                        <li>
                        	<a href="#" class="text-decoration-underline text-uppercase">
                        		<i class="ri ri-login-circle-line"></i> Home
                        	</a>
                        </li>
                        <li>
                        	<a href="#" class="text-decoration-underline text-uppercase">
                        		<i class="ri ri-login-circle-line"></i> About
                        	</a>
                        </li>
                        <li>
                        	<a href="courses.html" class="text-decoration-underline text-uppercase">
                        		<i class="ri ri-login-circle-line"></i> FAQs
                        	</a>
                        </li>
                        <li>
                        	<a href="lecturers.html" class="text-decoration-underline text-uppercase">
                        		<i class="ri ri-login-circle-line"></i> Contact Us
                        	</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-nav col-lg-2 mx-auto mb-4 px-0">
                    <h5 class="text-uppercase fw-bold fs-4 mb-3">Contact <span>Us</span></h5>
                    <ul>
                        <li><a href="#"><i class="ri ri ri-map-pin-line"></i> <?= $contact_info['location'] ?? '' ?></a></li>
                        <li><a href="#"><i class="ri ri ri-headphone-line"></i> <?= $contact_info['phone'] ?? '' ?></a></li>
                        <li><a href="#"><i class="ri ri ri-mail-send-line"></i> <?= $contact_info['email'] ?? '' ?></a></li>
                        <li><a href="#"><i class="ri ri-globe-line"></i> <?= $contact_info['website'] ?? '' ?></a></li>
                    </ul>
                </div>
            </div>
            <hr style="height: 2.5px;">

            <div class="row mt-5 mx-0 justify-content-between align-items-center">
                <div class="col-md-7 mb-2 mb-md-0 px-0">
                    <p class="text-center text-md-start mb-0 font-weight-bold">Copyright &copy; 2023. All Right and Reserved.</p>
                </div>

                <div class="col-md-5 mb-2 mb-md-0 px-0">
                    <ul class="text-center text-md-end mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-sm">
                                <i class="fab fa-facebook-square fs-4" style="color: #3B5998;"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="btn btn-sm">
                                <i class="fab fa-twitter fs-4" style="color: #00ACEE;"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="btn btn-sm">
                                <i class="fab fa-viber fs-4" style="color: #665CAC;"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="btn btn-sm">
                                <i class="fab fa-skype fs-4" style="color: #00AFF0;"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="btn btn-sm">
                                <i class="fab fa-whatsapp fs-4" style="color: #4FCE5D;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!-- /.sec-footer -->

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

        $('.dropify').dropify({
            messages: {
                'default': 'Choose Your Upload Image',
                'replace': 'Click or Drag and Drop to Replace',
                'remove':  'Remove',
                'error':   'Error. The file is either not square, larger than 2 MB or not an acceptable file type'
            }
        });

        $('.validatePhoneInput').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
            // Limit Character Length to 11
            if (this.value.length > 11) {
                this.value = this.value.slice(0, 11);
            }
        });

        $('#rent_date').on('change', function(){
            return getRentDayCount($('#rent_date').val(), $('#return_date').val());
        });

        $('#return_date').on('change', function(){
            return getRentDayCount($('#rent_date').val(), $('#return_date').val());
        });

        function getRentDayCount(rent_date, return_date)
        {
            rent_date                    = new Date(rent_date);
            return_date                  = new Date(return_date);
            let milliseconds             = rent_date.getTime() - return_date.getTime();
            let total_rent_days          = milliseconds / (1000 * 3600 * 24);
            let formated_total_rent_days = Math.round(Math.abs(total_rent_days));

            if ($('#rent_date').val() > $('#return_date').val()) {
                var now   = new Date();
                var day   = ('0' + now.getDate()).slice(-2);
                var month = ('0' + (now.getMonth() + 1)).slice(-2);
                var today = now.getFullYear()+'-'+(month)+'-'+(day) ;

                $('#rent_date').val(today);

                toastr.error(`Your Rent Date (${$('#rent_date').val()}) is After the Return Date (${$('#return_date').val()}) &nbsp;<i class=\'fas fa-exclamation-circle\'></i>`, 'INVALID DATE', {
                    closeButton: true,
                    progressBar: true,
                });

                return false;
            }

            if (formated_total_rent_days == 0) {

                $('#input_duration').val(1);
                let total_charges = 1 * $('#rent_fee').val();
                $('#duration').text(1);
                $('#total_charges').text(total_charges);

            } else {

                $('#input_duration').val(formated_total_rent_days);
                let total_charges = formated_total_rent_days * $('#rent_fee').val();
                $('#duration').text(formated_total_rent_days);
                $('#total_charges').text(total_charges.toLocaleString());

            }
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
