@extends('layout.app')
@section('content')
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
    </tbody>
    
</table>

<div class="d-flex justify-content-center">
{{ $med->links() }}
</div>
</div>
</div>
@endsection