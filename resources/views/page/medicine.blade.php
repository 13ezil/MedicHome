@extends('layout.app')
@section('content')
<div class="container">
<table class="table ml-4 mr-4 h-25">
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
    <td ><a href="{{route('selectorder',$m->name)}}"> <button type="button" class="btn btn-dark">Select Item</button></a>
    </tr>
    @endforeach
</div>
    </tbody>
</table>
<div class="d-flex justify-content-center">
{{ $med->links() }}
</div>
</div>
@endsection