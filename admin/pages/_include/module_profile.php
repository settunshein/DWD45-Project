<?php

function edit_profile()
{
    global $conn;

    $id      = $_POST['auth_id'];
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $nrc_no  = $_POST['nrc_no'];
    $address = $_POST['address'];

    $file_name = $_FILES['profile']['name'];
    $file_temp = $_FILES['profile']['tmp_name'];

    if ($file_name) {
        $file_name = uniqid(time()) . $file_name;
        move_uploaded_file($file_temp, "uploads/users/$file_name");
        $query = "UPDATE tbl_users SET name='$name', email='$email', phone='$phone', address='$address', nrc_no='$nrc_no', image='$file_name' WHERE id=$id";
    } else {
        $query = "UPDATE tbl_users SET name='$name', email='$email', phone='$phone', address='$address', nrc_no='$nrc_no' WHERE id=$id";
    }

    mysqli_query($conn, $query);

    show_alert_message('Your Profile Updated Successfully', 'success');
    if ($_SESSION['auth_user']['role'] == 'admin') {
        header('location: profile_index.php');
        exit();
    } else {
        header('location: dashboard.php');
        exit();
    }
}
