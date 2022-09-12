@extends('layouts.app')
@section('content')
<div id="header">
  <h2>Contact Form</h2>
</div>
<div id="contenttable">
@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
  <table id="table1" class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Contact</th>
        <th style="text-align:center">Action Modal</th>
        <th style="text-align:center">Delete</th>

      </tr>
    </thead>
    <tbody>
      @foreach($info as $s)
      <tr>
        <th scope="row">{{$s->name}}</th>
        <td>{{$s->email}}</td>
        <td>{{$s->subject}}</td>
        <td>{{$s->content}}</td>
        <td style="text-align:center ;">
          <button type="button" data-id="{{$s->id}}" class="btn-update btn btn-primary">Update</button>
        </td>
        <td><Form action="/admin/delete/{{$s->id}}" method="POST">
          @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
        </Form></td>

      </tr>
      @endforeach
    </tbody>
   

  </table>
  
</div>
@include('Modal.modal1')

@endsection
@section('scripts')
<script>

   $(document).ready(function() {
    $('#table1').DataTable();
  });
  $('.btn-update').click(function() {
    $.ajax({
      type: "get",
      url: '/admin/getbyid/' + $(this).data('id'),
      dataType: "json",
      success: function(response) {
        console.log(response);
        $('#id').val(response.id);
        $('#name').val(response.name);
        $('#email').val(response.email);
        $('#subject').val(response.subject);
        $('#content').val(response.content);
      }
    });
    $('#exampleModal').modal('show');
  });
  $('.btn-save').click(function() {
    var formData = new FormData($('form#formUpdate')[0]);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // == csrf
      },
      type: "post",
      url: '/admin/save',
      data: formData,
      dataType: "json",
      processData: false,
      contentType: false,
      success: function(response) {
        console.log(response);
        $('#exampleModal').modal('hide');
        location.reload();
        // console.log
      }
    });
  })
</script>
@endsection