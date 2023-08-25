<?php

/*
|--------------------------------------------------------------------------
| Brand Module
|--------------------------------------------------------------------------
*/
function get_all_brands()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tbl_brands");

    return $result;
}

function get_brand($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tbl_brands WHERE id=$id");
    $brand  = mysqli_fetch_assoc($result);

    return $brand;
}

function insert_brand()
{
    global $conn;
    $name  = $_POST['name'];
    $query = "INSERT INTO tbl_brands (name, created_at) VALUES ('$name', now())";
    mysqli_query($conn, $query);

    show_alert_message('New Brand Created Successfully', 'success');
    redirect('dashboard.php?view=brand_index');
}

function edit_brand()
{
    global $conn;
    $id    = $_POST['edit_brand_id'];
    $name  = $_POST['name'];
    $query = "UPDATE tbl_brands SET name='$name', updated_at=now() WHERE id=$id";
    mysqli_query($conn, $query);

    show_alert_message('Brand Updated Successfully', 'success');
    redirect('dashboard.php?view=brand_index');
}

function delete_brand()
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_brands WHERE id={$_POST['del_brand_id']}");

    show_alert_message('Brand Deleted Successfully', 'success');
    redirect('dashboard.php?view=brand_index');
}
