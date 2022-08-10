
<?php

$Data = ["usn" => "quynh@gmail.com", "pass" => "quynh1997123@"];
$verify=null;
$type=null;
$message=null;
if (isset($_POST['username'])) {
    if ($Data["usn"] == $_POST['username'] && $Data["pass"] == $_POST['password']) {
      $message= "Đăng nhập thành công!";
      $verify=1;
      $type="success";
      header("Location:http://localhost/Bootraps/contact.php");
      // echo "Đăng nhập thành công";
    } else {
      $message= "Đăng nhập thất bại!";
      $verify=0;
      $type="danger";
      // echo "Đăng nhập thất bại";
      // echo "Đăng nhập thất bại";
      
    }
  }

?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="defaut.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

</head>

<body>
 
</div>
  </div>
  <img style="float: left;" src="ds.png">


  <h4 style="color: #35BDB2; margin-top: 10px;">Log-in to your account abc</h4>
  </div>
  <form class="needs-validation" id="from1"method="POST">
    <div>
      <div class="form-row">
        <div class="content">
          <input type="text" class="form-control" name="username" id="email" placeholder="Username" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please Ten cua ban
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <input type="password" class="form-control" name="password" id="pass" placeholder="Password" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Hay Nhap Password
      </div>
    </div>
    </div>
    </div>
    <div class="content">
      <div class="capcha">
        <div class="g-recaptcha" data-sitekey="6LfsLkMhAAAAADHZMNyZdVerQ-8rCNT9WBs_mUoZ"></div>
        <div id="snackbar">Hay nhap capcha</div>
      </div>
      <div class="content">
        <button type="submit" id="btn" onclick="Login(event)" >Submit form</button>
      </div>
      
      <div class="us">
        <p>New to us?<a href="">Register</a></p>

      </div>
       <div class="content">
<div class="alert alert-<?php echo (isset($type)?$type:""); ?> <?php echo ($verify!=null?"d-block":""); ?>" role="alert">
<?php echo (isset($message)?$message:""); ?>
    </div>
  </form>

  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript" src="scrip.js"></script>
  <script type="text/javascript" src="aj.js"></script>
</body>

</html>
