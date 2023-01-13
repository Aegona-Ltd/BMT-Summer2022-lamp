<?php
   

    header("Content-Type:application/json");
    include_once('../config/config.php');
    include_once('../model/Users.php');
        

    $db = new db();
    $connect = $db->connect();

    $user = new Users($connect);

    $data = json_decode(file_get_contents("php://input"));
    
    $user->fullname = $data->fullname;
    $user->companyname = $data->companyname;
    $user->businessphone = $data->businessphone;
    $user->email = $data->email;
    $user->password = $data->password;
 
    if($user->createUser()){
        echo json_encode(array('message', 'passed'));
      
    } else{
        echo json_encode(array('message', 'failed'));
      
    }

//     $test = [];
//     $test['success'] = true;
// return json_decode($test);


    // print_r($_POST);

    // header('Location: http://localhost/Summer2022-lamp/phpotm/view/login.php');

    // $array = [];
    // $array['test'] = 'huhu';

    // $fullname = $_POST['fullname'];
    // $companyname = $_POST['companyname'];
    // $businessphone = $_POST['businessphone'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    // $array['fullname'] = $fullname;
    // $array['companyname'] = $companyname;
    // $array['businessphone'] = $businessphone;    
    // $array['email'] = $email;
    // $array['password'] = $password;

    // $array['message'] = true;

    // echo json_encode($array);
?>