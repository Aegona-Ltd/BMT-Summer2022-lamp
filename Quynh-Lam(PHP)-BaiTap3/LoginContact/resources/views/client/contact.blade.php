@extends('client.layout')
@section('contact')
  <div class="container">
    <div class="row align-items-start">
      <div class="col"></div>
      <div class="col">
        <div class="header">
          <h4 style="color: #35BDB2;line-height:70px">Contact Form</h4>
        </div>
        <div style="clear:both"></div>
      </div>
      <div class="col"></div>
    </div>
    <div class="row align-items-center">
      <form action="{{route('ccgidodelbietnua')}}" method="POST">
        @csrf
        <div class="col-md-1"></div>
        <div class="col">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="Quynh" placeholder="Enter name">
            <small id="namelHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="quynh123@gmail.com" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="subject" class="form-control" id="subject" name="subject" value="Tieu de" placeholder="Enter subject">
          </div>
          <div class="form-group">
            <label for="textarea">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3">Day la noi dung mau</textarea>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="row align-items-center">
          <!-- <div class="col-md-3"> -->
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!-- </div> -->
        </div>
      </form>

    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
@endsection

