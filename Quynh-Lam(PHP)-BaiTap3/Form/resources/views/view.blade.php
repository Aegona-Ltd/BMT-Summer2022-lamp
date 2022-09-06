@extends('layouts.app')
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@section('content')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
  <div class="container">
    <div class="row justify-content-center">
      <div class="d-sm-none col-md-1"></div>
      <div class="col-sm-12 col-md-10" style="text-align: center;">
      <h4 style="color: #35BDB2; margin-top: 40px;">Load Contact Data</h4>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Subject</th>
              <th scope="col">Content</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
            @foreach($savecontact as $save)
            <tr>
            <td>{{$save->name}}</td>
             <td>{{$save->email}}</td>
             <td>{{$save->subject}}</td>
             <td>{{$save->content}}</td>
             <td><a href="/admin/update/{{$save->id}}">Update</a></td>
             <td>
             <form action="/admin/delete/{{$save->id}}" method="POST">
              @csrf
             <button type="submit" class="btn btn-danger">Delete</button>
             </form>
             </td>
             </tr>
             @endforeach
            
          </thead>
          
          <tbody>
            
          </tbody>
          <tfoot></tfoot>
        </table>
        {{$savecontact->links()}}
      </div>
      <div class="d-sm-none col-md-1"></div>
    </div>
  </div>
  <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript" src="scrip.js"></script>
  <script type="text/javascript" src="aj.js"></script>
  @endsection