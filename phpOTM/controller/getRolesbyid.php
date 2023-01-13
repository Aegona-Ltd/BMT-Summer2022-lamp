<?php
header("Content-Type:application/json");
    include_once('../config/config.php');
    include_once('../model/Roles.php');

    $db = new db();
    $connect = $db->connect();

    $role = new Roles($connect);

    $role->id = isset($_GET['id']) ? $_GET['id'] : die();
    $result = $role->getRolebyid();

    if ($result) {
        $role_item = array(
            'id' => $role->id,
            'name' => $role->name 
        );
        print_r(json_encode($role_item));
    } else {
    printf("empty");
    }
?>