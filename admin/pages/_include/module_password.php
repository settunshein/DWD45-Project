<?php

function edit_password()
{
    global $conn;

    if (isset($_POST['edit_password'])) {

        $current_password = $_POST['current_password'];
        $new_password     = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $email            = $_POST['email'];

        $query    = "SELECT * FROM tbl_users WHERE email='$email'";
        $result   = mysqli_query($conn, $query);
        $authUser = mysqli_fetch_assoc($result);

        if (password_verify($current_password, $authUser['password'])) {

            if ($new_password == $confirm_password) {
                $hash_password = password_hash($new_password, PASSWORD_BCRYPT);
                $query = "UPDATE tbl_users SET password='$hash_password' WHERE email='$email'";
                mysqli_query($conn, $query);

                show_alert_message('Your Password Updated Successfully', 'success');
                if ($authUser['role'] == 'admin' || $authUser['role'] == 'owner') {
                    header('location: ../account.php');
                    session_destory();
                } else {
                    header('location: account.php');
                    session_destory();
                }
            } else {
                if ($authUser['role'] == 'admin' || $authUser['role'] == 'owner') {
                    show_alert_message('Password Confirmation Does Not Match', 'error');
                    redirect('dashboard.php?view=password_edit');
                    exit();
                } else {
                    show_alert_message('Password Confirmation Does Not Match', 'error');
                    redirect('location: dashboard.php');
                    exit();
                }
            }

        } else {

            if ($authUser['role'] == 'admin' || $authUser['role'] == 'owner') {
                show_alert_message('Invalid Current Password', 'error');
                redirect('dashboard.php?view=password_edit');
                exit();
            } else {
                show_alert_message('Invalid Current Password', 'error');
                header('location: dashboard.php');
                exit();
            }

        }
    }
}
