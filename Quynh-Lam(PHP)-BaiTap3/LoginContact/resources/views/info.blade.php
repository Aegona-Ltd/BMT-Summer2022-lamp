@extends('layouts.app')

@section('contact')
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
            @foreach($infos as $info)
            <tr>

            <td>{{$info->id}}</td>
            <td>{{$info->name}}</td>
            <td>{{$info->email}}</td>
            <td>{{$info->subject}}</td>
            <td>{{$info->content}}</td>
            </tr>

            @endforeach
          </thead>
          <tbody>
            
          </tbody>
          <tfoot></tfoot>
        </table>
      </div>
      <div class="d-sm-none col-md-1"></div>
    </div>
  </div>
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  @endsection