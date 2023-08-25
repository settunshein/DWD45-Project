<?php

/*
|--------------------------------------------------------------------------
| Car Module
|--------------------------------------------------------------------------
*/
function get_all_cars()
{
    global $conn;

    $query = "
        SELECT
            tbl_cars.*, tbl_users.name AS owner_name
        FROM
            tbl_cars
        LEFT JOIN
            tbl_users
        ON
            tbl_cars.owner_id = tbl_users.id
    ";

    if ($result = mysqli_query($conn, $query)) {

    }
}

function get_car($id)
{
    global $conn;

    $query = "
        SELECT
            tbl_cars.*, tbl_features.*, tbl_users.name AS owner_name
        FROM
            tbl_cars
        JOIN
            tbl_features
        JOIN
            tbl_users
        ON
            tbl_cars.id = tbl_features.car_id
        AND
            tbl_cars.id = $id
    ";

    if ($result = mysqli_query($conn, $query)) {
        return $result;
    }
}

function insert_car()
{
    global $conn;

    $user_id      = 1;
    $brand_id     = $_POST['brand_id'];
    $name         = $_POST['name'];
    $engine       = $_POST['engine'];
    $model_year   = $_POST['model_year'];
    $transmission = $_POST['transmission'];
    $capacity     = $_POST['capacity'];
    $fuel_type    = $_POST['fuel_type'];
    $plate_no     = $_POST['plate_no'];
    $rent_fee     = $_POST['rent_fee'];
    $status       = $_POST['status'];

    $file_name = $_FILES['car_img']['name'];
    $file_temp = $_FILES['car_img']['tmp_name'];

    if (isset($file_name)) {
        $file_name = uniqid(time()) . $file_name;
        move_uploaded_file($file_temp, '_uploads/cars/'.$file_name);
    }

    $query1 = "INSERT INTO tbl_cars(brand_id, user_id, name, engine, model_year, transmission, capacity, fuel_type, plate_no, image, rent_fee, status)
               VALUES ($brand_id, $user_id, '$name', '$engine', '$model_year', '$transmission', '$capacity', '$fuel_type', '$plate_no', '$file_name', '$rent_fee', $status)";

    mysqli_query($conn, $query1);

    $last_car_id      = mysqli_insert_id($conn);

    $air_condition    = isset($_POST['air_condition']) ? 1 : 0;
    $child_seats      = isset($_POST['child_seats']) ? 1 : 0;
    $gps              = isset($_POST['gps']) ? 1 : 0;
    $luggage          = isset($_POST['luggage']) ? 1 : 0;

    $seat_belt        = isset($_POST['seat_belt']) ? 1 : 0;
    $sleeping_bed     = isset($_POST['sleeping_bed']) ? 1 : 0;
    $water            = isset($_POST['water']) ? 1 : 0;
    $music_player     = isset($_POST['music_player']) ? 1 : 0;

    $bluetooth        = isset($_POST['bluetooth']) ? 1 : 0;
    $onboard_computer = isset($_POST['onboard_computer']) ? 1 : 0;
    $audio_input      = isset($_POST['audio_input']) ? 1 : 0;
    $car_kit          = isset($_POST['car_kit']) ? 1 : 0;

    $query2 =
    "INSERT INTO tbl_features (
        air_condition, child_seats, gps, luggage, music_player,
        seat_belt, sleeping_bed, water, bluetooth, onboard_computer,
        audio_input, car_kit, car_id
    ) VALUES (
        $air_condition, $child_seats, $gps, $luggage, $music_player,
        $seat_belt, $sleeping_bed, $water, $bluetooth, $onboard_computer,
        $audio_input, $car_kit, $last_car_id
    )";

    mysqli_query($conn, $query2);

    show_alert_message('New Car Created Successfully', 'success');
    redirect('dashboard.php?view=car_index');
}

function delete_car()
{

}
