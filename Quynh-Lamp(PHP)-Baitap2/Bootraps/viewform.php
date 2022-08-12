<?php
include_once 'connect.php';
$dataContact=[];
$sQuery = "select * from contact";
$result = $con->query($sQuery);

$dataContact=$result->fetchAll(PDO::FETCH_ASSOC);
// var_dump($dataContact);
$con->connection = null;
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <link rel="stylesheet" href="table.css"> -->
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="d-sm-none col-md-1"></div>
      <div class="col-sm-12 col-md-10" style="text-align: center;">
      <h4 style="color: #35BDB2; margin-top: 40px;">Load Contact Data</h4>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Subject</th>
              <th scope="col">Content</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($dataContact as $key => $contact) {
                echo '<tr><td>'.$contact["id"].'</td>';
                echo '<td>'.$contact["name"].'</td>';
                echo '<td>'.$contact["email"].'</td>';
                echo '<td>'.$contact["subject"].'</td>';
                echo '<td>'.$contact["content"].'</td></tr>';
              }
            ?>
          </tbody>
          <tfoot></tfoot>
        </table>
      </div>
      <div class="d-sm-none col-md-1"></div>
    </div>
  </div>
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript" src="scrip.js"></script>
  <script type="text/javascript" src="aj.js"></script>
</body>