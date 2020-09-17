@extends('layout.app')
@section('content')
<<<<<<< HEAD
<style>
  .container{
      margin-top: 7%;
  }
</style>
<div class="container" >
  <div class="table-responsive-md">
    <table class="table ml-sm-4 mr-sm-4 h-sm-75">
        <thead class="thead-dark">
          <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Review</th>
            <th>Action</th>
          </tr>
        </thead>
    <tbody>
      <div class="container mb-4">
          @foreach ($med as $m)
          <tr>
              <td>{{$m->name}}</td>
              <td>{{$m->quantity}}</td>
              <td>{{$m->price}}</td>
              <td>{{$m->review}}</td>   
          <td ><a href="{{url('selectOrder/'. $m->name)}}"> <button type="button" class="btn btn-info">Select Item</button></a>
          </tr>
          @endforeach
      </div>
=======
<div class="table-responsive">
<table class="table table-borderless table-hover table-info ml-sm-0 mr-sm-0 mt-sm-1 h-sm-100">
    <thead class="thead-dark">
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Review</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($med as $m)
    <tr >
      <td class="name">{{$m->name}}</td>
      <td class="qt">{{$m->quantity}}</td>
      <td class="price">Rs. {{$m->price}}</td>
      <td>{{$m->review}}</td>
      <div class="card">   
      <td><a href="{{url('selectOrder/'. $m->name)}}" class="btn btn-lg w-100 order">Order Item</a></td>
      </div>
    </tr>
    @endforeach
>>>>>>> 4f961d6abbea41a0d7effe90229bf566031866f9
    </tbody>
    
</table>
</div>

<div class="d-flex justify-content-center">
{{ $med->links() }}
</div>
@endsection