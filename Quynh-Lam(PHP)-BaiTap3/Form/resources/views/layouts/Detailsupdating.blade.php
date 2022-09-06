@extends('layouts.app')
@section('content')
@csrf
  <div class="container">
    <div class="row align-items-start">
      <div class="col"></div>
      <div class="col">
        <div class="header">
          <h4 style="color: #35BDB2;line-height:70px">Content needs updating</h4>
        </div>
        <div style="clear:both"></div>
      </div>
      <div class="col"></div>
    </div>
    <div class="row align-items-center">
      <form action="{{route('saveupdate')}}" method="POST">
        @csrf
        <div class="col-md-1"></div>
        <div class="col">
            <a href="{{route('show')}}">Back</a>
            <input type="hidden" name="id" value="{{$contact->id}}">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{$contact->name}}" id="name" name="name">
            <small id="namelHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="subject" class="form-control" id="subject" name="subject" value="{{$contact->subject}}" >
          </div>
          <div class="form-group">
            <label for="textarea">Content</label>
            <textarea class="form-control"  id="content" name="content" rows="3">{{$contact->content}}</textarea>
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
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
@endsection

