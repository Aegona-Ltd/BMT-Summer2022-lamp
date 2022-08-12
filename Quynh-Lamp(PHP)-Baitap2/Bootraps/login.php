
<?php
include_once 'connect.php';
try{
$st =$con->prepare("SELECT id,username, password FROM user");
//thực thi câu truy vấn
$st->execute();
//tìm nạp mảng 
$st->setFetchMode(PDO::FETCH_ASSOC);
//xuất kết quả 
$result = $st->fetchAll();
//sử dụng vòng lặp tìm kq trong item
foreach($result as $item)
{
   $item['username']. '-' .$item['password'];
}
if (isset($_POST['username'])) {
  if ($item["username"] == $_POST['username'] && $item["password"] == $_POST['password']) {
    
    header("Location:http://localhost/Bootraps/contact.php");
}
}
}
catch(PDOException $e){
 
  
  echo "Đăng nhập thất bại" .$e->getMessage();

}
$con = null;




//----- so sánh kq


?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="defaut.css"> -->
</head>
<style>
  .form-group {
    margin-bottom: 15px;
  }
</style>

<body>
  <div class="container">
    <div class="row align-items-start">
      <div class="col"></div>
      <div class="col">
        <div class="header">
          <img style="float: left; margin:10px" src="ds.png">
          <h4 style="color: #35BDB2;line-height:70px">Contact Form</h4>
        </div>
        <div style="clear:both"></div>
      </div>
      <div class="col"></div>
    </div>
    <div class="row align-items-center">
      <form action="" method="POST">
        <div class="col-md-1"></div>
        
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="username" name="username"  placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="Nhập Password" placeholder="Enter subject">
          </div>
          
        
      <div class="capcha">
        <div class="g-recaptcha" data-sitekey="6LfsLkMhAAAAADHZMNyZdVerQ-8rCNT9WBs_mUoZ"></div>
        
      </div>
          <!-- <div class="col-md-3"> -->
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" onclick="Login()">Submit</button>
          </div>
          <!-- </div> -->
        </div>
      </form>

    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="aj.js"></script>
  <script type="text/javascript" src="scrip.js"></script>
</body>

</html>

