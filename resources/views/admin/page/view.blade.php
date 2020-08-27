@extends('admin.layout.app')
@section('content')
<div class="container">
<div class="table-responsive">
<table class="table ml-4 mr-4 h-100 w-75">
    <thead class="thead-light">
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
    <td ><a href="{{route('admin.update',$m->id)}}"> <button type="button" class="btn btn-info">update</button></a>
          <a href = "{{route('admin.delete',$m->id)}}">  <button type="button" class="btn btn-danger">delete</button></td></a>
    </tr>
    @endforeach
</div>
    </tbody>
</table>
</div>
</div>
<div class="d-flex justify-content-center">
{{ $med->links() }}
</div>
@endsection