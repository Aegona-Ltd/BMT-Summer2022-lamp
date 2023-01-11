<?php
header("Content-Type:application/json");
    include_once('../config/config.php');
    include_once('../model/User.php');

    $db = new db();
    $connect = $db->connect();

    $user = new User($connect);

    $user->id = isset($_GET['id']) ? $_GET['id'] : die();
    $user->getUserbyid();

    $user_item = array(
        'id' => $user->id,
        'fullname' => $user->fullname,
        'companyname' => $user->companyname,
        'businessphone' => $user->businessphone,
        'email' => $user->email,
        'password' => $user->password
    );
    print_r(json_encode($user_item));
?>