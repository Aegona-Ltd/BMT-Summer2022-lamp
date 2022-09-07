@extends('layouts.app')
@section('content')
@csrf
  <div class="container">
    <div class="row align-items-start">
      <div class="col"></div>
      <div class="col">
        <div class="header">
          <h4 style="color: #35BDB2;line-height:70px">Add product</h4>
        </div>
        <div style="clear:both"></div>
      </div>
      <div class="col"></div>
    </div>
    <div class="row align-items-center">
      <a href="{{route('showproduct')}}">Back</a>
      <form action="{{route('saveproducts')}}" method="POST">
        @csrf
        <div class="col-md-1"></div>
        <div class="col">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
            @error('name')
            <small id="namelHelp" class="form-text text-muted">Dữ liệu không được để trống</small>
            @enderror
          </div>
          <div class="col-md-1"></div>
        <div class="col">
          <div class="form-group">
            <label for="name">Type</label>
            <input type="text" class="form-control" id="type" name="type" >
            @error('type')
            <small id="namelHelp" class="form-text text-muted">Nhập chữ</small>
            @enderror
          </div>
          <div class="col-md-1"></div>
        <div class="col">
          <div class="form-group">
            <label for="name">Price</label>
            <input type="number" class="form-control" id="price" name="price" >
            @error('price')
            <small id="namelHelp" class="form-text text-muted">Bắt buộc nhập số nguyên</small>
            @enderror
          </div>
          <div class="col-md-1"></div>
        <div class="col">
          <div class="form-group">
            <label for="name">Inventory</label>
            <input type="text" class="form-control" id="inventory" name="inventory" >
            @error('inventory')
            <small id="namelHelp" class="form-text text-muted">Bắt buộc nhập số nguyên</small>
            @enderror
          </div> 
        <div class="row align-items-center" style="margin-top: 15px;">
          <!-- <div class="col-md-3"> -->
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!-- </div> -->
        </div>
      </form>

    </div>
  </div>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
@endsection
