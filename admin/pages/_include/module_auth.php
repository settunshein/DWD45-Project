<?php

function register_account()
{
	global $conn;

	if (isset($_POST['register-account'])) {
        //echo '<pre>' . print_r($_POST, true) . '</pre>'; die;
        $name        = $_POST['name'];
        $email       = $_POST['email'];
        $password    = $_POST['password'];
        $pwd_confirm = $_POST['password_confirmation'];
        $nrc_no      = $_POST['nrc_no'];
        $phone       = $_POST['phone'];
        $address     = $_POST['address'];

        $hash_pwd    = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO tbl_users (name, email, password, nrc_no, phone, address)
                  VALUES ('$name', '$email', '$hash_pwd', '$nrc_no', '$phone', '$address')";

        mysqli_query($conn, $query);
        show_alert_message('New Account Registered Successfully', 'success');
        header('location: account.php');
    }
}



function login_account()
{
    global $conn;

	if (isset($_POST['login-account'])){
		$email    = $_POST['email'];
        $password = $_POST['password'];
        $query    = "SELECT * FROM tbl_users WHERE email='$email'";
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

            if ($_SESSION['auth_user']['role'] == 'customer') {
                show_alert_message('LoggedIn Successfully', 'success');
                echo "<script>history.go(-2)</script>";
            } else {
                show_alert_message('LoggedIn Successfully', 'success');
                header('location: admin/pages/dashboard.php');
                exit();
            }
            exit();

        } else {

            show_alert_message('Invalid Credentials', 'error');
            header('location: account.php');
            exit();

        }
	}
}



function logout()
{
    unset($_SESSION['auth_user']);
}
