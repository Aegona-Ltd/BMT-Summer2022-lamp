<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta charshet="utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="defaut.css"> -->
</head>
<style>
  .form-group {
    margin-bottom: 15px;
  }
</style>

<body>
    @yield('contact')
    @section('js')
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" 
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js"></script> -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></script>
  

  
  

    @show
    
</body>

</html>