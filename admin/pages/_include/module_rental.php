<?php

/*
|--------------------------------------------------------------------------
| Rental Module
|--------------------------------------------------------------------------
*/
function get_all_rentals($customer_id = null)
{
    global $conn;

    //$query = is_null($customer_id) ? "SELECT * FROM tbl_rentals" : "SELECT * FROM tbl_rentals WHERE customer_id=$customer_id";
    if ( is_null($customer_id) ) {
        $query = "
            SELECT
                tbl_rentals.*,
                tbl_cars.id AS car_id, tbl_cars.name AS car_name, tbl_cars.image AS car_image,
                tbl_users.name AS customer_name
            FROM
                tbl_rentals
            JOIN
                tbl_cars
            ON
                tbl_rentals.car_id = tbl_cars.id
            JOIN
                tbl_users
            ON
                tbl_rentals.customer_id = tbl_users.id
        ";
    } else {
        $query = "
            SELECT
                tbl_rentals.*,
                tbl_cars.name AS car_name, tbl_cars.image AS car_image, tbl_cars.rent_fee
            FROM
                tbl_rentals
            LEFT JOIN
                tbl_cars
            ON
                tbl_rentals.car_id = tbl_cars.id
            WHERE
                tbl_rentals.customer_id = $customer_id
        ";
    }

    $rentals = mysqli_query($conn, $query);

    return $rentals;
}

function delete_rental()
{
    // global $conn;
    // mysqli_query($conn, "DELETE FROM tbl_rentals WHERE id=$rental_id");

    // show_alert_message('Rental Record Deleted Successfully', 'success');
    // redirect('dashboard.php?view=rental_index');
    // exit();
}

function get_rental_details($rental_id)
{
    global $conn;

    //die($rental_id);

    $query = "
        SELECT
            tbl_rentals.*, tbl_rentals.id AS rental_id, tbl_rentals.booking_status,
            tbl_cars.*, tbl_cars.image AS car_image, tbl_cars.name AS car_name, tbl_cars.status AS car_status,
            tbl_users.*, tbl_users.name AS customer_name, tbl_users.image AS user_image
        FROM
            tbl_rentals
        JOIN
            tbl_cars
        ON
            tbl_rentals.car_id = tbl_cars.id
        JOIN
            tbl_users
        ON
            tbl_rentals.customer_id = tbl_users.id
        WHERE
            tbl_rentals.id = $rental_id
        ORDER BY
            created_at DESC
    ";

    $result = mysqli_query($conn, $query);
    $rental = mysqli_fetch_assoc($result);

    return $rental;
}

function update_booking_status()
{
    global $conn;

    $rental_id      = $_POST['rental_id'];
    $booking_status = $_POST['booking_status'];
    $car_id         = $_POST['car_id'];

    $query = "UPDATE tbl_rentals SET booking_status=$booking_status WHERE id=$rental_id";
    mysqli_query($conn, $query);

    if ($booking_status == 2 || $booking_status == 3) {
        $run_query1 = mysqli_query($conn, "UPDATE tbl_cars SET status=1 WHERE id=$car_id");
        $run_query2 = mysqli_query($conn, "UPDATE tbl_rentals SET return_status=1 WHERE id=$rental_id");
    } else {
        $run_query1 = mysqli_query($conn, "UPDATE tbl_cars SET status=0 WHERE id=$car_id");
        $run_query2 = mysqli_query($conn, "UPDATE tbl_rentals SET return_status=0 WHERE id=$rental_id");
    }

    show_alert_message('Booking Status Updated Successfully', 'success');
    redirect('dashboard.php?view=rental_index');
}

function update_return_status()
{
    global $conn;

    $rental_id     = $_POST['rental_id'];
    $car_id        = $_POST['car_id'];
    $return_status = "";

    $rental_record_query = mysqli_query($conn, "SELECT * FROM tbl_rentals WHERE id=$rental_id");
    $rental_record       = mysqli_fetch_assoc($rental_record_query);

    if ($rental_record['return_status'] == 0) {
        $run_query1 = mysqli_query($conn, "UPDATE tbl_rentals SET return_status=1 WHERE id=$rental_id");
        $run_query2 = mysqli_query($conn, "UPDATE tbl_rentals SET booking_status=3 WHERE id=$rental_id");
        $return_status = 1;
    } else {
        $run_query1 = mysqli_query($conn, "UPDATE tbl_rentals SET return_status=0 WHERE id=$rental_id");
        $run_query2 = mysqli_query($conn, "UPDATE tbl_rentals SET booking_status=1 WHERE id=$rental_id");
        $return_status = 0;
    }

    if ($return_status == 1) {
        $car_status = 1;
    } else {
        $car_status = 0;
    }

    mysqli_query($conn, "UPDATE tbl_cars SET status=$car_status WHERE id=$car_id");

    show_alert_message('Return Status Updated Successfully', 'success');
    redirect('dashboard.php?view=rental_index');
    exit();
}
