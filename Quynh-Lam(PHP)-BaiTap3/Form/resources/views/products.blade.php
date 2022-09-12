@extends('layouts.app')
@section('content')
<div id="header">
    <h2>Products Form</h2>
</div>
<div id="contenttable">
@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
        Thêm Sản Phẩm
    </button>
    <div>
        <table id="table1" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Inventory</th>
                    <th style="text-align:center">Action</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach($products as $p)
                <tr>
                    <th scope="row">{{$p->name}}</th>
                    <td>{{$p->type}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->inventory}}</td>
                    <td style="text-align:center ;">
                        <button type="button" data-id="{{$p->id}}" class="btn-product btn btn-primary">Update</button>
                    </td>
                    <td>
                        <Form action="/admin/product/delete/{{$p->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </Form>
                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    @include('Modal.modaladd')
    @include('Modal.modalUpdate')
</div>


@endsection
@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table1').DataTable();
    });
    $('.btn-product').click(function() {
        $.ajax({
            type: "get",
            url: "/admin/product/getid/" + $(this).data('id'),
            dataType: "json",
            success: function(response) {
                console.log(response);
                $('#updateproductModal').modal('show');
                $('#updateproductModal').find("[name='id']").val(response.id)
                $('#updateproductModal').find("[name='name']").val(response.name)
                $('#updateproductModal').find("[name='type']").val(response.type)
                $('#updateproductModal').find("[name='price']").val(response.price)
                $('#updateproductModal').find("[name='inventory']").val(response.inventory)

            }
        });
     
    });
    $('.btn-update').click(function(){
    //lay du lieu cua form
    var formData =new FormData($('form#formUpdateproduct')[0])

    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // == csrf
      },
        type: "post",
        url: '/admin/product/update',
        data:formData,
        dataType: "json",
        processData :false,
        contentType :false,
        success:function(response){
            console.log(response);

            $('#updateproductModal').modal('hide');
            // swal({
//   title: "Good job!",
//   text:response.message,
//   icon: (response.status==1?"success":"error"),
//   button: "OK",
// });
        // location.reload();
        }
    });
    });
</script>
@endsection