

 
  <!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="defaut.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="aj.js"></script>
  

</head>
<body>
  <div class="header">
  <img style="float: left;" src="ds.png">
  <h4 style="color: #35BDB2; margin-top: 10px;">Log-in to your account abc</h4>
</div>
  <form class="needs-validation" novalidate name="contact" method="POST" action="viewform.php" >
    <div>
  <div class="form-row">
    <div class="content">
      
      
      <input type="text" class="form-control" placeholder="Nhap ten cua  ban" name ="username">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
   
    <div class="content">
      
      
        <input type="text" class="form-control"  placeholder="Username" id="email" name="name"
          aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please Ten cua ban
        </div>
      </div>
    </div>

  </div>

  <div class="content">
      
      
        <input type="password" class="form-control" id="pass" placeholder="pass" name ="pass"
          aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Hay Nhap Password
        </div>
      </div>
    </div>
    
  
    <div class="content">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texta"></textarea>
  </div>

  </div>
   <div class="content">
    <div class="capcha">
  <div class="g-recaptcha" data-sitekey="6LfsLkMhAAAAADHZMNyZdVerQ-8rCNT9WBs_mUoZ"></div>
</div>

  <div class="content">
    <button  type="submit" id="btn" >Submit form</button>
</div>

<div class="us">
<p>New to us?<a href="">Register</a></p>
</div>


<script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script type="text/javascript" src="scrip.js"></script>
 

</body>
</html>



