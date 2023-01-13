<?php
header("Content-Type:application/json");
    include_once('../config/config.php');
    include_once('../model/Roles.php');

    $db = new db();
    $connect = $db->connect();

    $roles = new Roles($connect);
    $read = $roles->read();

    $num = $read->rowCount();
    if($num >0){
        $role_arr = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $roles_item = array(
                'id' => $id,
                'name' => $name,
            );
            array_push($role_arr, $roles_item);
        }
    echo json_encode($role_arr);
    }
?>