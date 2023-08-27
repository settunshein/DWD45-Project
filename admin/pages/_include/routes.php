<?php

$view = $_GET['view'];

switch ($view) {
    /* User Module */
    case 'user_index':
        $data    = get_data_by_page('tbl_users', 4);
        $users   = $data[0];
        $page    = $data[1];
        $counter = get_counter($page, 4);
        isset($_POST['del_user_id']) ? delete_user() : '';
        include('user/index.php');
        break;

    case 'user_create':
        isset($_POST['insert_user']) ? insert_user() : '';
        include('user/create.php');
        break;

    case 'user_edit':
        $user = get_user($_GET['edit_user_id']);
        isset($_POST['edit_user']) ? edit_user() : '';
        include('user/edit.php');
        break;



    /* Brand Module */
    case 'brand_index':
        $data    = get_data_by_page('tbl_brands', 5);
        $brands  = $data[0];
        $page    = $data[1];
        $counter = get_counter($page, 5);
        isset($_POST['del_brand_id']) ? delete_brand() : '';
        include('brand/index.php');
        break;

    case 'brand_create':
        isset($_POST['insert_brand']) ? insert_brand() : '';
        include('brand/create.php');
        break;

    case 'brand_edit':
        $brand = get_brand($_GET['edit_brand_id']);
        isset($_POST['edit_brand']) ? edit_brand() : '';
        include('brand/edit.php');
        break;



    /* Car Module */
    case 'car_index':
        $data    = get_data_by_page('tbl_cars', 4);
        $cars    = $data[0];
        $page    = $data[1];
        $counter = get_counter($page, 4);
        isset($_POST['del_car_id']) ? delete_car() : '';
        include('car/index.php');
        break;

    case 'car_create':
        $brands = get_all_brands();
        isset($_POST['insert_car']) ? insert_car() : '';
        include('car/create.php');
        break;

    case 'car_edit':
        $brands = get_all_brands();
        $car    = get_car($_GET['edit_car_id']);
        isset($_POST['edit_car']) ? edit_car() : '';
        include('car/edit.php');
        break;

    case 'car_details':
        $car = get_car($_GET['car_id']);
        include('car/details.php');
        break;




    /* FAQ Routes */
    case 'faq_index':
        $data    = get_data_by_page('tbl_faqs', 4);
        $faqs    = $data[0];
        $page    = $data[1];
        $counter = get_counter($page, 5);
        isset($_POST['del_faq_id']) ? delete_faq() : '';
        include('faq/index.php');
        break;

    case 'faq_create':
        isset($_POST['insert_faq']) ? insert_faq() : '';
        include('faq/create.php');
        break;

    case 'faq_edit':
        $faq = get_faq($_GET['edit_faq_id']);
        isset($_POST['edit_faq']) ? edit_faq() : '';
        include('faq/edit.php');
        break;

    case 'car_details':
        $car = get_car($_GET['car_id']);
        include('faq/details.php');
        break;

    /* FAQ Routes */
    case 'contact_info_index':
        $contact = get_contact_info();
        include('contact_info/index.php');
        break;

    case 'contact_info_edit':
        $faq = get_faq($_GET['edit_faq_id']);
        isset($_POST['edit_faq']) ? edit_faq() : '';
        include('faq/edit.php');
        break;



    /* Auth Routes */
    case 'logout';
        logout();
        show_alert_message('Logged Out Successfully', 'success');
        redirect('../../index.php');
        break;
}
