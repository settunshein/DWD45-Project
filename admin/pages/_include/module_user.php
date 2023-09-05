<?php

/*
|--------------------------------------------------------------------------
| User Module
|--------------------------------------------------------------------------
*/
function get_all_users()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tbl_users");

    return $result;
}

function get_user($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE id=$id");
    $user   = mysqli_fetch_assoc($result);

    return $user;
}

function insert_user()
{
    global $conn;
    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $password  = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role      = $_POST['role'];
    $phone     = $_POST['phone'] ?? '';
    $address   = $_POST['address'] ?? '';

    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];

    if( $file_name ) {
        $file_name = uniqid(time()) . $file_name;
        move_uploaded_file($file_temp, "_uploads/user/$file_name");
    }

    $query  = "INSERT INTO tbl_users (name, email, password, role, phone, address, image, created_at)
               VALUES ('$name', '$email', '$password', '$role', '$phone', '$address', '$file_name', now())";
    mysqli_query($conn, $query);

    show_alert_message('New User Created Successfully', 'success');
    redirect('dashboard.php?view=user_index');
}

function edit_user()
{
    global $conn;
    $id        = $_POST['edit_user_id'];
    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $role      = $_POST['role'];
    $phone     = $_POST['phone'] ?? '';
    $address   = $_POST['address'] ?? '';
    $old_image = $_POST['old_image'];

    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];

    if( $file_name ) {
        $file_name = uniqid(time()) . $file_name;
        move_uploaded_file($file_temp, "uploads/user/$file_name");

        $query = "UPDATE tbl_users SET name='$name', email='$email', phone='$phone', address='$address',
                  role='$role', image='$file_name', updated_at=now() WHERE id=$id";
    }else{
        $query = "UPDATE tbl_users SET name='$name', email='$email', phone='$phone', address='$address',
                  role='$role', image='$old_image', updated_at=now() WHERE id=$id";
    }
    mysqli_query($conn, $query);

    show_alert_message('User Updated Successfully', 'success');
    redirect('dashboard.php?view=user_index');
}

function delete_user()
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_users WHERE id={$_POST['del_user_id']}");

    show_alert_message('User Deleted Successfully', 'success');
    redirect('dashboard.php?view=user_index');
}
