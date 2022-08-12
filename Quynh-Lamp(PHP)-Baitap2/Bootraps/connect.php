<?php
$host = "localhost";
$db_name = "test";
$username = "root";
$pass = "";
try{
$con = new PDO('mysql:host=' . $host . ';dbname=' . $db_name, $username, $pass);
//sử dụng thuộc tính để bắt lỗi
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "Kết nối thành công";
}
catch(PDOException $e)
{
// echo "Kết nối thất bại" .$e->getMessage();
}
?>