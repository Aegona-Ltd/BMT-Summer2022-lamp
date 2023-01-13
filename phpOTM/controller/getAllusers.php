<?php
header("Content-Type:application/json");
    include_once('../config/config.php');
    include_once('../model/Users.php');

    $db = new db();
    $connect = $db->connect();

    $user = new Users($connect);
    $read = $user->read();

    $num = $read->rowCount();
    if($num >0){
        $user_arr = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $user_item = array(
                'id' => $id,
                'fullname' => $fullname,
                'companyname' => $companyname,
                'businessphone' => $businessphone,
                'email' => $email,
                'password' => $password,
                'created' => $created,
                'updated' => $updated, 
                'role' => $role
            );
            array_push($user_arr, $user_item);
        }
    echo json_encode($user_arr);
    }
?>