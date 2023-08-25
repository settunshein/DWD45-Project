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
        include('car/edit.php');
        include('car/edit.php');
        break;

    case 'car_details':
        $car = get_car($_GET['car_id']);
        include('car/details.php');
        break;




    /* Auth Routes */
    case 'logout';
        logout();
        show_alert_message('Logged Out Successfully', 'success');
        redirect('../../index.php');
        break;
}
