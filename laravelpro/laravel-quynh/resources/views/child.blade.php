@extends('layout.app');
@section('title','Tiêu đề trang child');
@section('content')
<p>Nội dung trang con</p>
<p>Họ và Tên :{{$data}}</p>
@endsection()
@section('sidebar')
<p>Nội dung sidebar</p>
@endsection()

