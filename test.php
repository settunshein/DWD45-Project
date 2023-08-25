<?php 

session_start();

$hash_pwd    = password_hash($password, PASSWORD_BCRYPT);
echo $hash_pwd;
echo '<hr>';

if (isset($auth_user)) {
	echo '<pre>' . print_r($auth_user, true) . '</pre>';
}  else {
	echo 'There is No Login User';
}