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
    // echo $_FILES['car_image1']['name'];
    // echo $_FILES['car_image2']['name'];
    // echo $_FILES['car_image3']['name'];
    // echo $_FILES['car_image4']['name'];

    // die;

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

    if ($file_name1) {
        $file_name1 = uniqid(time()) . $file_name1;
        move_uploaded_file($file_temp1, '_uploads/car_images/'.$file_name1);
    } else {
        $file_name1 = '';
    }

    if ($file_name2) {
        $file_name2 = uniqid(time()) . $file_name2;
        move_uploaded_file($file_temp2, '_uploads/car_images/'.$file_name2);
    } else {
        $file_name2 = '';
    }

    if ($file_name3) {
        $file_name3 = uniqid(time()) . $file_name3;
        move_uploaded_file($file_temp3, '_uploads/car_images/'.$file_name3);
    } else {
        $file_name3 = '';
    }

    if ($file_name4) {
        $file_name4 = uniqid(time()) . $file_name4;
        move_uploaded_file($file_temp4, '_uploads/car_images/'.$file_name4);
    } else {
        $file_name4 = '';
    }

    $query =  "INSERT INTO tbl_car_images(car_id, image_1, image_2, image_3, image_4)
               VALUES ($car_id, '$file_name1', '$file_name2', '$file_name3', '$file_name4')";

    mysqli_query($conn, $query);

    show_alert_message('New Car Image Created Successfully', 'success');
    // header('location: image_create.php?car_id='. $_POST['car_id']);
    redirect('dashboard.php?view=car_images&car_id='.$_POST['car_id']);
    exit();
}
