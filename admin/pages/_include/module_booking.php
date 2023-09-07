<?php

/*
|--------------------------------------------------------------------------
| Booking Module
|--------------------------------------------------------------------------
*/
function insert_booking()
{
    global $conn;

    if (isset($_POST['insert_booking'])) {
        $car_id      = $_POST['car_id'];
        $customer_id = $_POST['customer_id'];
        $owner_id    = $_POST['owner_id'];
        $rent_date   = $_POST['rent_date'];
        $return_date = $_POST['return_date'];
        $duration    = $_POST['duration'];

        $file_name1 = $_FILES['nrc_front']['name'];
        $file_temp1 = $_FILES['nrc_front']['tmp_name'];

        $file_name2 = $_FILES['nrc_back']['name'];
        $file_temp2 = $_FILES['nrc_back']['tmp_name'];


        $file_name1 = uniqid(time()) . $file_name1;
        move_uploaded_file($file_temp1, 'admin/pages/_uploads/nrc/'.$file_name1);

        $file_name2 = uniqid(time()) . $file_name2;
        move_uploaded_file($file_temp2, 'admin/pages/_uploads/nrc/'.$file_name2);

        $query1 = "INSERT INTO tbl_rentals (car_id, customer_id, owner_id, rent_date, return_date, duration, nrc_front, nrc_back)
                   VALUES ($car_id, $customer_id, $owner_id, '$rent_date', '$return_date', $duration, '$file_name1', '$file_name2')";
        mysqli_query($conn, $query1);

        $query2 = "UPDATE tbl_cars SET status = 0 WHERE id = $car_id";
        mysqli_query($conn, $query2);

        show_alert_message('Your Booking Submitted Successfully', 'success');
        header('location: index.php');
        exit();
    }
}
