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
        
        $data = json_decode(file_get_contents("php://input"));
        
        $user->fullname = $data->fullname;
        $user->companyname = $data->companyname;
        $user->businessphone = $data->businessphone;
        $user->email = $data->email;
        $user->password = $data->password;
        if($user->update()){
            echo json_encode(array('message', 'passed'));
        } else{
            echo json_encode(array('message', 'failed'));
        }
    } else {
        printf("ID EMPTY");
    }
   
?>