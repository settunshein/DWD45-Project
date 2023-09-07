<?php

function insert_payment()
{
    global $conn;

    if (isset($_POST['insert_payment'])) {
        //echo print_data($_POST);
        //echo print_data($_FILES); die;
        $customer_id  = $_POST['customer_id'];
        $rental_id    = $_POST['rental_id'];
        $payment_amt  = $_POST['payment_amt'];
        $payment_date = $_POST['payment_date'];

        $file_name    = $_FILES['payment_ss']['name'];
        $file_temp    = $_FILES['payment_ss']['tmp_name'];

        if (isset($file_name)) {
            $file_name = uniqid(time()) . $file_name;
            move_uploaded_file($file_temp, 'admin/pages/_uploads/payments/'.$file_name);
        }

        $query = "INSERT INTO tbl_payments (customer_id, rental_id, payment_amt, payment_date, payment_ss)
                  VALUES ($customer_id, $rental_id, $payment_amt, '$payment_date', '$file_name')";

        mysqli_query($conn, $query);

        show_alert_message('Your Payment Sent Success and We will be Contacting You Shortly', 'success');
        header('location: dashboard.php');
        exit();
    }
}

//function get_payment($rental_id)
//{
//    global $conn;
//
//    $query  = "SELECT * FROM tbl_payments WHERE rental_id = $rental_id";
//    $result = mysqli_query($conn, $query);
//    return $result;
//}

function get_payment($rental_id)
{
    global $conn;

    if ($result = mysqli_query($conn, "SELECT * FROM tbl_payments WHERE rental_id=$rental_id")) {
        return $result;
    }
}

function check_payment_status($rental_id)
{
    global $conn;

    $result  = mysqli_query($conn, "SELECT * FROM tbl_payments WHERE rental_id=$rental_id");
    $payment = mysqli_fetch_assoc($result);
    //return $payment ? true : false;
    return $payment;
}
