<?php
header("Content-Type:application/json");
    include_once('../config/config.php');
    include_once('../model/Users.php');

    $db = new db();
    $connect = $db->connect();

    $user = new Users($connect);

    $user->id = isset($_GET['email']) ? $_GET['email'] : die();
    $result = $user->getUserbyemail();

    if ($result) {
        $user_item = array(
            'id' => $user->id,
            'fullname' => $user->fullname,
            'companyname' => $user->companyname,
            'businessphone' => $user->businessphone,
            'email' => $user->email,
            'password' => $user->password,
            'created' => $user->created,
            'updated' => $user->updated,
            'role' => $user->role
        );
        print_r(json_encode($user_item));
    } else {
    printf("empty");
    }
?>