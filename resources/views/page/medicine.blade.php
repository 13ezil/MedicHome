@extends('layout.app')
@section('content')
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
    </tbody>
    
</table>
</div>

<div class="d-flex justify-content-center">
{{ $med->links() }}
</div>
@endsection