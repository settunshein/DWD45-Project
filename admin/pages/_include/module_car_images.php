<?php

function get_car_images($id)
{
    global $conn;

    $result     = mysqli_query($conn, "SELECT * FROM tbl_car_images WHERE car_id=$id");
    $car_images = mysqli_fetch_assoc($result);

    // print_data($car_images);
    return $car_images;
}

function insert_car_images()
{
    global $conn;
    $car_id     = $_POST['car_id'];

    $file_name1 = $_FILES['car_image1']['name'];
    $file_temp1 = $_FILES['car_image1']['tmp_name'];

    $file_name2 = $_FILES['car_image2']['name'];
    $file_temp2 = $_FILES['car_image2']['tmp_name'];

    $file_name3 = $_FILES['car_image3']['name'];
    $file_temp3 = $_FILES['car_image3']['tmp_name'];

    $file_name4 = $_FILES['car_image4']['name'];
    $file_temp4 = $_FILES['car_image4']['tmp_name'];

    if ($_POST['old_image1'] != '') {
        run_edit_query($conn, $car_id, 'image_1', $_POST['old_image1']);
    } else {
        if ($file_name1) {
            $file_name1 = uniqid(time()) . $file_name1;
            move_uploaded_file($file_temp1, '_uploads/car_images/'.$file_name1);
            run_insert_query($conn, $car_id, 'image_1', $file_name1);
        } else {
            run_insert_query($conn, $car_id, 'image_1', '');
        }
    }

    if ($_POST['old_image2'] != '') {
        run_edit_query($conn, $car_id, 'image_2', $_POST['old_image2']);
    } else {
        if ($file_name2) {
            $file_name2 = uniqid(time()) . $file_name2;
            move_uploaded_file($file_temp2, '_uploads/car_images/'.$file_name2);
            run_insert_query($conn, $car_id, 'image_2', $file_name2);
        } else {
            run_insert_query($conn, $car_id, 'image_2', '');
        }
    }

    if ($_POST['old_image3'] != '') {
        run_edit_query($conn, $car_id, 'image_3', $_POST['old_image3']);
    } else {
        if ($file_name3) {
            $file_name3 = uniqid(time()) . $file_name3;
            move_uploaded_file($file_temp3, '_uploads/car_images/'.$file_name3);
            run_insert_query($conn, $car_id, 'image_3', $file_name3);
        } else {
            run_insert_query($conn, $car_id, 'image_3', '');
        }
    }

    if ($_POST['old_image4'] != '') {
        run_edit_query($conn, $car_id, 'image_4', $_POST['old_image4']);
    } else {
        if ($file_name4) {
            $file_name4 = uniqid(time()) . $file_name3;
            move_uploaded_file($file_temp4, '_uploads/car_images/'.$file_name4);
            run_insert_query($conn, $car_id, 'image_4', $file_name4);
        } else {
            run_insert_query($conn, $car_id, 'image_4', '');
        }
    }

    show_alert_message('Data Saved Successfully', 'success');
    redirect('dashboard.php?view=car_images&car_id='.$_POST['car_id']);
    exit();
}

function delete_car_images()
{
    global $conn;
    $car_id    = $_POST['car_id'];
    $image_no  = $_POST['image_no'];

    $query = "UPDATE tbl_car_images SET $image_no='' WHERE car_id=$car_id";
    mysqli_query($conn, $query);

    show_alert_message('Data Deleted Successfully', 'success');
    redirect('dashboard.php?view=car_images&car_id='.$_POST['car_id']);
    exit();
}

function run_insert_query($conn, $car_id, $col_name, $file_name)
{
    $row = mysqli_query($conn, "SELECT * FROM tbl_car_images WHERE car_id=$car_id");

    if (mysqli_num_rows($row) < 1) {
        $query = "INSERT INTO tbl_car_images(car_id, $col_name) VALUES ($car_id, '$file_name')";
    } else {
        $query = "UPDATE tbl_car_images SET $col_name='$file_name' WHERE car_id=$car_id";
    }

    mysqli_query($conn, $query);
}

function run_edit_query($conn, $car_id, $col_name, $file_name)
{
    $query = "UPDATE tbl_car_images SET $col_name='$file_name' WHERE id=$car_id";
    mysqli_query($conn, $query);
}
