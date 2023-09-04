<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
            <span class="font-weight-bold">GENERAL</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= is_active('dashboard') ?>" href="dashboard.php">
                    <i class="ri ri-apps-line"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= is_active('brand') ?? '' ?>" href="dashboard.php?view=brand_index">
                    <i class="ri ri-ai-generate"></i>
                    Brands
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= is_active('car') ?? '' ?>" href="dashboard.php?view=car_index">
                    <i class="ri ri-roadster-line"></i>
                    Cars
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= is_active('user') ?? '' ?>" href="dashboard.php?view=user_index">
                    <i class="ri ri-group-line"></i>
                    Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= is_active('rental') ?? '' ?>" href="dashboard.php?view=rental_index">
                    <i class="ri ri-file-list-2-line"></i>
                    Rentals
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= is_active('feedback') ?? '' ?>" href="dashboard.php?view=feedback_index">
                    <i class="ri ri-feedback-line" style="bottom: -1.5px;"></i>
                    Feedbacks
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span class="font-weight-bold">Front Page CMS</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?view=faq_index">
                    <i class="ri ri-question-line"></i>
                    FAQs
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?view=contact_info_index">
                    <i class="ri ri-compass-2-line"></i>
                    Contact Info
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span class="font-weight-bold">SETTINGS</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ri ri-user-settings-line"></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= is_active('password') ?? '' ?>"  href="dashboard.php?view=password_edit">
                <i class="ri ri-user-settings-line"></i>
                    Update Password
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?view=logout">
                    <i class="ri ri-shut-down-line"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
