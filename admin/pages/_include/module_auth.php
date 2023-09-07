<?php

function register_user_account()
{
	global $conn;

	if (isset($_POST['register_account'])) {
        //echo '<pre>' . print_r($_POST, true) . '</pre>'; die;
        $name        = $_POST['name'];
        $email       = $_POST['email'];
        $password    = $_POST['password'];
        $nrc_no      = $_POST['nrc_no'];
        $phone       = $_POST['phone'];
        $address     = $_POST['address'];

        $hash_pwd    = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO tbl_users (name, email, password, nrc_no, phone, address)
                  VALUES ('$name', '$email', '$hash_pwd', '$nrc_no', '$phone', '$address')";

        mysqli_query($conn, $query);
        show_alert_message('New Account Registered Successfully', 'success');
        header('location: account.php');
        exit();
    }
}



function login_user_account()
{
    global $conn;

	if (isset($_POST['login_account'])){
		$email    = $_POST['email'];
        $password = $_POST['password'];
        $query    = "SELECT * FROM tbl_users WHERE email='$email' and role='user'";
        $result   = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {

            $authUser = mysqli_fetch_assoc($result);

            if (! password_verify($password, $authUser['password'])) {
                show_alert_message('Incorrect Password', 'error');
                header('location: account.php');
                exit();
            }

            $_SESSION['auth_user'] = [
                'auth_id' => $authUser['id'],
                'name'    => $authUser['name'],
                'email'   => $authUser['email'],
                'phone'   => $authUser['phone'] ?? '',
                'nrc_no'  => $authUser['nrc_no'] ?? '',
                'image'   => $authUser['image'] ?? '',
                'address' => $authUser['address'] ?? '',
                'role'    => $authUser['role'],
            ];

            show_alert_message('LoggedIn Successfully', 'success');
            echo "<script>history.go(-2)</script>";
            exit();

        } else {

            show_alert_message('Invalid Credentials', 'error');
            header('location: account.php');
            exit();

        }
	}
}



function login_admin_account()
{
    global $conn;

	if (isset($_POST['admin_login'])){
		$email    = $_POST['email'];
        $password = $_POST['password'];
        $query    = "SELECT * FROM tbl_users WHERE email='$email' and role='admin'";
        $result   = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {

            $authUser = mysqli_fetch_assoc($result);

            if (! password_verify($password, $authUser['password'])) {
                show_alert_message('Incorrect Password', 'error');
                header('location: admin.php');
                exit();
            }

            $_SESSION['auth_user'] = [
                'auth_id' => $authUser['id'],
                'name'    => $authUser['name'],
                'email'   => $authUser['email'],
                'phone'   => $authUser['phone'] ?? '',
                'nrc_no'  => $authUser['nrc_no'] ?? '',
                'image'   => $authUser['image'] ?? '',
                'address' => $authUser['address'] ?? '',
                'role'    => $authUser['role'],
            ];

            show_alert_message('LoggedIn Successfully', 'success');
            header('location: admin/pages/dashboard.php');
            exit();

        } else {

            show_alert_message('Invalid Credentials', 'error');
            header('location: admin.php');
            exit();

        }
	}
}



function logout()
{
    unset($_SESSION['auth_user']);
}
