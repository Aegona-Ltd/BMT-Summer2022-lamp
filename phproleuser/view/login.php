<?php
    session_start();
    // check ID empty
    // if (isset($_SESSION["ID"])) {
    //     header("Location:dashboard.php");
    //     exit();
    // }

    include_once('..\config\database.php');
    if (isset($_POST["submit"])) {
        $errorMsg = "";
        $email = $con->real_escape_string($_POST['email']);
        $password = $con->real_escape_string(md5($_POST['password']));
        if (empty($email) || empty($password)) {
          $errorMsg = "Email and Password is required";
        }else{
          $query  = "SELECT * FROM userrole WHERE email = '$email' AND password = '$password'";
          $result = $con->query($query);
          if($result->num_rows > 0){
              $row = $result->fetch_assoc();
              $_SESSION['ID'] = $row['id'];
              $_SESSION['ROLE'] = $row['role'];
              $_SESSION['EMAIL'] = $row['email'];
              header("Location:dashboard.php");
              die();                              
          }else{
            $errorMsg = "No user found on this username";
          } 
          
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui teal image header">
        <div class="content">
          Log-in to your account
        </div>
      </h2>
      <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
      <?php } ?>
      <form class="ui large form error" id="myform" action="" method="POST">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="email" name="email" placeholder="E-mail address">
            </div>
          </div>
          <div class="field ">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
          </div>
          <button class="ui fluid large teal submit button" name="submit">Login</button>
        </div>
        <!-- <div class="ui error message"></div> -->
      </form>
  
      <div class="ui message">
        New to us? <a href="index.php">Sign Up</a>
      </div>
    </div>
  </div>
</body>
</html>
