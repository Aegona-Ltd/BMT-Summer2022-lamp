<?php
header("Content-Type:application/json");
    include_once('../config/config.php');
    include_once('../model/User.php');

    $db = new db();
    $connect = $db->connect();

    $user = new User($connect);

    $user->id = isset($_GET['id']) ? $_GET['id'] : die();
    $result = $user->getUserbyid();
    if ($result) {
        $user->delete();
        printf("DELETE PASSED");
    } else {
        printf("ID EMPTY");
    }
   
?>